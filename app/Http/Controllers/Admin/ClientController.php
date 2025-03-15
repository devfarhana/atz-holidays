<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientTitle;
use App\Models\Setting;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{

    public function index()
    {

        $clientTitle = ClientTitle::first();
        $clients = Client::all();
        $settings = Setting::first();
        $userLog = UserLog::where('user_id', Auth::id())->latest('last_login_time')->first();
        return view('admin.client.index',[
            'clientTitle' => $clientTitle,
            'clients' => $clients,
            'global_settings' => $settings,
            'userLog' => $userLog,
        ]);


    }

    public function titleUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
        ]);

        $clientTitle = ClientTitle::first();
        $clientTitle->title = $request->title;



        $clientTitle->save();

        return redirect()->route('client.index')->with('success', 'Client Title updated successfully.');
    }

    private function handleFileUpload($file, $path)
    {
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        return $file->storeAs('uploads/' . $path, $fileName, 'public');
    }

    private function handleFileDelete($filePath)
    {
        if ($filePath && Storage::exists('public/' . $filePath)) {
            Storage::delete('public/' . $filePath);
        }
    }
    public function store(Request $request) {

        // dd($request->all());

        $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,svg,jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|string',
        ]);

        $client = new Client();
        $client->name = $request->name;
        $client->url = $request->url;

        if ($request->hasFile('logo')) {
            $client->logo = $this->handleFileUpload($request->file('logo'), 'client/logo');
        }
        $client->save();
        return redirect()->route('client.index')->with('success', 'Client created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,svg,jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|string',
        ]);

        $client = Client::findOrFail($id);
        $client->name = $request->name;
        $client->url = $request->url;


        if ($request->hasFile('logo')) {
            // Delete old image
            $this->handleFileDelete($client->logo);
            // Upload new image
            $client->logo = $this->handleFileUpload($request->file('logo'), 'client/logo');
        }

        $client->save();

        return redirect()->route('client.index')->with('success', 'Client updated successfully.');
    }

    public function toggleStatus($id)
    {
        $client = Client::findOrFail($id);
        $client->status = !$client->status;
        $client->save();
        return redirect()->route('client.index')->with('success', 'Client status updated successfully.');
    }
    public function showURL($id)
    {
        $client = Client::findOrFail($id);

        // Toggle the `show_url` status
        $client->show_url = !$client->show_url;
        $client->save();



        return redirect()->route('client.index')->with('success', 'Url Update successfully');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);

        // Delete associated image if it exists
        $this->handleFileDelete($client->logo);

        // Delete the client record
        $client->delete();

        return redirect()->route('client.index')->with('success', 'Client deleted successfully.');
    }

}
