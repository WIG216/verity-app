<?php

namespace App\Http\Controllers;

use App\Models\VisitorRequest;
use Illuminate\Http\Request;

class VisitorRequestController extends Controller
{
    public function index()
    {
        return view('dashboard.request.index', [
            'studentCertificates' => VisitorRequest::get()
        ]);
    }
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => 'required',
            'contact' => 'required',
            'subject' => 'required',
            'file' => 'required',
        ]);

        // dd($formFields);

        if ($request->hasFile('file')) {
            $formFields['file'] = $request->file('file')->store('file', 'public');
        }
        // $formFields['user_id'] = auth()->id();

        // dd($formFields);

        // dd($formData);[[[]]]
        VisitorRequest::create($formFields);

        return redirect('/visitor')->with('message', 'Your request will be analyzed');
    }
}
