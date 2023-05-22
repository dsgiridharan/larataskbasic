@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <a href="{{url('teachers')}}"
                class="card p-4 bg-primary text-white text-decoration-none fw-bold text-center">
                Teacher
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{url('students')}}"
                class="card p-4 bg-success text-white text-decoration-none fw-bold text-center">
                Student
            </a>
        </div>
    </div>
</div>

@endsection