<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentsController extends Controller
{
    public function index()
    {
        $students = student::all();

        return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $students = new student();

        $students -> full_name = request('name');
        $students -> speciality = request('speciality');
        $students -> matricule = request('matricule');
        $students -> sex = request('sex');
        $students -> level = request('level');
        $students -> birthdate = request('birthdate');
        $students -> phone= request('phone');
        $students -> email = request('email');

        $students -> save();

        return redirect('/students');
    }

    public function destroy(string $matricule)
    {
        $students = student::where('matricule',$matricule);
        $students->delete();

        return redirect('/students');
    }



}
