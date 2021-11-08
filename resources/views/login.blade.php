@extends('layouts.app')

@section('content')
    
    <!-- User Form Page -->
    <div id="form-page" class="form-set rounded shadow p-4">

        <!-- Form Title -->
        <div class="form-title text-center">
            <a href="{{ url('/') }}" style="text-decoration: none; color: rgb(48, 48, 56)"><strong class="fs-3">FRIENDS</strong></a>     
        </div><hr/>

        <!-- Login Form --> 
        <form id="login" action="{{ url('/users') }}" method="POST">
            @csrf
            <div class="login-msg text-center mb-1 alert border alert-primary border-primary">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                Welcome to Login
            </div><br/>
            <div class="row mb-2">
                <div class="form-floating">
                    <input type="email" class="form-control" id="lemail" name="lemail" placeholder="Email" required>
                    <label for="lemail" style="margin-left: 10px">Email <sup style="color: red">*</sup></label>
                </div>
                <div class="text-muted ms-2 mb-2" style="font-size: 15px">Enter Registered Email to Proceed</div>
            </div>
            <div class="form-submit text-center mt-2">
                <input id="Log-Submit" name="Log-Submit" type="submit" class="btn btn-outline-success me-2" value="Sign In">
                <a href="{{ route('users.create') }}" class="btn btn-outline-danger ms-2">Sign Up</a>
            </div>
        </form>
    
    </div>

@endsection