<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request){
        $data = $request->validate([
            'subject' => 'required',
            'message' => 'required',
            'name' => 'required',
            'email' => '',
            'phone' => ''
        ]);
        Message::Create($data);
        return view('contact.index', ['sent' => 'Thank you! Your message has been sent']);
    }
}
