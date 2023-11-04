<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class StoreController extends Controller
{
    public function __invoke(Request $request){
        $data = $request->validate([
                'subject' => 'required',
                'message' => 'required',
                'name' => 'required',
                'email' => '',
                'phone' => '',
                'g-recaptcha-response' => 'required'
            ],
            ['g-recaptcha-response.required' => 'Prove that you are not a robot']
        );
        $gRecaptchaResponse = $data['g-recaptcha-response'];
        unset($data['g-recaptcha-response']);
        $secret = '6LdtGvIoAAAAAG2E1ACMfUeP2ZkBVWAOVVup7BB1';
        $responese = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$gRecaptchaResponse");
        $responeseJSON = json_decode($responese);
        if($responeseJSON->success){
            Message::Create($data);
            $toMail = 'kost_87@list.ru';
            Mail::to($toMail)-> send(new SendMail($data));
            return view('contact.index', ['sent' => 'Thank you! Your message has been sent']);
        }
        else{
            dd("Error in captcha");
        }
    }
}
