<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pathway;
use App\Projects;
use App\Tutor;
use App\Student;
use App\Techadmin;

class DashboardController extends Controller
{
    public function index()
    {
        $pathwayCount = Pathway::count();
        $projectsCount = Projects::count();
        $tutorCount = Tutor::count();
        $studentCount = Student::count();
        $techadminCount = Techadmin::count();
        return view('admin.dashboard',compact('pathwayCount','projectsCount','tutorCount','studentCount','techadminCount'));
    }
}
