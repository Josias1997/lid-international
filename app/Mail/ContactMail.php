<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $phone;
    protected $email;
    protected $msg;

    /**
     * Create a new msg instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $email, $msg)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')
                    ->with([
                        'name' => $this->name,
                        'phone' => $this->phone,
                        'email' => $this->email,
                        'msg' => $this->msg
                    ]);
    }
}
