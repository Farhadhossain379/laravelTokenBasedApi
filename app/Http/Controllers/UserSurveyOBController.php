<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSurveyOB;
class UserSurveyOBController extends Controller
{
     // Fetch all survey records
    public function index()
    {
        return response()->json(UserSurveyOB::all(), 200);
    }

    // Insert a new survey record
    public function store(Request $request)
    {
        $survey = UserSurveyOB::create($request->all());
        return response()->json([
            'message' => 'Survey created successfully!',
            'survey' => $survey
        ], 201);
    }
    
}
// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\UserSurveyOB;

// class UserSurveyOBController extends Controller
// {
//     // Fetch all survey records
//     public function index()
//     {
//         return response()->json(UserSurveyOB::all(), 200);
//     }

//     // Insert a new survey record
//     public function store(Request $request)
//     {
//         $survey = UserSurveyOB::create($request->all());
//         return response()->json($survey, 201);
//     }
// }

