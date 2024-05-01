<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use App\Models\courses;
use App\Models\student;
use App\Models\marks;



class ImportsController extends Controller
{

//students
    public function importStudents() {

        return view('importations.studentsimport');
    }

    public function submitStudents() {

        $csv = Reader::createFromPath(request()->file(key:'csv_file')->getRealPath(), 'r');
        $csv->setHeaderOffset(offset:0);

        $students = new student();
        $count = 0;

        foreach ($csv as $reccord) {

            $query = [

                'full_name' => $reccord['fullname'],
                'speciality' => $reccord['speciality'],
                'matricule' => $reccord['matricule'],
                'sex' => $reccord['sex'],
                'level' => $reccord['level'],
                'birthdate' => $reccord['birthdate'],
                'email' => $reccord['email'],
                'phone' => $reccord['phone'],
                'created_at' => now(),
                'updated_at' => now()
                ];

                $students::insert($query);
        }

        return redirect(route('students.index'));

    }

//courses Import
    public function importCourses() {
        return view('importations.coursesimport');

    }


    public function submitCourses() {


        $csv = Reader::createFromPath(request()->file(key:'csv_file')->getRealPath(), 'r');
        $csv->setHeaderOffset(offset:0);

        $courses = new courses();
        $count = 0;

        foreach ($csv as $reccord) {

            $query = [

                'coursetitle' => $reccord['courseTitle'],
                'coursecode' => $reccord['courseCode'],
                'courselevel' => $reccord['level'],
                'created_at' => now(),
                'updated_at' => now()
                ];

                $courses::insert($query);
        }

        return redirect(route('courses.index'));

    }


//Marks Import
    public function importMarks() {

        return view('importations.marksimport');
    }

    public function submitMarks() {

        $csv = Reader::createFromPath(request()->file(key:'csv_file')->getRealPath(), 'r');
        $csv->setHeaderOffset(offset:0);

        $marks = new marks();
        $count = 0;

        foreach ($csv as $reccord) {

            $query = [
                'year' => request('year'),
                'semester' => request('semester'),
                'studentmatricule' => $reccord['studentmatricule'],
                'coursecode' => $reccord['coursecode'],
                'camark' => $reccord['camark'],
                'snmark' => $reccord['snmark'],
                'tpmark' => $reccord['tpmark'],
                'total' => $reccord['total'],
                'created_at' => now(),
                'updated_at' => now()
                ];

                $marks::insert($query);
        }

    return redirect(route('marks.index'));

    }

}
