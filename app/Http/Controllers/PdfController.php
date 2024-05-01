<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\marks;
use App\Models\student;


class PdfController extends Controller
{
    public function generatePdf() {

        $matricule = request('matricule');
        $fullname = request('fullname');

        $data = [
            'title' => 'Marks',
            'fullname' => request('fullname'),
            'matricule' => request('matricule'),
            'marks' => marks::where('studentmatricule', $matricule) -> get(),
            'student' => student::where('matricule', $matricule) -> get()
        ];

    $pdf = Pdf::loadView('pdfGenerator.index', $data);
    return $pdf->download($fullname.' marks.pdf');
    }
}
