<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NoticeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticeTypeController extends Controller
{
    public function index()
    {
        $notices = NoticeType::all();
        return view('admin.notice-type.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',

        ]);

        $notice = new NoticeType();
        $notice->name = $validated['name'];

        $notice->save();

        return redirect()->back()->with('success', 'Notice Type created successfully.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $notice = NoticeType::find($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $notice->name = $validated['name'];
        $notice->save();

        return redirect()->back()->with('success', 'Notices data updated successfully.');
    }
    public function toggleStatus($id)
    {
        $notice = NoticeType::findOrFail($id);
        $notice->status = !$notice->status;
        $notice->save();
        return redirect()->back()->with('success', 'Notices data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = NoticeType::find($id);
        if ($notice->logo && Storage::disk('public')->exists($notice->logo)) {
            Storage::disk('public')->delete($notice->logo);
        }
        $notice->delete();
        return redirect()->back()->with('success', 'Notice Type deleted successfully.');
    }
}
