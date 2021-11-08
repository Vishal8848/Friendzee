@extends('layouts.app')

@section('content')
    
    <!-- User Form Page -->
    <div id="form-page" class="form-set rounded shadow p-4">

        <!-- Form Title -->
        <div class="form-title text-center">
            <a href="{{ url('/') }}" style="text-decoration: none; color: rgb(48, 48, 56)"><strong class="fs-3">FRIENDS</strong></a>
        </div><hr/>

        <!-- Reset Form -->
        <form id="reset" action="connect?reset=1" method="post">
            <div class="reset-msg text-center mb-1 alert border alert-primary border-primary">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                Reset Your Password
            </div><br/>
            <div class="row mb-2">
                <div class="form-floating">
                    <input type="email" class="form-control" id="reset-email" name="reset-email" placeholder="Email" required>
                    <label for="reset-email" style="margin-left: 10px">Email <sup style="color: red">*</sup></label>
                </div>
            </div>
            <div class="text-muted ms-2 mb-2" style="font-size: 15px">Enter Registered Email to Proceed</div>
            <div class="row">
                <div class="form-floating">
                    <input type="password" class="form-control" id="chpasswd" name="chpasswd" placeholder="Password" required>
                    <label for="chpasswd" style="margin-left: 10px">New Password <sup style="color: red">*</sup></label>
                    <div id="chpasswd-text" class="text-danger ms-2"></div>
                </div>
            </div>
            <div class="row mt-4 mb-1">
                <div class="form-floating">
                    <input type="password" class="form-control" id="ccpasswd" name="ccpasswd" placeholder="Password" required>
                    <label for="ccpasswd" style="margin-left: 10px">Confirm Password <sup style="color: red">*</sup></label>
                    <div id="ccpasswd-text" class="text-danger ms-2"></div>
                </div>
            </div>
            <div id="passwd-sample" class="text-muted ms-2" style="font-size: 15px">See Example</div>
            <div class="form-submit text-center mt-4">
                <input id="Reset-Submit" name="Reset-Submit" type="submit" class="btn btn-outline-success me-2" value="Continue">
                {{-- <a href="{{ route('login') }}" class="btn btn-outline-danger ms-2">Back</a> --}}
            </div>
        </form>
    
    </div>

@endsection