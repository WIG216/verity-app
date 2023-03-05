<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\StudentCertificate;

class StudentCertificateController extends Controller
{
    // Show all certificates
    public function index()
    {
        return view('dashboard.certificates.student.index', [
            'studentCertificates' => StudentCertificate::with('user')->get()

        ]);
    }

    //Show single student
    public function show(StudentCertificate $studentCertificateInfo)
    {
        return view('dashboard.student.show', [
            'studentCertificate' => $studentCertificateInfo
        ]);
    }

    // Show Create Form
    public function create()
    {
        return view('dashboard.certificates.student.create');
    }

    // Store student Data
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'registration_number' => 'required',
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'dob' => 'required',
            'place_of_birth' => 'required',
            'email' => 'required',
            'specialty' => 'required',
            'contact' => 'required',
            'guardian_name' => 'required',
            'location' => 'required',
            'emergency_number' => 'required',
            'img' => 'required',
            'class' => 'required',
            // 'user_id' => 'req'
        ]);

        if ($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('pics', 'public');
        }

        $formData = [
            "registration_number"=> $request->request->get("registration_number"),
            "first_name"=> $request->request->get("first_name"),
            "last_name"=> $request->request->get("last_name"),
            "dob"=> $request->request->get("dob"),
            "place_of_birth"=> $request->request->get("place_of_birth"),
            "email"=> $request->request->get("email"),
            "specialty"=> $request->request->get("specialty"),
            "contact"=> $request->request->get("contact"),
            "guardian_name"=> $request->request->get("guardian_name"),
            "location"=> $request->request->get("location"),
            "emergency_number"=> $request->request->get("emergency_number"),
            "img"=> $request->file('img')->store('pics', 'public'),
            "class"=> $request->request->get("class"),
            'user_id' =>auth()->id()
        ];
        // $formFields['user_id'] = auth()->id();


        // dd($formFields);

        // dd($formData);[[[]]]
        StudentCertificate::create($formData);

        return redirect('/certificates/students')->with('message', 'student created successfully!');
    }

    // Show Edit Form
    public function edit(StudentCertificate $studentCertificateInfo)
    {
        $studentCertificateInfo = StudentCertificate::find($studentCertificateInfo->id);
        return view('dashboard.certificates.student.edit', compact('studentCertificateInfo'));
    }

    // Update user student Data
    public function update(Request $request, StudentCertificate $studentCertificateInfo)
    {
        // Make sure logged in user is owner
        if ($studentCertificateInfo->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'registration_number' => 'required',
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'dob' => 'required',
            'place_of_birth' => 'required',
            'email' => 'required',
            'specialty' => 'required',
            'contact' => 'required',
            'guardian_name' => 'required',
            'location' => 'required',
            'emergency_number' => 'required',
            'img' => 'required',
            'class' => 'required',
            // 'user_id' => 'req'
        ]);

        if ($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('pics', 'public');
        }

        $formData = [
            "registration_number"=> $request->request->get("registration_number"),
            "first_name"=> $request->request->get("first_name"),
            "last_name"=> $request->request->get("last_name"),
            "dob"=> $request->request->get("dob"),
            "place_of_birth"=> $request->request->get("place_of_birth"),
            "email"=> $request->request->get("email"),
            "specialty"=> $request->request->get("specialty"),
            "contact"=> $request->request->get("contact"),
            "guardian_name"=> $request->request->get("guardian_name"),
            "location"=> $request->request->get("location"),
            "emergency_number"=> $request->request->get("emergency_number"),
            "img"=> $request->file('img')->store('pics', 'public'),
            "class"=> $request->request->get("class"),
            'user_id' =>auth()->id()
        ];

        $studentCertificateInfo->update($formData);
        // toastr()->addInfo('Heads up: This may take a while.');

        return redirect('/certificates/students')->with('message', 'Student Certificate updated successfully!');
    }


    // Delete user certificate
    public function destroy(StudentCertificate $studentInfo, $id)
    {
        // Make sure logged in user is owner
        // if ($studentInfo->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }

        $studentCertificateInfo = StudentCertificate::find($id);
            // dd($studentCertificateInfo);
        $studentCertificateInfo->delete();
        return redirect('/certificates/students')->with('message', 'student certificate deleted successfully');
    }
}
