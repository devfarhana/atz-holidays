<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    public function index() {
        $faqs = Faq::all();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.faq.index',[
            'faqs' => $faqs,
            'userLog' => $userLog,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'details' => 'nullable|string',

        ]);

        $faq = new Faq();
        $faq->title = $request->title;
        $faq->details = $request->details;
        $faq->save();
        return redirect()->route('faq.index')->with('success', 'Faq created successfully.');
    }

    public function toggleStatus($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->status = !$faq->status;
        $faq->save();
        return redirect()->route('faq.index')->with('success', 'Faq status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'details' => 'nullable|string',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->title = $request->title;
        $faq->details = $request->details;
        $faq->save();
        return redirect()->route('faq.index')->with('success', 'Faq updated successfully.');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('faq.index')->with('success', 'Faq deleted successfully.');
    }
}
