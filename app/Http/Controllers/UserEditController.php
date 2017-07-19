<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Validator;
use Illuminate\Http\Request;

class UserEditController extends Controller
{
    //
    public function execute(User $user, Request $request) {

        if ($request->isMethod('delete')) {
            $messages = Message::all();
            foreach ($messages as $message) {

                if($message['from_user_id']==$user->id || $message['to_user_id']==$user->id) {
                    $messages->find($message->id)->delete();
                }
            }

            $user -> delete();
            return redirect('admin/users')->with('status','User '.$user->name.' was deleted');
        }

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $validator = Validator::make($input,[
                'name' => 'required|max:50|unique:users,name,'.$input['id'],
                'email' => 'required|max:30|email|unique:users,email,'.$input['id'],
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->route('userEdit',['user'=>$input['id']])
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

            $user -> fill($input);

            if ($user->update()) {
                return redirect('admin')->with('status','User is edited');
            }
        }

        $old = $user->toArray();

        if (view()->exists('admin.user_edit')) {

            $data = [
                'title' => 'Editing information of user '.$old['name'],
                'data' => $old
            ];
            return view('admin.user_edit',$data);


        }

    }
}
