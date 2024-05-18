<?php

namespace App\Notifications;

use App\Defaults\Regular;
use App\Models\PasswordReset;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

class PasswordResetMail extends Notification
{
    use Queueable;
    protected $user;
    use Regular;
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
        $verificationUrl = route('verifyReset',['email'=>$this->user->username,'hash'=>$token]);
        $data=[
            'email'=>$this->user->username,'token'=>$token,'expiration'=>strtotime($this->codeExpiration(),time())
        ];
        PasswordReset::create($data);
        return (new MailMessage)
            ->subject('Hesap Kurtarma Doğrulaması')
            ->greeting('Merhaba '.$this->user->name)
            ->line('<br>Şifrenizi sıfırlamadan önce, bu talebi doğrulamanızı istiyoruz')
            ->action('Şimdi Doğrula',$verificationUrl)
            ->line('<br> Yukarıdaki bağlantı 24 saat içinde geçersiz olacaktır. ')
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
