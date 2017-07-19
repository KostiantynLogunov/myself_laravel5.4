<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function execute() {

            if (view()->exists('admin.feedback')) {
                $users = User::all();

                $data2 = [
                    'title' => 'Feedback',
                    'users' => $users
                ];
                return view('admin.feedback', $data2);
            }
            abort(404);

    }

}
