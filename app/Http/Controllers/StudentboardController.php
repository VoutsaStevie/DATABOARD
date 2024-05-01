<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marks;
use App\Models\student;

class StudentboardController extends Controller
{
    public function index()
    {

        $fullname = request('fullname');
        $matricule = request('matricule');
        $year = request('year');
        $semester = request('semester');

        $marks = marks::where('studentmatricule', $matricule)
        ->where('year', $year)
        ->where('semester', $semester)
        -> get();
        $student = student::where('matricule', $matricule) -> get();

        return view('studentboard.index', ['fullname' => $fullname, 'matricule' => $matricule, 'marks' => $marks, 'student' => $student]);
    }

    public function create()
    {
        return view('studentboard.create');
    }

    public function store(Request $request)
    {
        $fullname = request('fullname');
        $matricule = request('matricule');
        $year = request('year');
        $semester = request('semester');
        return redirect("/studentboard?fullname=$fullname&matricule=$matricule&year=$year&semester=$semester");
    }
}
