<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramsController extends Controller
{
    public function index(Request $request) {
        $programs = Program::orderBy("created_at", "desc")->get();
        return view('programs', ["programs" => $programs]);
    }

    public function getProgram($id) {
        $program = Program::findOrFail($id);
        return view('program', ["program" => $program]);
    }
}
