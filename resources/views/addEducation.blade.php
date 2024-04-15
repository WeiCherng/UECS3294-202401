@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Education</h1>

        <form action="addEducation" method="POST">
            @csrf

            <div class="form-group">
                <label for="EmpID">Employee ID</label>
                <input type="text" class="form-control" id="EmpID" name="EmpID" required>
            </div>

            <div class="form-group">
                <label for="CoursePG">PG Course</label>
                <input type="text" class="form-control" id="CoursePG" name="CoursePG">
            </div>

            <div class="form-group">
                <label for="SchoolCollegePG">PG School College</label>
                <input type="text" class="form-control" id="SchoolCollegePG" name="SchoolCollegePG">
            </div>

            <div class="form-group">
                <label for="YearPassingPG">PG Year Passing</label>
                <input type="text" class="form-control" id="YearPassingPG" name="YearPassingPG">
            </div>

            <div class="form-group">
                <label for="PercentagePG">PG Percentage</label>
                <input type="text" class="form-control" id="PercentagePG" name="PercentagePG">
            </div>

            <div class="form-group">
                <label for="CourseGra">Gra Course</label>
                <input type="text" class="form-control" id="CourseGra" name="CourseGra">
            </div>

            <div class="form-group">
                <label for="SchoolCollegeGra">Gra School College</label>
                <input type="text" class="form-control" id="SchoolCollegeGra" name="SchoolCollegeGra">
            </div>

            <div class="form-group">
                <label for="YearPassingGra">Gra Year Passing</label>
                <input type="text" class="form-control" id="YearPassingGra" name="YearPassingGra">
            </div>

            <div class="form-group">
                <label for="PercentageGra">Gra Percentage</label>
                <input type="text" class="form-control" id="PercentageGra" name="PercentageGra">
            </div>
            
            <div class="form-group">
                <label for="CourseSSC">SSC Course</label>
                <input type="text" class="form-control" id="CourseSSC" name="CourseSSC">
            </div>

            <div class="form-group">
                <label for="SchoolCollegeSSC">SSC School College</label>
                <input type="text" class="form-control" id="SchoolCollegeSSC" name="SchoolCollegeSSC">
            </div>

            <div class="form-group">
                <label for="YearPassingSSC">SSC Year Passing</label>
                <input type="text" class="form-control" id="YearPassingSSC" name="YearPassingSSC">
            </div>

            <div class="form-group">
                <label for="PercentageSSC">SSC Percentage</label>
                <input type="text" class="form-control" id="PercentageSSC" name="PercentageSSC">
            </div>
            
            <div class="form-group">
                <label for="CourseHSC">HSC Course</label>
                <input type="text" class="form-control" id="CourseHSC" name="CourseHSC">
            </div>

            <div class="form-group">
                <label for="SchoolCollegeHSC">HSC School College</label>
                <input type="text" class="form-control" id="SchoolCollegeHSC" name="SchoolCollegeHSC">
            </div>

            <div class="form-group">
                <label for="YearPassingHSC">HSC Year Passing</label>
                <input type="text" class="form-control" id="YearPassingHSC" name="YearPassingHSC">
            </div>

            <div class="form-group">
                <label for="PercentageHSC">HSC Percentage</label>
                <input type="text" class="form-control" id="PercentageHSC" name="PercentageHSC">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection