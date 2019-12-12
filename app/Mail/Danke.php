<?php

namespace App\Mail;



use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Danke extends Mailable
{
    use Queueable, SerializesModels;
    public $mail;
    public $name;
    public $msg;
    public $date;
    public $now;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail, $name, $msg, $date, $now)
    {
        //
        $this->mail = $mail;
        $this->name = $name;
        $this->msg = $msg;
        $this->date = $date;
        $this->now = $now;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.danke');
    }
}
