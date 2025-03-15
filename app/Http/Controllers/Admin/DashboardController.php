<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sector;
use App\Models\Occupation;
use App\Models\OpenOpinion;
use Illuminate\Http\Request;
use App\Models\QuestionOpinion;
use App\Http\Controllers\Controller;
use App\Models\Jorip;
use App\Models\Survey;
use App\Models\Visitor;

class DashboardController extends Controller
{
    public function index()
    {

        $totalVisitor = Visitor::count();
        return view('admin.dashboard',
            compact('totalVisitor',)
        );
    }

}
