<?php

namespace App\Mail;
namespace App\Mail\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HelloMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        $this->customer = $params['customer'];
        // dd($params);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = array('name'=>"test", "body" => "test mail");

        Mail::send('mail',$data, function($message){
            $message->to('test@gmail.com','moss')
                    ->subject('test mail');
            $message->from('stepbboymosstu@gmail.com','moss');
        });

        // return $this
        //     ->from('moss@hotmail.com')
        //     ->subject("Hi, $this->customer")
        //     ->view('mail')
        //     ->with(['customer' => $this->customer]);
    }
}
