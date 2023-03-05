@extends('layouts.user_type.auth')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="" class="table table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Subject</th>
                              
                                <th>Image</th>
                                <th class="dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @unless(count($studentCertificates) == 0)
                                @foreach ($studentCertificates as $studentInfo)
                                    
                                        <tr>
                                            <td>{{ $studentInfo->name }}</td>
                                            <td>{{ $studentInfo->email }}</td>
                                            <td>{{ $studentInfo->contact }}</td>
                                            <td>{{ $studentInfo->subject }}</td>

                                            <td>
                                                <div class="d-flex">
                                                    <div class="usr-img-frame mr-2 rounded-circle">
                                                        <img alt="avatar" class="img-fluid rounded-circle"
                                                            src="{{ $studentInfo->file ? asset('storage/' . $studentInfo->file) : asset('/img/90x90.jpg') }}">
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
                                                        <a class="dropdown-item" href="students/{{ $studentInfo->id }}/export">Export to pdf</a>
                                                        <a class="dropdown-item" href="students/{{ $studentInfo->id }}/delete">Delete</a>

                                                        <div class="dropdown-divider"></div>
                                                        {{-- <a class="dropdown-item" href="#">Separated link</a> --}}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- <x-student-table :studentInfo= "$studentInfo" /> --}}
                                    
                                @endforeach
                            @else
                                <p>No Request present.</p>
                            @endunless
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

