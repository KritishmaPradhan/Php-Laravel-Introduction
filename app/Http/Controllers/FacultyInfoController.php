<?php

namespace App\Http\Controllers;

use App\Models\FacultyInfo;
use Illuminate\Http\Request;

class FacultyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facultyInfos = FacultyInfo::all();
        return view('category.index', ['facultyInfos' => $facultyInfos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'department' => 'required',
            'email' => 'required|email',
        ]);

        FacultyInfo::create($request->all());

        return redirect()->route('category.index')
                         ->with('success', 'Faculty information created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(FacultyInfo $facultyInfo)
    {
        return view('category.show', compact('facultyInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FacultyInfo $facultyInfo)
    {
        return view('category.edit', compact('facultyInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FacultyInfo $facultyInfo)
    {
      $request->validate([
            'name' => 'required',
            'department' => 'required',
            'email' => 'required|email',
        ]);

        $facultyInfo->update($request->all());

        return redirect()->route('category.index')
                         ->with('success', 'Faculty information updated successfully.');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FacultyInfo $facultyInfo)
    {
        $facultyInfo->delete();

        return redirect()->route('category.index')
                         ->with('success', 'Faculty information deleted successfully.');
    }
}
