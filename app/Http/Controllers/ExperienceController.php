<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function displayExperience(Experience $userId)
    {
        $user = auth()->user();

        $experienceRecords = $user->experiences()->get();

        return view('myexp', ['experienceRecords' => $experienceRecords]);
    }

    public function addExperience(Request $request)
    {
        $validatedData = $request->validate([
            'CompanyName' => 'required|string|max:255',
            'RoleDesignation' => 'required|string|max:255',
            'Salary' => 'required|numeric|min:0',
            'WorkDuration' => 'required|string|max:255',
        ]);

        $user = auth()->user();

        $exp = new Experience;
        $exp->CompanyName = $request->CompanyName;
        $exp->RoleDesignation = $request->RoleDesignation;
        $exp->Salary = $request->Salary;
        $exp->WorkDuration = $request->WorkDuration;
        $exp->user_id = $user->id;
        $exp->save();

        return redirect()->route('myexp')->with('success', 'Experience added successfully.');
    }


    public function viewEditExperience($id)
    {
        // Find the education record by ID
        $experience = Experience::findOrFail($id);

        // Return the edit view with the education record
        return view('/editmyexp', ['experience' => $experience]);
    }

    public function updateExperience(Request $request, $id)
    {
        $validatedData = $request->validate([
            'CompanyName' => 'required|string|max:255',
            'RoleDesignation' => 'required|string|max:255',
            'Salary' => 'required|numeric|min:0',
            'WorkDuration' => 'required|string|max:255',
        ]);

        $user = auth()->user();

        $exp = Experience::findOrFail($id);
        $exp->CompanyName = $request->CompanyName;
        $exp->RoleDesignation = $request->RoleDesignation;
        $exp->Salary = $request->Salary;
        $exp->WorkDuration = $request->WorkDuration;
        $exp->user_id = $user->id;
        $exp->save();

        return redirect()->route('myexp')->with('success', 'Experience added successfully.');
    }


    public function destroy($id)
    {
        // Find the education record by ID and delete it
        $exp = Experience::findOrFail($id);
        $exp->delete();

        // Redirect back with a success message
        return redirect()->route('myexp')->with('success', 'Experience deleted successfully.');
    }

}
