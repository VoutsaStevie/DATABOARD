<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\specialities;

class SpecialitiesController extends Controller
{
    public function index()
    {
        $specialities = specialities::all();

        return view('specialities.index', ['specialities' => $specialities]);
    }

    public function create()
    {
        return view('specialities.create');
    }

    public function store(Request $request)
    {
        $specialities = new specialities();

        $specialities -> id = request('specialityid');
        $specialities -> speciality = request('speciality');

        $specialities -> save();
        return redirect('/specialities');
    }

    public function destroy(string $id)
    {
        $specialities = specialities::where('id',$id);
        $specialities->delete();
        return redirect('/specialities');
    }
}
