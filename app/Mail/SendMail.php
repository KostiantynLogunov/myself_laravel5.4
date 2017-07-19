<?php

namespace App\Mail;


//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;



class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {

        /*
        $request->to_mail = '777koc@gmail.com';
        $request->to_name = 'Admin';
        $request->from_name => $request->user()->name;
        $request->from_mail => $request->user()->emai;*/

//        dd($request['to_name']);
        return $this->view('emails.welcome',[
                                'text'=>$request->text,
                                'to_name'=>$request->to_name,
                                'from_name'=>$request->from_name,
                                'from_mail'=>$request->from_mail
        ])->to($request->to_mail);
    }
}
