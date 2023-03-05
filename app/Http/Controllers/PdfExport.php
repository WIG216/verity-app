<?php

namespace App\Http\Controllers;

use App\Models\StudentCertificate;
use PDF;
use Illuminate\Http\Request;

class PdfExport extends Controller
{
    public function pdf(StudentCertificate $student){
        if($student->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $pdf = PDF::loadView('dashboard.certificates.export', $student);

        return $pdf->download($student->first_name.' '.$student->last_name. '.pdf');
    }
}
