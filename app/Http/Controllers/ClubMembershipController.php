<?php

namespace App\Http\Controllers;

use App\Models\ClubMembership;
use Illuminate\Http\Request;


class ClubMembershipController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'club_id' => 'required|exists:clubs,id',
            'role' => 'required|in:General,Executive'
        ]);

        $membership = ClubMembership::create($request->all());
        return response()->json($membership, 201);
    }

    public function index()
    {
        return response()->json(ClubMembership::with(['student', 'club'])->get());
    }

    public function show($id)
    {
        return response()->json(ClubMembership::with(['student', 'club'])->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $membership = ClubMembership::findOrFail($id);
        $membership->update($request->only(['role']));
        return response()->json(['message' => 'Membership updated successfully', 'membership' => $membership]);
    }

    public function destroy($id)
    {
        ClubMembership::findOrFail($id)->delete();
        return response()->json(['message' => 'Membership removed successfully']);
    }
}
