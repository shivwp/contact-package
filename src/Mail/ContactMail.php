<?php

namespace Shobha\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $massage;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($massage ,$name)
    {
        //

        $this->massage=$massage;
        $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.myContactMail')->with(['massage'=>$this->massage ,'name'=>$this->name]);
    }
}
