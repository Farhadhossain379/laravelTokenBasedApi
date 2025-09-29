<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserSurveyController;

// GET all surveys
Route::get('/api/surveys', [UserSurveyController::class, 'index'])
    ->middleware('api');

// POST new survey
Route::post('/api/surveys', [UserSurveyController::class, 'store'])
    ->middleware('api');
