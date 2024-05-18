<?php

namespace App\Notifications;

use App\Defaults\Regular;
use App\Models\EmailVerification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

class EmailVerifyMail extends Notification
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
        $verificationUrl = route('emailVerification',['email'=>$this->user->username,'hash'=>$token]);
        $data=[
            'email'=>$this->user->username,'token'=>$token,'expiration'=>strtotime($this->codeExpiration(),time())
        ];
        EmailVerification::create($data);
        return (new MailMessage)
            ->subject('E-posta Doğrulama')
            ->greeting('Merhaba '.$this->user->name)
            ->line('.<br>Lütfen aşağıdaki düğmeye tıklayarak e-posta adresinizi doğrulayın.')
            ->action('Şimdi Doğrula',$verificationUrl)
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
