<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Country;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $settings = Setting::first(); // Assuming you have a single row for settings
        $destinationcountries = Country::with('destination')->whereHas('destination')->where('status', 1)->get();
        View::share('settings', $settings);
        View::share('destinationcountries',$destinationcountries);
    }
}
