<?php

namespace App\Notifications;

use App\Defaults\Regular;
use App\Models\TwoFactor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

class TwoFactorMail extends Notification
{
    use Queueable;
    use Regular;
    protected $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $token = sha1(Str::random());
        //add this to the user verification record
        $verificationUrl = route('auth.twoFactor',['email'=>$this->user->username,'hash'=>$token]);
        $data=[
            'user'=>$this->user->id,'token'=>$token,'expiration'=>strtotime($this->codeExpiration(),time())
        ];
        TwoFactor::create($data);
        return (new MailMessage)
            ->subject('Giriş Kimlik Doğrulama')
            ->greeting('Merhaba '.$this->user->name)
            ->line("Birisi yeni bir konumdan ".env('APP_NAME')." hesabınıza giriş yapmaya çalışmış gibi görünüyor.
            Bu sizseniz, hesabınıza bu konumdan giriş yapmayı yetkilendirmek için aşağıdaki bağlantıyı takip edin. Eğer bu siz değilseniz, şifrenizi en kısa zamanda değiştirmenizi öneririz")
            ->action('Girişi Doğrula',$verificationUrl)
            ->line('<br> Yukarıdaki bağlantının süresi 24 saat içinde dolacak. ')
            ->line(env('APP_NAME').'ı kullandığınız için teşekkür ederiz! ');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
