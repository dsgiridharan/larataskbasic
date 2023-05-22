@extends('layouts.app')
@section('title','students')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-end">
        <div class="col-md-3 text-end">
            <a class="btn btn-primary" href="{{url('students/create')}}">create students</a>
        </div>
    </div>
    <div class="mt-4">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Roll No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td scope="row">{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->rollno}}</td>
                        <td>{{$student->email}}</td>
                        <td class="d-flex justify-content-end">
                            <a class="text-primary fw-bold me-5 text-decoration-none"
                                href="{{url('students/show',$student->id)}}">View</a>
                            <a class="text-success fw-bold me-5 text-decoration-none"
                                href="{{url('students/edit',$student->id)}}">Edit</a>
                            <form action="{{url('students/destroy',$student->id)}}" method="post"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf @method('DELETE')
                                <button type="submit"
                                    class="text-danger btn fw-bold border-0 bg-tranperant p-0">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection