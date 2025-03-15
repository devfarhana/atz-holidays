<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\TeamPage;
use Illuminate\Http\Request;

class ExpertTeamController extends Controller
{
    public function team()
    {

        $teams = Team::where('status', true)
        ->get();
        $teamPage = TeamPage::first();
        return view('frontend.expert-team',compact('teamPage','teams'));
    }
}
