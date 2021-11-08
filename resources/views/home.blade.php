@extends('layouts.app')

@section('content')

    @include('layouts.header')  

    <div class="m-5 p-4 text-center border border-success alert alert-success mb-3">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#check-circle-fill"/></svg>
        {{ $count[0]->total }} Registered Users ( {{ $count[0]->male }} Men | {{ $count[0]->female }} Women @if ($count[0]->other > 0) | {{ $count[0]->other }} Other(s) @endif )
    </div>
    <div class="mx-5 p-4 row bg-light shadow-lg rounded mb-2">
        <div class="col-md-1 text-center m-auto u-data">
            <strong>SNO</strong>
        </div><hr class="mobile">
        <div class="col-md-3 text-center m-auto u-data" title="name">
            <strong>NAME</strong>
        </div><hr class="mobile">
        <div class="col-md-1 text-center m-auto u-data" title="gender">
            <strong>GENDER</strong>
        </div><hr class="mobile">
        <div class="col-md-2 text-center m-auto u-data" title="age">
            <strong>AGE</strong>
        </div><hr class="mobile">
        <div class="col-md-3 text-center m-auto u-data" title="email address">
            <strong>EMAIL ADDRESS</strong>
        </div><hr class="mobile">
        <div class="col-md-2 text-center">
            <strong>ACTIONS</strong>
        </div>
    </div>
    @php
        $i = 0;
    @endphp
    @foreach ($users as $user)
    <div class="mx-5 p-4 row bg-light shadow-lg rounded mb-2 p-data">
        <div class="col-md-1 text-center m-auto u-data">
            {{ ++$i; }}
        </div><hr class="mobile">
        <div class="col-md-3 text-center m-auto u-data" title="name">
            <strong>{{ $user->name }}</strong>
        </div><hr class="mobile">
        <div class="col-md-1 text-center m-auto u-data" title="gender">
            {{ $user->gender }}
        </div><hr class="mobile">
        <div class="col-md-2 text-center m-auto u-data" title="age">
            {{ 2021 - explode('-', $user->dob)[0] }}
        </div><hr class="mobile">
        <div class="col-md-3 text-center m-auto u-data" title="email address">
            <strong>{{ $user->email }}</strong>
        </div><hr class="mobile">
        <div class="col-md-2 text-center">
            <form action="/users/{{ $user->id }}" method="GET" class="d-inline me-1">
                @csrf
                <button type="submit" class="btn btn-light rounded" title="view profile">
                    <i class="fas fa-user fa-xl"></i>    
                </button>
            </form>
            <form action="/users/{{ $user->id }}/edit" method="GET" class="d-inline mx-2">
                @csrf
                <button type="submit" class="btn btn-light rounded" title="edit profile">
                    <i class="fas fa-edit fa-xl"></i>    
                </button>
            </form>
            <form action="/users/{{ $user->id }}" method="POST" class="d-inline ms-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-light rounded" title="delete profile">
                    <i class="fas fa-trash-alt fa-xl"></i>    
                </button>
            </form>
        </div>
    </div>
    @endforeach

@endsection