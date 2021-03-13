<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNotifyer extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $configs;
     
    public function __construct(Array $configs)
    {
        $this->configs = $configs;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */

    public function toTelegram($notifiable)
    {
        $url = "https://www.google.com";

        return TelegramFile::create()
        // Markdown supported.
            ->content($this->configs["message"])
        // (Optional) Inline Buttons
            ->file('http://bsp.donbosco-rdc.org/Admin/fichiers/c504182d0908a41aba0183fb138e61ef_XL.jpg', 'photo')
            ->button('View Invoice', $url);
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
