<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use App\Models\TestModel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function dashboard():View {
        // get all tests and courses
        $tests = TestModel::all();
        $courses = CourseModel::all();
        return view("dashboard", ["tests" => $tests, "courses" => $courses]);
    }
}
