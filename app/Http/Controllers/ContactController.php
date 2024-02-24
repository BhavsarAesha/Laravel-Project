<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'msg'=>'required',
            
        ]);
     
        $contact = new Contact;
        $contact->firstname=$request['firstname'];
        $contact->lastname=$request['lastname'];
        $contact->email=$request['email'];
        $contact->mobile=$request['mobile'];
        $contact->msg=$request['msg'];
        
        $contact->save();
        return redirect()->route('contacts')->with('success','Message Sent Successfully');
        //return redirect('view');
    }

    public function con()
    {
        $allContacts=Contact::all();
        return view('admin.view1',compact('allContacts'));
    }
}
