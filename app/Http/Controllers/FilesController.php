<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function index(){
        return view("files.index");
    }

    public function create(){
        return view("files.create");
    }

    public function store(Request $request){
        $data = new Files();
        $file = $request->file;

        $filename = time().".".$file->getClientOriginalExtension();
        $request->file->move('assets', $filename);

        $data->file = $filename;

        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();
        return redirect('/admin_dashboard');
    }

    public function filesView(){
        $files = Files::all();

        return view('studentDashboard.files', ['files' => $files]);
    }

    public function fileShow(string $id){
        $files = Files::findOrFail($id);

        return view('studentDashboard.filesShow', ['file' => $files]);
    }

    public function download(Request $request,$file){
        return response()->download(public_path('assets/'.$file));
    }

}


