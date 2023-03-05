@extends('layouts.user_type.auth')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <a href="/certificates/students/create" class="btn btn-primary text-center non-hover bg-primary border-0 p-2 ml-2 my-2">Add Student</a>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="" class="table table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Rgistration Number</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Guard Name</th>
                                <th>Date Of Birth</th>
                                <th>Specialty</th>
                                <th>Class</th>
                                <th>Image</th>
                                <th class="dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @unless(count($studentCertificates) == 0)
                                @foreach ($studentCertificates as $studentInfo)
                                    @if ($studentInfo->user->id == auth()->user()->id)
                                        <tr>
                                            <td>{{ $studentInfo->registration_number }}</td>
                                            <td>{{ $studentInfo->first_name }} {{ $studentInfo->last_name }}</td>
                                            <td>{{ $studentInfo->location }}</td>
                                            <td>{{ $studentInfo->contact }}</td>
                                            <td>{{ $studentInfo->guardian_name }}</td>
                                            <td>{{ $studentInfo->dob }}</td>
                                            <td>{{ $studentInfo->specialty }}</td>
                                            <td>{{ $studentInfo->class }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="usr-img-frame mr-2 rounded-circle">
                                                        <img alt="avatar" class="img-fluid rounded-circle"
                                                            src="{{ $studentInfo->img ? asset('storage/' . $studentInfo->img) : asset('/img/90x90.jpg') }}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                    <button type="button"
                                                        class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split"
                                                        id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-reference="parent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                        <a class="dropdown-item"
                                                            href="students/{{ $studentInfo->id }}/edit">Edit</a>
                                                        <a class="dropdown-item" href="/export-pdf">Export to pdf</a>
                                                        <a class="dropdown-item" href="students/{{ $studentInfo->id }}/delete">Delete</a>

                                                        <div class="dropdown-divider"></div>
                                                        {{-- <a class="dropdown-item" href="#">Separated link</a> --}}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- <x-student-table :studentInfo= "$studentInfo" /> --}}
                                    @endif
                                @endforeach
                            @else
                                <p>No certificate issued.</p>
                            @endunless
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // function deleteData(studentInfo){

        //     Swal.fire({
        //             title: 'Are you sure?',
        //             text: "You won't be able to revert this!",
        //             icon: 'warning',
        //             showCancelButton: true,
        //             confirmButtonColor: '#3085d6',
        //             cancelButtonColor: '#d33',
        //             confirmButtonText: 'Yes, delete it!'
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 let url = "{{"students/$studentInfo->id/delete"}}"
        //                 url = url.replace(`studentInfo->id`, studentInfo.id)

        //                 $.ajax({
        //                     type: 'POST'
        //                     url: url,
        //                     data: {
        //                         '_method': 'DELETE',
        //                         '_token': '{{csrf_token()}}'
        //                     },
        //                     success: function(){
        //                         Swal.fire(
        //                     'Deleted!',
        //                     'Your file has been deleted.',
        //                     'success'
        //                 )
        //                     }
        //                 })

                        
        //             }
        //         })
        // }
    </script>
@endsection

