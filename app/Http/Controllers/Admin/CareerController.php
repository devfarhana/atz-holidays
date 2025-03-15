<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::all();
        return view('admin.career.index',compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('admin.career.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'employee_type' => 'nullable|string|max:100',
            'posted_date' => 'nullable|date',
            'description' => 'nullable|string',
        ]);
        $career = new Career();
        $career->job_title = $request->job_title;
        $slug = Str::slug($request->job_title);
        $originalSlug = $slug;
        $counter = 1;
        while (Career::where('slug', $slug)->where('id', '!=', $career->id)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }
        $career->slug = $slug;
        $career->location = $request->location;
        $career->employee_type = $request->employee_type;
        $career->posted_date = $request->posted_date;
        $career->description = $request->description;
        $career->save();
        return redirect()->route('career.index')->with('success', 'career created successfully.');
    }
    public function toggleStatus($id)
    {
        $career = Career::findOrFail($id);
        $career->status = !$career->status;
        $career->save();
        return redirect()->route('career.index')->with('success', 'Career status updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.career.edit',[
            'career' => $career,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'job_title' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'employee_type' => 'nullable|string|max:100',
            'posted_date' => 'nullable|date',
            'description' => 'nullable|string',
        ]);
        $career = Career::findOrFail($id);
        $career->job_title = $request->job_title;
        $slug = Str::slug($request->job_title);
        $originalSlug = $slug;
        $counter = 1;
        while (Career::where('slug', $slug)->where('id', '!=', $career->id)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }
        $career->slug = $slug;
        $career->location = $request->location;
        $career->employee_type = $request->employee_type;
        $career->posted_date = $request->posted_date;
        $career->description = $request->description;
        $career->save();
        return redirect()->route('career.index')->with('success', 'Career updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();
        return redirect()->route('career.index')->with('success', 'Career deleted successfully.');
    }
}
