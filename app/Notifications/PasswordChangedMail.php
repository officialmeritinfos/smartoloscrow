<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordChangedMail extends Notification
{
    use Queueable;
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
        $url = route('login');
        return (new MailMessage)
                    ->subject('Hesap Sıfırlama Bildirimi')
                    ->greeting('Merhaba '.$this->user->name)
                    ->line(env('APP_NAME')." üzerindeki hesap şifrenizin sıfırlandığına dair kısa bir bildirimdir. Eğer
                    bu işlemi siz gerçekleştirmediyseniz, giriş yaparak şifrenizi sıfırlamanızı öneririz.")
                    ->action('Giriş', $url)
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
