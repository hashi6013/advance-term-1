<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class SendInformation extends Mailable
{
    use Queueable, SerializesModels;

    public $information;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($information)
    {
        $this->information = $information;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hello@example.com')->subject('Reseからのお知らせ')->view('email.information');
    }
}
