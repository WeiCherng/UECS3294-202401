<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function displayExperience(Experience $userId)
    {
        $experience = Experience::where('EmpID', $userId)->first();
        return view('showExperience', compact('experience'));
    }
    
    public function addExperience(Request $request)
    {
        $validatedData = $request->validate([
            'EmpID' => 'required',
            'Employer1Name' => 'nullable|string',
            'Employer1Designation' => 'nullable|string',
            'Employer1CTC' => 'nullable|numeric',
            'Employer1WorkDuration' => 'nullable|string',
            'Employer2Name' => 'nullable|string',
            'Employer2Designation' => 'nullable|string',
            'Employer2CTC' => 'nullable|numeric',
            'Employer2WorkDuration' => 'nullable|string',
            'Employer3Name' => 'nullable|string',
            'Employer3Designation' => 'nullable|string',
            'Employer3CTC' => 'nullable|numeric',
            'Employer3WorkDuration' => 'nullable|string',
        ]);
        Experience::create($validatedData);
        return redirect()->back()->with('success', 'Experience added successfully.');
    }

    
}
