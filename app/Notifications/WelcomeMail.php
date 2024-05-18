<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeMail extends Notification
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
        return (new MailMessage)
                    ->subject(env('APP_NAME').'e Hoş Geldiniz')
                    ->greeting('Merhaba '.$this->user->name)
                    ->line(env('APP_NAME') ."ekibinden size sıcak bir karşılama.<br><p>Sizin gibi bireylerin sınırsız fırsatlarla yatırım
                    yapmasına yardımcı olmak için ".env('APP_NAME')."i kurduk.
                    Yatırım paketlerimizle yatırımcılara sınırsız kazanç elde etme imkanı sunuyoruz.</p>
                    <p>".env('APP_NAME')." hakkında ne düşündüğünüzü duymak isteriz ve geliştirebileceğimiz bir şey varsa bize bildirin.
                    Herhangi bir sorunuz olursa, bizimle iletişime geçmekten çekinmeyin.<br>")
                    ->line('Uygulamamızı kullandığınız için teşekkür ederiz!');
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
