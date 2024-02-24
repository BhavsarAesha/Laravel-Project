<?php

namespace App\Http\Controllers;
use App\Models\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        //  echo "hello";
        $data=['name'=>"Hello Aesha",'data'=>"Order and Enjoy your favourite foods."];
        $user['to']='bhavsar91103@gmail.com';
        Mail::send('mail',$data,function($message) use($user){
        $message->to($user['to']);
        $message->subject('You are successfully signup');
        });
        return redirect('/')->with('success','User signed up successfully');
    }
}
