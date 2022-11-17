<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class WelcomeMail extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $findPass = Str::of($notifiable->email)->explode('@');
        Log::info($notifiable);
        return (new MailMessage)
                ->subject('Welcome to Yoruba Nation')
                    ->line('Hello '.$notifiable->name.'!')
                    ->line('Kindly find below your user login details should in case you need to change your passport photograph or Resume/CV.')
                    ->line('Username/Email: '.$notifiable->email)
                    ->line('Password:'. $findPass[0])
                    ->action('Click here to login', url('/login'))
                    ->line('Thank you for join this great nation!');

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
