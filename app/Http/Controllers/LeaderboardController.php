<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index()
    {
        $topMembers = Member::with('games')
            ->get()
            ->sortByDesc(fn($member) => $member->average_score)
            ->take(10);
        
        return view('leaderboard.index', compact('topMembers'));
    }
}
