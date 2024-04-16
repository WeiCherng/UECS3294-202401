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

    }

    function showEditEmpPro($id){
        $data = Employee::find($id);
        return view('admin/editempprofile', ['employee'=>$data]);
    }

    function editEmpExperience(Request $req){
        $data = Experience::find($req->id);
        $data -> CoursePG = $req -> CoursePG;
    }

    function showEditEmpExp($id){
        $data = Experience::find($id);
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
        return redirect('admin/allemployees');
    }

    function showEditEmpEdu($id){
        $data = Employee::find($id)->education;
        return view('admin/editempeducation', ['data'=>$data]);
    }

    function loadAllEmp() {
        $data = Employee::paginate(10);
        return view('admin/allemployees',['employeedetail' =>$data]);
        // return User::all();
    }
}
