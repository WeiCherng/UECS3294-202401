<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use App\Models\Experience;

class AdminController extends Controller
{
    //
    function editEmpProfile(Request $req){
        $data = User::find($req->id);
        $data -> name = $req -> name;
        $data -> email = $req -> email;
        $data -> department = $req -> department;
        $data -> jobTitle = $req -> jobTitle;
        $data -> gender = $req -> gender;
        $data -> contactNo = $req -> contactNo;
        $data -> save();
        return redirect('admin');
        
    }

    function showEditEmpPro($id){
        $data = User::find($id);
        return view('admin/editempprofile', ['user'=>$data]);
    }

    function editEmpExperience(Request $req){
        $data = User::find($req->id)->experiences;
        $data -> Employer1Name = $req -> Employer1Name;
        $data -> Employer1Designation = $req -> Employer1Designation;
        $data -> Employer1CTC = $req -> Employer1CTC;
        $data -> Employer1Duration = $req -> Employer1Duration;
        $data -> Employer2Name = $req -> Employer2Name;
        $data -> Employer2Designation = $req -> Employer2Designation;
        $data -> Employer2CTC = $req -> Employer2CTC;
        $data -> Employer2Duration = $req -> Employer2Duration;
        $data -> Employer3Name = $req -> Employer3Name;
        $data -> Employer3Designation = $req -> Employer3Designation;
        $data -> Employer3CTC = $req -> Employer3CTC;
        $data -> Employer3Duration = $req -> Employer3Duration;
        $data -> save();
        return redirect('admin');
    }

    function showEditEmpExp($id){
        $data = User::find($id)->experiences;
        return view('admin/editempexp', ['data'=>$data]);
    }

    function editEmpEducation(Request $req, $id) {
        // Validate incoming request data
        $education = User::findOrFail($id)->education;
        $validatedData = $req->validate([
            'CourseProgram' => 'required|string|max:255',
            'University' => 'nullable|string|max:255',
            'YearGraduate' => 'nullable|string|max:4',
            'Cgpa' => 'nullable|numeric|min:0|max:4',
            'Achievements' => 'nullable|string|max:500',
        ]);

        // Find the education record by ID and update it
        // $user = auth()->user();
        $education->CourseProgram = $req->CourseProgram;
        $education->University = $req->University;
        $education->YearGraduate = $req->YearGraduate;
        $education->Cgpa = $req->Cgpa;
        $education->Achievements = $req->Achievements;
        $education->user_id = $id->id;
        $education->save();

        // Redirect back with a success message
        return redirect()->route('allemployees')->with('success', 'Education updated successfully.');
    }

    function showEditEmpEdu($id){

        $education = Education::where('user_id', $id)->get();

        return view('admin.editempeducation', [
            'data' => $education,
            'employee_id' => $id,
        ]);
    }

    function loadAllEmp() {
        $data = User::paginate(10);
        return view('admin.allemployees',['users' =>$data]);
        // return User::all();
    }
}
