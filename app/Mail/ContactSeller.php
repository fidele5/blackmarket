<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSeller extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $contact, $product)
    {
        $this->contact = $contact;
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('layouts.mail');
    }
}
