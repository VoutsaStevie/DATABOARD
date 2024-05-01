<?php

use App\Http\Controllers\FilesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ImportsController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SpecialitiesController;
use App\Http\Controllers\StudentboardController;
use App\Http\Controllers\StudentmarksController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/signin', UserController::class);

//marks views
Route::get('/marks/generatePdf', [PdfController::class, 'generatePdf'])->name('marks.generatePdf');

//info views
Route::resource('/info/create', InfoController::class);
Route::resource('/info', InfoController::class);
Route::resource('/info/{$id}', InfoController::class);

Route::get('/newer_posts', [InfoController::class, 'newer']);
Route::get('/older_posts', [InfoController::class, 'older']);

//authentications


Route::middleware(['auth','role:admin'])->group(function () {
    //admin views
    Route::get('/admin_dashboard', [DashboardsController::class,'adminDashboard'])->name('admin.dashboard');

    //courses views
    Route::resource('/course/create', CoursesController::class);
    Route::resource('/course', CoursesController::class);
    Route::get('/course/{coursecode}/delete', [CoursesController::class,'destroy']);


    //specialities views
    Route::resource('/specialities/create', SpecialitiesController::class);
    Route::resource('/specialities', SpecialitiesController::class);

    Route::resource('/marks/create', StudentmarksController::class);
    Route::resource('/marks', StudentmarksController::class);

    Route::resource('/students/create', StudentsController::class);
    Route::resource('/students', StudentsController::class);
    Route::get('/students/{matricule}/delete', [StudentsController::class,'destroy'])->name('student.delete');

    Route::resource('/files/create', FilesController::class);
    Route::resource('/files', FilesController::class);

    Route::get('/all_infos', [InfoController::class, 'allInfos'])->name('allInfos');
    Route::get('/all_infos/show/{id}', [InfoController::class, 'allInfosShow'])->name('allInfos.show');

    Route::get('/delete_infos/{id}', [InfoController::class, 'delete'])->name('infos.delete');


});

Route::middleware(['auth','role:student'])->group(function () {
    //student dashboard
    Route::get('/studentDashboard', [DashboardsController::class,'studentDashboard']) -> name('student.dashboard');
    Route::get('/studentDashboard/courses', [DashboardsController::class,'studentDashboardCourses']) -> name('student.dashboard.courses');
    Route::get('/studentDashboard/announcements', [InfoController::class,'studentAnnouncements']) -> name('studentDashboard.announcements');
    Route::get('/studentDashboard/announcements/{id}', [InfoController::class,'studentAnnouncementShow']) -> name('studentDashboard.announcements.show');

    //students and marks views
    Route::get('/studentboard/create', [StudentboardController::class,'create'])->name('studentboard.create');
    Route::post('/studentboard', [StudentboardController::class,'index'])->name('studentboard.index');

    Route::get('/studentDashboard/files', [FilesController::class,'filesView'])->name('studentDashboard.files');
    Route::get('/studentDashboard/files/{id}', [FilesController::class,'fileShow'])->name('studentDashboard.files.show');
    Route::get('/download/{file}/', [FilesController::class,'download'])->name('files.download');

    Route::get('/events', [EventsController::class, 'body'])-> name('events');


});

Route::middleware(['auth','role:teacher'])->group(function () {
    //teachers dashboard
    Route::get('/teachersDashboard', [DashboardsController::class,'teachersDashboard']);
    Route::get('teachersDashboard/announcements', [DashboardsController::class,'teacherAnnouncements']) -> name('teachersDashboard.announcements');
});

//import views
Route::get('/import_marks', [ImportsController::class, 'importMarks']);
Route::post('/import_marks', [ImportsController::class, 'submitMarks']);

Route::get('/import_courses', [ImportsController::class, 'importCourses']);
Route::post('/import_courses', [ImportsController::class, 'submitCourses']);

Route::get('/import_students', [ImportsController::class, 'importStudents']);
Route::post('/import_students', [ImportsController::class, 'submitStudents']);

Route::get('/sms', [SmsController::class, 'sms']);
Route::get('/sms/view', [SmsController::class, 'view']);
