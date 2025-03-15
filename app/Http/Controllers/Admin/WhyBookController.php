<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserLog;
use App\Models\WhyBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WhyBookController extends Controller
{
    private function handleFileUpload($file, $path)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        return $file->storeAs('uploads/' . $path, $fileName, 'public');
    }

    private function handleFileDelete($filePath)
    {
        if ($filePath && Storage::exists('public/' . $filePath)) {
            Storage::delete('public/' . $filePath);
        }
    }

    public function index() {
        $whyBooks = WhyBook::all();


        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.why-book.index',[
            'whyBooks' => $whyBooks,
            'userLog' => $userLog,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'details' => 'nullable|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $whyBook = new WhyBook();
        $whyBook->title = $request->title;
        $whyBook->details = $request->details;

        if ($request->hasFile('icon')) {
            $whyBook->icon = $this->handleFileUpload($request->file('icon'), 'why-book/icon');
        }


        $whyBook->save();
        return redirect()->route('why-book.index')->with('success', 'Why Book  With Us created successfully.');
    }

    public function toggleStatus($id)
    {
        $whyBook = WhyBook::findOrFail($id);
        $whyBook->status = !$whyBook->status;
        $whyBook->save();
        return redirect()->route('why-book.index')->with('success', 'Why Book  With Us status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'details' => 'nullable|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $whyBook = WhyBook::findOrFail($id);
        $whyBook->title = $request->title;
        $whyBook->details = $request->details;

        // Handle Image Upload
        if ($request->hasFile('icon')) {
            $this->handleFileDelete($whyBook->icon);
            $whyBook->icon = $this->handleFileUpload($request->file('icon'), 'why-book/icon');
        }


        $whyBook->save();
        return redirect()->route('why-book.index')->with('success', 'Why Book  With Us updated successfully.');
    }

    public function destroy($id)
    {
        $whyBook = WhyBook::findOrFail($id);
        $this->handleFileDelete($whyBook->icon);
        $whyBook->delete();
        return redirect()->route('why-book.index')->with('success', 'Why Book  With Us deleted successfully.');
    }
}
