<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeratorController extends Controller
{
    public function ModeratorDashboard() {
        return view('moderator.moderator_dashboard');
    }
}
