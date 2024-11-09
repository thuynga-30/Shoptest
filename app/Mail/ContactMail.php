<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $content;
    public function __construct($email,$content)
    {
        $this->email = $email;
        $this->content = $content;
    }

    //envelope
    public function envelope(): Evelope{
        return new Evelope(
            subject: 'Contact Email',
        );
    }
    // content
    public function content(): Content{
        return new Content(
            view: 'emails.contact-mail',
        );
    }
    public function build()
    {
        return $this->view('emails.contact-mail');
    }
}
