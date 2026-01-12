<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
        $this->subject('Go Interactive');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (isset($this->message['file'])) {
            return $this->markdown('emails.message')->attach($this->message['file']->getRealPath(), [
                'as' => $this->message['file']->getClientOriginalName(),
                'mime' => $this->message['file']->getMimeType(),
            ]);
        } else {
            return $this->markdown('emails.message');
        }
    }
}
