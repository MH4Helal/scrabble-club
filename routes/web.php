<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\LeaderboardController;

Route::resource('members', MemberController::class);
Route::get('leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard.index');
