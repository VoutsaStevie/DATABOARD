<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Models\info;
use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Messages\VonageMessage;


class InfoController extends Controller
{
    public function index()
    {

        $infos = info::where('destination','public') -> get();

        return view('Info.index', ['infos' => $infos]);
    }

    public function create()
    {
        return view('Info.create');
    }

    public function store(Request $request)
    {

        $data = new Info();
        $file = $request->file;

        $filename = time().".".$file->getClientOriginalExtension();
        $request->file->move('assets', $filename);

        $data->file = $filename;

        $data->title = $request->title;
        $data->description = $request->description;
        $data->author = $request->author;

        $data->save();


        $students = student::all();
        foreach ($students as  $student)
         {
             //sending mail
             Mail::to($student->email)
             ->send(new WelcomeMail("New","Nouvelle information sur UY1 Databoard"));
             //->attachData();

         }

        return redirect('/admin_dashboard');

        }

        public function show(string $id)
        {
            $infos = info::findorFail($id);

            return view('Info.show', ['infos' => $infos]);
        }

        public function newer()
    {
        $infos = info::OrderBy('created_at' , 'desc') -> get();

        return view('studentDashboard.announcements', ['infos' => $infos]);
    }

    public function older()
    {

        $infos = info::OrderBy('created_at' , 'asc') -> get();

        return view('studentDashboard.announcements', ['infos' => $infos]);
    }


    public function teacherAnnouncements()
    {

        $infos = info::where('destination','=','teacher') -> get();

        return view('teachersDashboard.announcement', ['infos' => $infos]);
    }

    public function studentAnnouncements()
    {

        $infos = info::where('destination','students') -> get();

        return view('studentDashboard.announcements', ['infos' => $infos]);
    }

    public function studentAnnouncementShow(string $id)
    {
        $infos = info::findorFail($id);

        return view('studentDashboard.announcementshow', ['infos' => $infos]);
    }

    public function delete(string $id){
        $infos = info::findorFail($id);
        $infos->delete();

        return redirect(route('allInfos'));
    }

    public function allInfos()
    {

        $infos = info::all();

        return view('administratorDashboard.infos', ['infos' => $infos]);
    }

    public function allInfosShow($id){
        $infos = info::findorFail($id);
        return view('administratorDashboard.allInfoShow', ['infos' => $infos]);
    }
}
