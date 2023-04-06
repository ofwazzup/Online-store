<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactFormRequest;

class ContactUsFormController extends Controller {
    
    public function createForm(Request $request) {
      return view('aboutUs.contact');
    }
    
    public function ContactUsForm(Request $request) {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);

        Contact::create($request->all());
        
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }


    // public function ContactUsForm(ContactForm $req) {

    // }
}