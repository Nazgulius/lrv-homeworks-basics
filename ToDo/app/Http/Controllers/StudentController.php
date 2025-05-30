<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Group;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view('students.create', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Group $group)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
        ]);
        // $student = new Student($request->all());
        $student = new Student();
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->group_id = $group->id;
        $student->save();
        // return redirect()->route('groups.show', $group);
        return redirect()->route('students.show', $student);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $group = $student->group;
        return view('students.show', compact('student', 'group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
