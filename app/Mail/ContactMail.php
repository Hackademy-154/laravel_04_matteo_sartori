<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $messageBody;
    public string $userName;
    public string $email;
    /**
     * Create a new message instance.
     */
    public function __construct(string $userName, string $email, string $messageBody)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->messageBody = $messageBody;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Grazie di averci contattato',
            from: new Address('colmatteox@noreply.com'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contactMail',
            with: [
                'userName' => $this->userName,
                'email' => $this->email,
                'message' => $this->messageBody,
            ],
        );
    }

   
    public function attachments(): array
    {
        return [];
    }
}