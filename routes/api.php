<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClubController;

Route::apiResource('students', StudentController::class);
Route::apiResource('clubs', ClubController::class);
Route::apiResource('memberships', ClubMembershipController::class);


Route::get('/test-api', function () {
    return response()->json(['message' => 'API routes are working!']);
});
