<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Messages\MailMessage;

class InvestmentCompleted extends Notification
{
    use Queueable;

    protected $investment;
    protected $profit;

    public function __construct($investment, $profit)
    {
        $this->investment = $investment;
        $this->profit = $profit;
    }

    public function via($notifiable)
    {
        return ['database', 'mail']; // store in DB and optionally email
    }

    public function toDatabase($notifiable)
    {
        return [
            'investment_id' => $this->investment->id,
            'amount' => $this->investment->amount,
            'profit' => $this->profit,
            'message' => "Your investment in plan '{$this->investment->plan->name}' has completed. You earned \${$this->profit}.",
        ];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Investment Completed')
            ->line("Your investment in plan '{$this->investment->plan->name}' has completed.")
            ->line("You earned \${$this->profit}. Your account balance has been updated.")
            ->action('View Investments', url('user/dashboard'))
            ->line('Thank you for investing with us!');
    }
}