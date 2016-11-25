<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
    public function index(){
        return view("contact.index");
    }
    public function send(Request $request){
        $contact = new Contact();
        $this->validate($request, [
            'email' => 'required|max:255',
            'name' => 'required',
            'subject' => 'required',
            'text' => 'required'
        ]);

        $contact->setEmail($request->email);
        $contact->setName($request->name);
        $contact->setSubject($request->subject);
        $contact->setText($request->text);
        return $contact;
    }
}
