<?php

namespace App\Notifications;

use App\Models\Login;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LoginMail extends Notification
{
    use Queueable;
    protected $user;
    protected $request;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$request)
    {
        $this->user = $user;
        $this->request = $request;
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
        $data=[ 'user'=>$this->user->id,'agent'=>$this->request->header('User-Agent'),
            'ip'=>$this->request->ip(),
        ];
        Login::create($data);
        $url = route('login');
        return (new MailMessage)
            ->subject('Giriş Bildirimi')
            ->greeting('Merhaba '.$this->user->name)
            ->line("Hesabınıza erişildi. Eğer bu giriş sizin tarafınızdan yetkilendirilmediyse, hesap detaylarınızı sıfırlamak için aşağıdaki düğmeye tıklayın.<br>")
            ->line("<b>IP:</b> ".$this->request->ip()."<br>")
            ->line("<b>Time:</b> ".date('M d Y, h:i a')."<br>")
            ->line("<b>Type:</b> E-posta ve Şifre ile Giriş Yap")
            ->action('Panoya Git',$url)
            ->line("Eğer bu sizseniz görmezden gelin.<b>");
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
