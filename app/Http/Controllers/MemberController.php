<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        $recentGames = $member->games()->latest()->take(5)->get();
        return view('members.show', compact('member', 'recentGames'));
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members,email,'.$member->id,
            'phone' => 'nullable',
        ]);
        $member->update($request->all());
        return redirect()->route('members.show', $member->id)->with('success', 'Member updated successfully');
    }
}
