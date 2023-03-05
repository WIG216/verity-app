@extends('layouts.user_type.auth')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row ">
                <div id="flFormsGrid" class="col-lg-12 layout-spacing mt-5">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Add a student certificate</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content ">
                            <form method="POST" action="/certificates/students/store" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="registrationNum">Registration Number</label>
                                    <input type="text" class="form-control" id="registrationNum"
                                        name="registration_number" placeholder="Registration Number">
                                    @error('registration_number')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="first_name"
                                            placeholder="First Name">
                                        @error('first_name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="last_name"
                                            placeholder="Last Name">
                                        @error('last_name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob">
                                        @error('dob')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pob">Place of Birth</label>
                                        <input type="text" class="form-control" id="pob" name="place_of_birth"
                                            placeholder="Place of Birth">
                                        @error('place_of_birth')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group mb-4">
                                    <div class="form-group mb-4 mt-3">
                                        <label for="img">Image</label>
                                        <input type="file" class="form-control-file" id="img" accept="image/*"
                                            name="img">
                                    </div>
                                    @error('img')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contact">Contact</label>
                                        <input type="tel" class="form-control" id="contact" name="contact"
                                            placeholder="Contact">
                                        @error('contact')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="guardian">Guardian Name</label>
                                        <input type="text" class="form-control" id="guardian" name="guardian_name"
                                            placeholder="Guardian Name">
                                        @error('guardian_name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="emergency">Emergency Number</label>
                                        <input type="tel" class="form-control" id="emergency" name="emergency_number"
                                            placeholder="Emergency Number">
                                        @error('emergency_number')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="Location">
                                    @error('location')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-row mb-4">
                                    <div class="form-group col-md-8">
                                        <label for="specialty">Speciality</label>
                                        <input type="text" class="form-control" id="specialty" name="specialty"
                                            placeholder="Speciality">
                                        @error('specialty')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="class">Class</label>
                                        <input type="number" class="form-control" id="class" name="class"
                                            placeholder="Class">
                                        @error('class')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Create Student
                                    Certificate</button>
                            </form>

                        </div>
                    </div>
                    <!--  END CONTENT AREA  -->

                </div>
            </div>
        </div>
    </div>
@endsection
