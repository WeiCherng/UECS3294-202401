<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use App\Models\Experience;

class AdminController extends Controller
{
    //
    function editEmpProfile(Request $req)
    {
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->department = $req->department;
        $data->jobTitle = $req->jobTitle;
        $data->gender = $req->gender;
        $data->contactNo = $req->contactNo;
        $data->save();
        return redirect('admin');

    }

    function showEditEmpPro($id)
    {
        $data = User::find($id);
        return view('admin/editempprofile', ['user' => $data]);
    }

    function editEmpExperience(Request $req, $id)
    {
        $validatedData = $req->validate([
            'CompanyName' => 'required|string|max:255',
            'RoleDesignation' => 'required|string|max:255',
            'Salary' => 'required|numeric|min:0',
            'WorkDuration' => 'required|string|max:255',
        ]);

        $user = auth()->user();

        $exp = Experience::findOrFail($id);

        $exp->CompanyName = $req->CompanyName;
        $exp->RoleDesignation = $req->RoleDesignation;
        $exp->Salary = $req->Salary;
        $exp->WorkDuration = $req->WorkDuration;
        $exp->save();
        return redirect()->route('allemp')->with('success', 'Experience updated successfully.');

    }

    function showEditEmpExp($id)
    {
        $expRecords = Experience::where('user_id', $id)->get();

        if ($expRecords->isEmpty()) {
            return back()->with('error', 'No education records found for the given employee.');
        }
        return view('admin.editempeducation', [
            'data' => $expRecords->first(),
            'employee_id' => $id,
        ]);
    }

    function editEmpEducation(Request $req, $id)
    {
        $validatedData = $req->validate([
            'CourseProgram' => 'required|string|max:255',
            'University' => 'nullable|string|max:255',
            'YearGraduate' => 'nullable|string|max:4',
            'Cgpa' => 'nullable|numeric|min:0|max:4',
            'Achievements' => 'nullable|string|max:500',
        ]);

        $education = Education::findOrFail($id);

        $education->CourseProgram = $req->CourseProgram;
        $education->University = $req->University;
        $education->YearGraduate = $req->YearGraduate;
        $education->Cgpa = $req->Cgpa;
        $education->Achievements = $req->Achievements;
        $education->save();

        return redirect()->route('allemp')->with('success', 'Education updated successfully.');
    }

    function showEditEmpEdu($id)
    {
        $educationRecords = Education::where('user_id', $id)->get();

        if ($educationRecords->isEmpty()) {
            return back()->with('error', 'No education records found for the given employee.');
        }
        return view('admin.editempeducation', [
            'data' => $educationRecords->first(),
            'employee_id' => $id,
        ]);
    }

    function loadAllEmp()
    {
        $data = User::paginate(10);
        return view('admin.allemployees', ['users' => $data]);
        // return User::all();
    }
}
