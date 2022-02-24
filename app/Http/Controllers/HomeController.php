<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\Article;

class HomeController extends Controller
{
    public function index(Request $request) {
        $team_members = TeamMember::all();
        $articles = Article::latest()->take(3)->get();
        return view('index', ["team_members" => $team_members, "articles" => $articles]);
    }
}
