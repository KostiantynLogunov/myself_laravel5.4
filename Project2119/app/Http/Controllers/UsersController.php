<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function execute() {
        if (view()->exists('admin.users')) {
            $users = User::all();

            $data2 = [
                'title'=>'Users',
                'users'=>$users
            ];
            return view('admin.users',$data2);
        }
        abort(404);
    }
}
