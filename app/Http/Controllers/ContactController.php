<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

use Exception;

class ContactController extends Controller
{
    public function contact(Request $request) {
        if ($request->isMethod('post')) {
            try  {
                $admin_email = env("MAIL_USERNAME", "kologojosias@gmail.com");
                $name = $request->input('name');
                $phone = $request->input('phone');
                $email = $request->input('email');
                $msg = $request->input('message');

                Mail::to($admin_email)->send(new ContactMail($name, $phone, $email, $msg));
                return view("contact", ["message" => "success"]);
            } catch(Exception $e) {
                return view("contact", ["message" => $e->getMessage()]);
            }
        } else {
            return view("contact", ["message" => null]); 
        }
    }
}
