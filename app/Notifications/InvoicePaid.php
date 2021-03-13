<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\ChatAPI\ChatAPIChannel;
use NotificationChannels\ChatAPI\ChatAPIMessage;


class InvoicePaid extends Notification
{

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $message;

    public function __construct(Array $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [ChatAPIChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */

    public function toChatAPI($notifiable)
    {
        return ChatAPIMessage::create()
            ->to("+243974217408") // your user phone
            ->file('http://bsp.donbosco-rdc.org/Admin/fichiers/c504182d0908a41aba0183fb138e61ef_XL.jpg', 'c504182d0908a41aba0183fb138e61ef_XL.jpg')
            ->content($this->message['message']);
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
