@extends('layouts.app')
@section('title','show student')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-header bg-primary"></div>
                    <h5 class="card-title py-3">Hello,{{$student->name}}</h5>
                    <h6 class="card-subtitle">Roll No {{$student->rollno}}</h6>
                    <h6 class="card-subtitle pb-3">{{$student->email}}</h6>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi nam fugiat
                        dolores reprehenderit
                        voluptates dignissimos.</p>
                    <a class="btn btn-primary" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection