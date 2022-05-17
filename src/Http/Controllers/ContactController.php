<?php

namespace Shobha\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shobha\Contact\Models\Contact;
use Shobha\Contact\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){

        // return $request->all();
        Mail::to(config('contact.send_mail_to'))->send(new ContactMail($request->massage,$request->name));
       
        Contact::create($request->all());
        return redirect('contact');
    }
}
