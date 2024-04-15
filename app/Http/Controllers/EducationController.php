<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function displayEducation($userId)
    {
        $education = Education::where('EmpID', $userId)->first();
        return view('showEducation', compact('education'));
    }

    public function addEducation(Request $request)
    {
        $validatedData = $request->validate([
            'EmpID' => 'required|exists:users,id',
            'CoursePG' => 'nullable|string',
            'SchoolCollegePG' => 'nullable|string',
            'YearPassingPG' => 'nullable|string',
            'PercentagePG' => 'nullable|string',
            'CourseGra' => 'nullable|string',
            'SchoolCollegeGra' => 'nullable|string',
            'YearPassingGra' => 'nullable|string',
            'PercentageGra' => 'nullable|string',
            'CourseSSC' => 'nullable|string',
            'SchoolCollegeSSC' => 'nullable|string',
            'YearPassingSSC' => 'nullable|string',
            'PercentageSSC' => 'nullable|string',
            'CourseHSC' => 'nullable|string',
            'SchoolCollegeHSC' => 'nullable|string',
            'YearPassingHSC' => 'nullable|string',
            'PercentageHSC' => 'nullable|string',
        ]);

        Education::create($validatedData);

        return redirect()->back()->with('success', 'Education added successfully.');
    }
}
