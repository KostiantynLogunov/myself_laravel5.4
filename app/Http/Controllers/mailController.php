<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class mailController extends Controller
{
    //
    public function send() {
        Mail::send(new sendMail());
    }
}
