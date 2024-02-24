<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Signup;


class AdminSignInController extends Controller
{
    public function login_in_admin_fun()
    {
        return view('admin.signin');
    }
    public function admin_login_fun(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $userFound = Signup::where(['email' => $req->email])->first();
        if ($userFound) 
        {
            if ($userFound->id == '1') 
            {
                if (md5($req->password) == $userFound->password) 
                {
                    $req->session()->put('session_admin_id', $userFound->id);
                    $req->session()->put('session_admin_name', $userFound->name);
                    return redirect('/admin_dashboard');
                } 
                else 
                {
                    return "wrong";
                }
            }
            else
            {
                return "U R Not An Admin..!!";
            }
        }
    }
    public function admin_dashboard_fun()
    {
        $admin_data = Signup::where('id', '=', session()->get('session_admin_id'))->get();
        return view('/admin.index', compact('admin_data'));
    }
    public function logout_fun()
    {
        session()->forget(['session_admin_name', 'session_admin_id']);
        return view('admin.signin');
    }
}
