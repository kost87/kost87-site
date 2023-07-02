<?php

namespace App\Http\Controllers\Admin\Contact;
use App\Http\Controllers\Controller;
use App\Models\Message;

class DeleteController extends Controller
{
    public function __invoke(Message $message){
        $message->delete();
        return redirect()->route('admin.contact.index');
    }
}
