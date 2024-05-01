<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;

class FileController extends Controller
{
    public function create(){
        return view("files.create");
    }

    public function index(){
        return view("files.index");
    }

    public function store(Request $request){
        $data = new Files();

        $filename=time().".".$request->file->getClientOriginalExtension();
        $request->file->move('assets', $filename);

        $data->file= $filename;

        $data->name = $request->name;
        $data->description = $request->description;

        $data->save();
        return redirect()->back();
    }
}
