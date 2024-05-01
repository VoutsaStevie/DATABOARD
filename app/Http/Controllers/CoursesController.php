<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courses;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = courses::all();

        return view('courses.index', ['courses' => $courses]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $courses = new courses();

        $courses -> coursetitle = request('coursetitle');
        $courses -> coursecode = request('coursecode');
        $courses -> courselevel = request('courselevel');


        $courses -> save();

        return redirect('/course');

    }

    public function destroy(string $coursecode)
    {
        $courses = courses::where('coursecode',$coursecode);
        $courses->delete();
        return redirect('/course');
    }
}
