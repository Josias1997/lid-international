<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\Article;

class PerspectivesController extends Controller
{
    public function index(Request $request) {
        $team_members = TeamMember::all();
        return view('perspectives', ["team_members" => $team_members]);
    }
}
