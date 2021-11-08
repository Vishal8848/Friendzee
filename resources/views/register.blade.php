@extends('layouts.app')

@section('content')
    
    <!-- User Form Page -->
    <div id="form-page" class="form-set rounded shadow-lg p-4">

        <!-- Form Title -->
        <div class="form-title text-center">
            <a href="{{ url('/') }}" style="text-decoration: none; color: rgb(48, 48, 56)"><strong class="fs-3">FRIENDS</strong></a>
        </div><hr/>

        <!-- Register Form --> 
        <form id="register" action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="register-msg text-center mb-1 alert border alert-primary border-primary">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                Welcome, New User
            </div><br/>
            <div class="row mb-3">
                <div class="form-floating col-md-6 border border-light">
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" onkeyup="fieldTracer()" required>
                    <label for="fname" style="margin-left: 10px">First Name <sup style="color: red">*</sup></label>
                    <div id="fname-text" class="text-danger ms-2"></div>
                </div>
                <div class="form-floating col-md-6 last">
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" onkeyup="fieldTracer()">
                    <label for="lname" style="margin-left: 10px">Last Name</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <select name="gender" id="gender" class="form-select py-3" required>
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="col-md-6 last">
                    <input type="text" class="form-control py-3" id="dob" name="dob" placeholder="Date of Birth" max="2005-12-31" onfocus="(this.type='date')" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <label for="email" style="margin-left: 10px">Email <sup style="color: red">*</sup></label>
                    <div id="email-text" class="text-danger ms-2"></div>
                </div>
            </div>
            <div class="form-submit text-center mt-4">
                <input id="Reg-Submit" name="Reg-Submit" type="submit" class="btn btn-outline-success me-2" value="Sign Up" onclick="return Validation()">
                {{-- <a href="{{ route('login') }}" class="btn btn-outline-danger ms-2">Sign In</a> --}}
            </div>
        </form>
    </div>

@endsection