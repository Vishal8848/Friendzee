@extends('layouts.app')

@section('content')

    @include('layouts.header')  

    <div class="m-5 p-4 text-center border border-success alert alert-success mb-3">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#check-circle-fill"/></svg>
        Welcome to {{ $user->name}}'s Profile
    </div>

@endsection