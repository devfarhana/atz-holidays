<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivacyPolicyController extends Controller
{
    public function index() {
        $privacys = PrivacyPolicy::all();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.privacy-policy.index',[
            'privacys' => $privacys,
            'userLog' => $userLog,
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',

        ]);

        $privacy = new PrivacyPolicy();
        $privacy->title = $request->title;
        $privacy->description = $request->description;
        $privacy->save();
        return redirect()->route('privacy-policy.index')->with('success', 'Privacy & Policy created successfully.');
    }

    public function toggleStatus($id)
    {
        $privacy = PrivacyPolicy::findOrFail($id);
        $privacy->status = !$privacy->status;
        $privacy->save();
        return redirect()->route('privacy-policy.index')->with('success', 'Privacy & Policy status updated successfully.');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $privacy = PrivacyPolicy::findOrFail($id);
        $privacy->title = $request->title;
        $privacy->description = $request->description;
        $privacy->save();
        return redirect()->route('privacy-policy.index')->with('success', 'Privacy & Policy updated successfully.');
    }

    public function destroy($id)
    {
        $privacy = PrivacyPolicy::findOrFail($id);
        $privacy->delete();
        return redirect()->route('privacy-policy.index')->with('success', 'Privacy & Policy deleted successfully.');
    }
}
