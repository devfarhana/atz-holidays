<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TeamPage;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        $teamPage = TeamPage::first();
        return view('admin.team.index',compact('teams','teamPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function pageUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'banner_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $teamPage = TeamPage::first();
        $teamPage->title = $request->title;
        if($request->hasFile('banner_img')) {

            if ($teamPage->banner_img && Storage::disk('public')->exists($teamPage->banner_img)) {
                Storage::disk('public')->delete($teamPage->banner_img);
            }
            $teamPage->banner_img = $request->file('banner_img')->store('team','public');

        }

        $teamPage->save();

        return redirect()->route('teams.index')->with('success', 'Team Page Updated successfully.');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->position = $request->position;
        if ($request->hasFile('image')) {
            $team->image = $request->file('image')->store('team','public');
        }
        $team->save();
        return redirect()->route('teams.index')->with('success', 'Team member created successfully.');
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
    public function edit(Team $team)
    {
        return response()->json($team);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $team->name = $request->name;
        $team->position = $request->position;
        if($request->hasFile('image')) {

            if ($team->image && Storage::disk('public')->exists($team->image)) {
                Storage::disk('public')->delete($team->image);
            }
            $team->image = $request->file('image')->store('team','public');

        }
        $team->save();

        return redirect()->route('teams.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        if ($team->image && Storage::disk('public')->exists($team->image)) {
            Storage::disk('public')->delete($team->image);
        }
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Team member deleted successfully.');
    }

    public function toggleStatus($id)
    {
        $team = Team::findOrFail($id);
        if (!$team) {
            return redirect()->route('teams.index')->with('error', 'Team member not found.');
        }
        $team->status = !$team->status;
        $team->save();
        return redirect()->route('teams.index')->with('success', 'Team member status updated successfully.');
    }
}
