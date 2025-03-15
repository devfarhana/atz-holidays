<?php

namespace App\Http\Controllers\Admin;

use App\Models\Greeting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GreetingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $greetings = Greeting::get();
        return view('admin.greet.index',compact('greetings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $greeting = Greeting::find($id);
        return view('admin.greet.edit',compact('greeting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $greeting = Greeting::find($id);
        if($request->hasFile('image')) {

            if ($greeting->image && Storage::disk('public')->exists($greeting->image)) {
                Storage::disk('public')->delete($greeting->image);
            }
            $greeting->image = $request->file('image')->store('uploads/greeting','public');

        }
        $greeting->name = $request->name;
        $greeting->designation = $request->designation;
        $greeting->message = $request->message;
        $greeting->save();

        return redirect()->route('greetings.index')->with('success','Greeting data updated successfully');
    }

}
