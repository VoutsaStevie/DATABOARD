<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    public function adminDashboard() {

        return view("administratorDashboard.index");
    }

    public function studentDashboard() {

        return view("studentDashboard.index");
    }

    public function studentDashboardCourses() {

        return view("studentDashboard.courses");
    }


    public function teachersDashboard() {

        return view("teachersDashboard.index");
    }
}
