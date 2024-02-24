<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Signup;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8|max:12',
            'mobile'=>'required',
            
        ]);
        //echo "<pre>";
        //print_r($request);
        //print_r($request->toArray());
        //die;
        $signup = new Signup;
        $signup->name=$request['name'];
        $signup->email=$request['email'];
        $signup->password=md5($request['password']);
        $signup->mobile=$request['mobile'];
        
        $signup->save();
        //signup::create($request->all());
        $request->session()->put('signup_id',$signup->id);
        $request->session()->put('signup_name',$signup->name);
        //return redirect()->route('signup')->with('success','User Signed Up Successfully');
        return redirect('mail');
    }
    public function view()
    {
        $allRecords=signup::all();
        return view('admin.view',compact('allRecords'));
    }

    public function login(Request $req)
   
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $userFound= Signup::where(['email'=>$req->email])->first();
        if($userFound)
        {
            
             if (md5($req->password) == $userFound->password)
             {
  //              return $userFound;
               $req->session()->put('signup', $userFound->id);
               
                 return view('index', compact('userFound'));
            }
             else
             return "wrong";
        }
    }

    public function logout()
    {
        if (Session()->has('signup'))
        {
            Session()->pull('signup');
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function show(signup $signup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rec=Signup::where('id',"=",$id)->first();
        return view('admin.update',compact('rec'));
        // $myData=compact('rec');
        // return view('updateform')->with($myData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $rec=Signup::find($req->id);
        $rec->name=$req->name;
        $rec->email=$req->email;
        $rec->mobile=$req->mobile;
        $rec->save();
        return redirect('/admin_dashboard');
    }

    public function del(Request $req)
    {
        $rec=Signup::find($req->id)->delete();
        return redirect('/admin_dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function destroy(signup $signup)
    {
        //
    }
}
