<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Message;

class IndexController extends Controller
{
    public function __invoke(){
        $messages = Message::all();
        return view('admin.contact.index', compact('messages'));
    }
}
