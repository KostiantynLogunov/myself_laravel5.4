<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class OpenSmsController extends Controller
{
    //
    public function execute(User $user,Request $request) {

        $messages = Message::all();

        if ($request->isMethod('delete')) {
//            $sms = $messages->toArray();
//            dd($sms);

                foreach ($messages as $message) {

                    if($message['from_user_id']==$user->id || $message['to_user_id']==$user->id) {
                        $messages->find($message->id)->delete();
                    }
                }

            return redirect()->route('feedback')->with('status','Correspondence with '.$user->name.' was  deleted');
        }

        if ($request->isMethod('post')) {
            $sms =  $request->except('_token');

            $validator = Validator::make($sms,[
                'text' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->route('OpenSms',array('user'=>$user->id))->withErrors($validator)->withInput();
            }
            $sms['from_user_id'] = $request->user()->id;
            $sms['to_user_id'] = $user->id;

            $message = new Message($sms);
            $message->fill($sms);

            if ($message->save()) {

                $request->to_mail = $user->email;
                $request->to_name = $user->name;
                $request->from_name = 'Admin';
                $request->from_mail = '777koc@gmail.com';

//                dd();

                Mail::send(new SendMail());

                return redirect()->route('OpenSms',array('user'=>$user->id))->with('status', 'Massage for '.$user->name.' is Send !');
            }
        }

        if ($request->isMethod('get')) {
            $users = $user->toArray();
            $messages = $messages->toArray();
//            dd($user->id);
            if (view()->exists('admin.openSms')) {

                $data = [
                    'title'=>'Your writeng with user - '.$users['name'],
                    'users' => $users,
                    'from_id'=>$request->user()->id,
                    'to_id'=>$user->id,
                    'messages' => $messages
                ];
//                dd($users);
                return view('admin.openSms',$data);


            }
        }





        /*if ($request->isMethod('delete')) {
            $message -> where('from_user_id',$request->user()->id)->delete();
            return redirect('admin')->with('status','Page is deleted');
        }*/

    }
}
