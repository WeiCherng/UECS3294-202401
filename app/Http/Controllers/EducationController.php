<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function displayEducation(Request $request)
    {

        // Retrieve the current user
        $user = auth()->user();

        // Retrieve the education records of the current user
        $educationRecords = $user->education;

        // Pass the education records to the view
        return view('myeducation', ['educationRecords' => $educationRecords]);
    }

    public function addEducation(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'CourseProgram' => 'required|string|max:255',
            'University' => 'nullable|string|max:255',
            'YearGraduate' => 'nullable|string|max:4',
            'Cgpa' => 'nullable|numeric|min:0|max:4',
            'Achievements' => 'nullable|string|max:500',
        ]);

        // Create a new education record using the validated data
        $user = auth()->user();
        $education = new Education;
        $education->CourseProgram = $request->CourseProgram;
        $education->University = $request->University;
        $education->YearGraduate = $request->YearGraduate;
        $education->Cgpa = $request->Cgpa;
        $education->Achievements = $request->Achievements;
        $education->user_id = $user->id;
        $education->save();

        return redirect()->route('myeducation')->with('success', 'Education added successfully.');
    }

    public function viewEditEducation($id)
    {
        // Find the education record by ID
        $education = Education::findOrFail($id);

        // Return the edit view with the education record
        return view('/editmyeducation', ['education' => $education]);
    }

    public function updateEducation(Request $request, $id)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'CourseProgram' => 'required|string|max:255',
            'University' => 'nullable|string|max:255',
            'YearGraduate' => 'nullable|string|max:4',
            'Cgpa' => 'nullable|numeric|min:0|max:4',
            'Achievements' => 'nullable|string|max:500',
        ]);

        // Find the education record by ID and update it
        $education = Education::findOrFail($id);
        $user = auth()->user();
        $education->CourseProgram = $request->CourseProgram;
        $education->University = $request->University;
        $education->YearGraduate = $request->YearGraduate;
        $education->Cgpa = $request->Cgpa;
        $education->Achievements = $request->Achievements;
        $education->user_id = $user->id;
        $education->save();

        // Redirect back with a success message
        return redirect()->route('myeducation')->with('success', 'Education updated successfully.');
    }

    public function destroy($id)
    {
        // Find the education record by ID and delete it
        $education = Education::findOrFail($id);
        $education->delete();

        // Redirect back with a success message
        return redirect()->route('myeducation')->with('success', 'Education deleted successfully.');
    }
}
