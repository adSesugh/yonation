@extends('layouts.auth')

@section('title') Register @stop

@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image" style="width: 100px;">
                    <div class="text-right mt-2">
                        <a class="btn btn-sm btn-secondary" href="{{ route('index') }}">
                            <i class="fas fa-home"></i>
                            Back to Home
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900">Fill your Information!</h1>
                            <!-- Circles which indicates the steps of the form: -->
                            <div class="mb-4" style="text-align:center;margin-top:2px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                            <div>
                                @if(Session::has('success'))
                                    <p class="alert alert-info">{{ Session::get('success') }}</p>
                                @endif
                            </div>
                        </div>
                        {!! Form::open(['class' => 'user', 'route' => 'job.applyStore', 'enctype' => 'multipart/form-data', 'method' => 'POST', 'id' => 'regForm']) !!}
                            @csrf
                            <div class="tab">
                                <div class="form-group">
                                    <input type="text" class="form-control w-full @error('fullname') is-invalid @enderror" name="fullname" id="fullname" placeholder="Full Name" value="{{ old('fullname') }}">
                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" required class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="phone" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" id="mobile_no" placeholder="Mobile Number" value="{{ old('mobile_no') }}">
                                        @error('mobile_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="birthdate">Birth Date</label>
                                        <input type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" id="birthdate" value="{{ old('birthdate') }}">
                                        @error('birthdate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="gender">Gender</label>
                                        {!! Form::select('gender', $genders, old('gender'), ['class' => 'form-control', 'id' => 'gender']) !!}
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="domain_id">Job Function</label>
                                        {!! Form::select('domain_id', $domains, old('domain_id'), ['class' => 'form-control', 'id'  => 'domain_id']) !!}
                                        @error('domain_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="degree_id">Qualification</label>
                                            {!! Form::select('degree_id', $degrees, old('degree_id'), ['class' => 'form-control', 'id' => 'degree_id']) !!}
                                            @error('degree_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('school_name') is-invalid @enderror" name="school_name" id="school_name" placeholder="School Name" {{ old('school_name') }}>
                                    @error('school_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('course') is-invalid @enderror" name="course" id="course" placeholder="Course Completed" {{ old('course') }}>
                                    @error('course')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="year_from">Attended From Year</label>
                                        <input type="number" class="form-control @error('year_from') is-invalid @enderror" name="year_from" id="year_from" placeholder="Attended From Year" {{ old('year_from') }}>
                                        @error('year_from')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="year_to">Attended To Year</label>
                                        <input type="number" class="form-control @error('year_to') is-invalid @enderror" name="year_to" id="year_to" placeholder="Attended To Year" {{ old('year_to') }}>
                                        @error('year_to')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <fieldset>
                                    <legend>Father's Information</legend>
                                    <div class="form-group">
                                        <input type="text" required class="form-control @error('father') is-invalid @enderror" name="father" id="father" placeholder="Father's Full Name" {{ old('father') }}>
                                        @error('father')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control @error('fcity') is-invalid @enderror" name="fcity" id="fcity" placeholder="City" {{ old('fcity') }}>
                                            @error('fcity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control @error('fstate') is-invalid @enderror" name="fstate" id="fstate" placeholder="State from" {{ old('fstate') }}>
                                            @error('fstate')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Mother's Information</legend>
                                    <div class="form-group">
                                        <input type="text" required class="form-control @error('mother') is-invalid @enderror" name="mother" id="mother" placeholder="Mother's Full Name" {{ old('mother') }}>
                                        @error('mother')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control @error('mcity') is-invalid @enderror" name="mcity" id="mcity" placeholder="City" {{ old('mcity') }}>
                                            @error('mcity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control @error('mstate') is-invalid @enderror" name="mstate" id="mstate" placeholder="State from" {{ old('mstate') }}>
                                            @error('mstate')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="tab">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="photo">Passport upload</label>
                                        <input accept="image/jpeg,image/png,image/jpg" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo" placeholder="Photo" {{ old('photo') }}>
                                        @error('photo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 align-middle">
                                        <label for="resume">Resume/CV upload</label>
                                        <input accept=".doc,.pdf,.docx" type="file" class="form-control @error('resumecv') is-invalid @enderror" name="resumecv" id="resumecv" placeholder="Resume CV upload" {{ old('resumecv') }}>
                                        @error('resumecv')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" rows="4" placeholder="Resident Address">{{ old('address') }}</textarea>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="tab">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <input name="terms" type="checkbox" checked id="terms">
                                    </div>
                                    <div class="col-lg-11">
                                        <p>
                                            The information contained in this application is correct to the best of my knowledge. i hereby authorized YN and its 
                                            designated agents and representatives to conduct a comprehensive review of my background. Any false information 
                                            provided may lead to you being assessed as not suitable for the grant of entitlement as referred to above.
                                        </p>
                                        <p>
                                            <h6>DATA PROTECTION ACT</h6>
                                            The information being collected on this form will only be uses for job purposes 
                                            The Data will  not be disclosed to the external sources than emergency.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 text-left">
                                    <button class="btn btn-primary btn-user" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <button class="btn btn-primary btn-user" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                    <button class="btn btn-primary btn-user" type="submit" id="submitBtn">Submit</button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        /* Style the form */
        #regForm {
            background-color: #ffffff;
            width: 100%;
            min-width: 300px;
        }
        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }
    </style>
@endpush

@push('js')
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            document.getElementById("submitBtn").style.display = "none";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>
@endpush
