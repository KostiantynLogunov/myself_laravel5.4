<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Validator;

class ClientController extends Controller
{
    //
    public function execute(Request $request) {

        if (view()->exists('user.index')) {
//            $users = User::all();
            $messages = Message::all();
            $user_id = $request->user()->id;
            $data = [
                'title'=>'Cabinet of current user - '.$request->user()->name,
                'from_id'=>$user_id,
                'messages'=>$messages
            ];
           /* foreach($messages as $message) {
                dump($message['from_user_id']);
            }*/
//           dd($messages->where('from_user_id',2));
            return view('user.index',$data);
        }
        abort(404);
    }

    public function settingsUser(Request $request) {

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
//            dd($input);
            $validator = Validator::make($input,[
                'name' => 'required|max:50',
                'email' => 'required|max:30|email',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->route('UserSettings')
                    ->withErrors($validator);
            }

            if($request->hasFile('images')) {
                $file = $request->file('images');
                $file -> move(public_path().'/assets/img/users/',$file->getClientOriginalName());
                $input['images'] = $file->getClientOriginalName();
            }
            else {
                $input['images'] = $input['old_images'];
            }

            unset($input['old_images']);
$user = User::find(Auth::user()->id);
//dd($user);
            $user -> fill($input);

            if ($user->update()) {
                return redirect('user')->with('status','Information about you was edited');
            }
        }


        if (view()->exists('user.settings')) {
//
            return view('user.settings');
        }
        abort(404);
    }

}
