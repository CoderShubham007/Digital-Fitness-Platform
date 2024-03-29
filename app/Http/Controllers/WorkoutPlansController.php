<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WorkoutPlan;
use Illuminate\Http\Request;

class WorkoutPlansController extends Controller
{
    public function index(){
        return view('workout_plans' , ['plans' => WorkoutPlan::all()]);
    }
}
