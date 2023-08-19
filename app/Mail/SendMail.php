<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subj;
    public $message;
    public $name;
    public $email;
    public $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($messageData)
    {
        $this->subj = $messageData['subject'];
        $this->message = $messageData['message'];
        $this->name = $messageData['name'];
        $this->email = $messageData['email'];
        $this->phone = $messageData['phone'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New message through contact form')->markdown('mail.message', ['subject'   => $this->subj,
                                                                                            'message'   => $this->message,
                                                                                            'name'      => $this->name,
                                                                                            'email'     => $this->email,
                                                                                            'phone'     => $this->phone]);
    }
}
