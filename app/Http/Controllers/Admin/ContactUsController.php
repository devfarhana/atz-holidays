<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ContactUsController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.contact-us.index',compact('userLog','contact'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|string',
            'map' => 'nullable|string',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->title = $request->title;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->map = $request->map;
        $contact->save();
        return redirect()->route('contact-us.index')->with('message', 'Contact updated successfully.');
    }

}
