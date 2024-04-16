<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Education;
use App\Models\Experience;

class AdminController extends Controller
{
    //
    function editEmpProfile(Request $req){
        $data = Employee::find($req->id);
        $data -> EmpFname = $req -> EmpFname;
        $data -> EmpLName = $req -> EmpLName;
        $data -> EmpCode = $req -> EmpCode;
        $data -> EmpDept = $req -> EmpDept;
        $data -> EmpDesignation = $req -> EmpDesignation;
        $data -> EmpContactNo = $req -> EmpContactNo;
        $data -> EmpEmail = $req -> EmpEmail;
        $data -> EmpJoingdate = $req -> EmpJoingdate;
        $data -> EmpGender = $req -> EmpGender;
        $data -> save();
        return redirect('admin');
        
    }

    function showEditEmpPro($id){
        $data = Employee::find($id);
        return view('admin/editempprofile', ['data'=>$data]);
    }

    function editEmpExperience(Request $req){
        $data = Employee::find($req->id)->getExperience;
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
        $data = Employee::find($id)->getExperience;
        return view('admin/editempexp', ['data'=>$data]);
    }

    function editEmpEducation(Request $req) {
        $data = Employee::find($req->id)->education;
        $data -> CoursePG = $req -> CoursePG;
        $data -> SchoolCollegePG = $req -> SchoolCollegePG;
        $data -> YearPassingPG = $req -> YearPassingPG;
        $data -> PercentagePG = $req -> PercentagePG;
        $data -> CourseGra = $req -> CourseGra;
        $data -> SchoolCollegeGra = $req -> SchoolCollegeGra;
        $data -> YearPassingGra = $req -> YearPassingGra;
        $data -> PercentageGra = $req -> PercentageGra;
        $data -> CourseSSC = $req -> CourseSSC;
        $data -> SchoolCollegeSSC = $req -> SchoolCollegeSSC;
        $data -> YearPassingSSC = $req -> YearPassingSSC;
        $data -> PercentageSSC = $req -> PercentageSSC;
        $data -> CourseHSC = $req -> CourseHSC;
        $data -> SchoolCollegeHSC = $req -> SchoolCollegeHSC;
        $data -> PercentageHSC = $req -> PercentageHSC;
        $data -> save();
        return redirect('admin');
    }

    function showEditEmpEdu($id){
        $data = Employee::find($id)->education;
        return view('admin.editempeducation', ['data' => $data]);
    }

    function loadAllEmp() {
        $data = Employee::paginate(10);
        return view('admin.allemployees',['employeedetail' =>$data]);
        // return User::all();
    }
}
