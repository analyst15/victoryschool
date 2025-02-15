<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        return response()->json(Club::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'club_name' => 'required|string|unique:clubs',
            'patron' => 'required|string',
            'registration_fee' => 'required|numeric',
        ]);

        $club = Club::create($request->all());
        return response()->json($club, 201);
    }

    public function show($id)
    {
        return response()->json(Club::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $club = Club::findOrFail($id);
        $club->update($request->all());

        return response()->json($club, 200);
    }

    public function destroy($id)
    {
        Club::findOrFail($id)->delete();
        return response()->json(['message' => 'Club deleted successfully'], 200);
    }
}
