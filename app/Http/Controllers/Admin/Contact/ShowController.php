<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Message;

class ShowController extends Controller
{
    public function __invoke(Message $message){
        return view('admin.contact.show', compact('message'));
    }
}
