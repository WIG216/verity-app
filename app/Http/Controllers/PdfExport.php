<?php

namespace App\Http\Controllers;

use App\Models\StudentCertificate;
use Pdf;
use Illuminate\Http\Request;

class PdfExport extends Controller
{
    public function pdf(StudentCertificate $student, $id){
        // if($student->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }
        $studentCertificateInfo = StudentCertificate::find($id);

        // dd($studentCertificateInfo);

        $pdf = Pdf::loadView('dashboard.certificates.student.export', ['student'=> $studentCertificateInfo])->setPaper('A5', 'landscape');

        return $pdf->download($studentCertificateInfo->first_name.' '.$studentCertificateInfo->last_name. '.pdf');
    }
}
