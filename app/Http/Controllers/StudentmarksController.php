<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marks;
use App\Models\student;


class StudentmarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marks = marks::all();
        return view('studentmarks.index', ['marks' => $marks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = student::all();
        return view('studentmarks.create', ['students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $camark = request('camark');
        $snmark = request('snmark');


        $marksreg = new marks();
        $marksreg -> studentmatricule = request('matricule');
        $marksreg -> coursecode = request('coursecode');
        $marksreg -> camark = request('camark');
        $marksreg -> snmark = request('snmark');
        $marksreg -> tpmark = request('tpmark');
        $marksreg -> total = ($camark + $snmark);
        $marksreg -> year = request('year');
        $marksreg -> semester = request('semester');



        $marksreg -> save();

        return redirect('/marks/create');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
