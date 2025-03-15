<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TermsCondition;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TermsConditionController extends Controller
{
    public function index() {
        $terms = TermsCondition::all();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.terms-condition.index',[
            'terms' => $terms,
            'userLog' => $userLog,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',

        ]);

        $term = new TermsCondition();
        $term->title = $request->title;
        $term->description = $request->description;
        $term->save();
        return redirect()->route('terms-condition.index')->with('success', 'Terms & Condition created successfully.');
    }

    public function toggleStatus($id)
    {
        $term = TermsCondition::findOrFail($id);
        $term->status = !$term->status;
        $term->save();
        return redirect()->route('terms-condition.index')->with('success', 'Terms & Condition status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $term = TermsCondition::findOrFail($id);
        $term->title = $request->title;
        $term->description = $request->description;
        $term->save();
        return redirect()->route('terms-condition.index')->with('success', 'Terms & Condition updated successfully.');
    }

    public function destroy($id)
    {
        $term = TermsCondition::findOrFail($id);
        $term->delete();
        return redirect()->route('terms-condition.index')->with('success', 'Terms & Condition deleted successfully.');
    }
}
