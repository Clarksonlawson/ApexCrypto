<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserNotification extends Notification
{
    use Queueable;

    protected $title;
    protected $message;
    protected $type; // e.g., 'login', 'trade', 'verification'
    protected $ip;

    /**
     * Create a new notification instance.
     *
     * @param string $title    Notification title
     * @param string $message  Notification message
     * @param string $type     Notification type ('login', 'trade', 'verification', etc.)
     * @param string|null $ip  Optional IP address
     */
    public function __construct(string $title, string $message, string $type = 'general', string $ip = null)
    {
        $this->title = $title;
        $this->message = $message;
        $this->type = $type;
        $this->ip = $ip;
    }

    /**
     * Notification channels.
     */
    public function via(object $notifiable): array
    {
        return ['database', 'mail'];
    }

    /**
     * Mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $mail = (new MailMessage)
            ->subject($this->title)
            ->line($this->message)
            ->line('Time: ' . now())
            ->action('View Dashboard', url('/user/dashboard'));

        if ($this->ip) {
            $mail->line('IP Address: ' . $this->ip);
        }

        return $mail;
    }

    /**
     * Store notification in database.
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => $this->title,
            'message' => $this->message,
            'type' => $this->type,
            'ip' => $this->ip,
            'time' => now()->toDateTimeString(),
        ];
    }
}