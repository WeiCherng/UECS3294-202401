<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    function editEmpProfile(Request $req){

    }

    function showEditEmpPro($id){
        $data = User::find($id);
        return view('editempprofile', ['data'=>$data]);
    }

    function editEmpExperience(Request $req){
        $data = User::find($req->id);
        $data -> CoursePG = $req -> CoursePG;
    }

    function showEditEmpExp($id){
        $data = User::find($id);
        return view('editempexp', ['data'=>$data]);
    }

    function editEmpEducation(Request $req) {
        $data = User::find($req->id);
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
        return redirect('allemployees');
    }

    function showEditEmpEdu($id){
        $data = User::find($id);
        return view('editempeducation', ['data'=>$data]);
    }

    function loadAllEmp() {
        $data = User::paginate(10);
        return view('allemployees',['employeedetail' =>$data]);
        // return User::all();
    }
}
