@extends('layouts.app')

@section('content')
    
    <!-- User Form Page -->
    <div id="form-page" class="form-set rounded shadow-lg p-4">

        <!-- Form Title -->
        <div class="form-title text-center">
            <a href="{{ url('/') }}" style="text-decoration: none; color: rgb(48, 48, 56)"><strong class="fs-3">FRIENDS</strong></a>
        </div><hr/>
        @php
            $name = explode(' ', $user->name);
            $fname = '';
            $lname = $name[count($name)-1];
            for($i = 0; $i < count($name) - 1; $i++)
                $fname .= $name[$i] . ' ';
        @endphp
        <!-- Register Form --> 
        <form id="register" action="/users/{{$user->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="login-msg text-center mb-1 alert border alert-primary border-primary">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                Welcome {{ $user->name}}
            </div><br/>
            <div class="row mb-3">
                <div class="form-floating col-md-6 border border-light">
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="{{ $fname }}" >
                    <label for="fname" style="margin-left: 10px">First Name <sup style="color: red">*</sup></label>
                    <div id="fname-text" class="text-danger ms-2"></div>
                </div>
                <div class="form-floating col-md-6 last">
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="{{ $lname }}" >
                    <label for="lname" style="margin-left: 10px">Last Name</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <select name="gender" id="gender" class="form-select py-3" >
                        <option value="" disabled>Gender</option>
                        <option value="Male"@if ($user->gender == 'Male') {{ $data = ' selected' }}@endif>Male</option>
                        <option value="Female"@if ($user->gender == 'Female') {{ $data = ' selected' }}@endif>Female</option>
                        <option value="Others"@if ($user->gender == 'Others') {{ $data = ' selected' }}@endif>Others</option>
                    </select>
                </div>
                <div class="col-md-6 last">
                    <input type="text" class="form-control py-3" id="dob" name="dob" placeholder="Date of Birth" max="2005-12-31" onfocus="(this.type='date')"  value="{{ $user->dob }}" >
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}" >
                    <label for="email" style="margin-left: 10px">Email <sup style="color: red">*</sup></label>
                    <div id="email-text" class="text-danger ms-2"></div>
                </div>
            </div>
            <div class="form-submit text-center mt-4">
                <input id="Reg-Submit" name="Reg-Submit" type="submit" class="btn btn-success me-2" value="Save" onclick="return Validation()">
                {{-- <a href="{{ route('login') }}" class="btn btn-outline-danger ms-2">Sign In</a> --}}
            </div>
        </form>
    </div>

@endsection