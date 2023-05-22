@extends('layouts.app')
@section('title', 'Teachers')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-end">
        <div class="col-md-2 text-end">
            <a href="{{url('teachers/create')}}" class="btn btn-primary">
                Create Teacher
            </a>
        </div>
    </div>
    <div class="mt-4">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                        <th scope="row">{{$teacher->id}}</th>
                        <td>{{$teacher->name}}</td>
                        <td class="d-flex">
                            <a href="{{url('teachers/show', $teacher->id)}}"
                                class="text-primary fw-bold text-decoration-none me-3">
                                View
                            </a>
                            <a href="{{url('teachers/edit', $teacher->id)}}"
                                class="text-success fw-bold text-decoration-none me-3">
                                Edit
                            </a>
                            <form action="{{url('teachers/destroy', $teacher->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button class="text-danger fw-bold border-0 bg-transparent"
                                    type="submit">Delete</button>
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