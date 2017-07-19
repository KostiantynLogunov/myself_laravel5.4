<?php

namespace App\Http\Controllers;

use App\Message;
use Validator;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class smsController extends Controller
{
    //
    public function execute (Request $request) {

        if ($request->isMethod('post')) {
            $sms =  $request->except('_token');

            $validator = Validator::make($sms,[
                'text' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect('user')->withErrors($validator)->withInput();
            }
            $sms['from_user_id'] = $request->user()->id;

            $message = new Message($sms);
            $message->fill($sms);

            if ($message->save()) {
                /*$msg = [
                        'from_name' => $request->user()->name,
                        'from_mail' => $request->user()->email,
                        'to_mail' => '777koc@gmail.com',
                        'mail_text' => $sms['text'],

                ];*/
                $request->to_mail = '777koc@gmail.com';
                $request->to_name = 'Admin';
                $request->from_name = $request->user()->name;
                $request->from_mail = $request->user()->email;

                Mail::send(new SendMail());

                return redirect('user')->with('status', 'Massage for ADMIN was Send !');
            }
        }
        abort(404);

    }
}
