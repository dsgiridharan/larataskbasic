<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('pages.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('pages.teachers.create');
    }

    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->save();
        return redirect('teachers');
    }

    public function show(Teacher $teacher)
    {
        return view('pages.teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('pages.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->name = $request->name;
        $teacher->save();
        return redirect('teachers');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect('teachers');
    }
}
