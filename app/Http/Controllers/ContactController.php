<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\TeamMember;
use App\Models\Article;

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
                if ($request->input('home')) {
                    $team_members = TeamMember::all();
                    $articles = Article::latest()->take(3)->get();
                    return redirect()->route('home')->with(["team_members" => $team_members, "articles" => $articles, "message" => "success"]);
                }
                return view("contact", ["message" => "success"]);
            } catch(Exception $e) {
                if ($request->input('home')) {
                    $team_members = TeamMember::all();
                    $articles = Article::latest()->take(3)->get();
                    return redirect()->route('home')->with(["team_members" => $team_members, "articles" => $articles, "message" => $e->getMessage()]);
                }
                return view("contact", ["message" => $e->getMessage()]);
            }
        } else {
            return view("contact", ["message" => null]); 
        }
    }
}
