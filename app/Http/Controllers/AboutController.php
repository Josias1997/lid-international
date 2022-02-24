<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class AboutController extends Controller
{
    public function index(Request $request) {
        $team_members = TeamMember::all();
        return view('about', ["team_members" => $team_members]);
    }

    public function aboutBurkina(Request $request) {
        return view('about-burkina');
    }
}
