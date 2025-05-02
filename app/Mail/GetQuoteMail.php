<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GetQuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $GetQuoteData;

    /**
     * Create a new message instance.
     */
    public function __construct($GetQuoteData)
    {
        $this->GetQuoteData = $GetQuoteData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Get a Quote Form Submission')
                    ->view('emails.get_a_quote_mail');
    }
}
