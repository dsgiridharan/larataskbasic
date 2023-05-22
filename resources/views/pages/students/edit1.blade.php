@extends('layouts.app')
@section('title','edit student')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{url('students/update',$student->id)}}" method="post">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
                    <label for="rollno" class="form-label">Roll No</label>
                    <input type="number" class="form-control" id="rollno" name="rollno" value="{{$student->rollno}}">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection