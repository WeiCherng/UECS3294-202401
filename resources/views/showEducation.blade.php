@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Education Details</h1>

        @if($education)
            <div class="card">
                <div class="card-body">
                    <p><strong>Employee ID:</strong> {{ $education->EmpID }}</p>

                    <p><strong>PG Course:</strong> {{ $education->CoursePG }}</p>
                    <p><strong>PG School/College:</strong> {{ $education->SchoolCollegePG }}</p>
                    <p><strong>PG Year of Passing:</strong> {{ $education->YearPassingPG }}</p>
                    <p><strong>PG Percentage:</strong> {{ $education->PercentagePG }}</p>

                    <p><strong>Gra Course:</strong> {{ $education->CourseGra }}</p>
                    <p><strong>Gra School/College:</strong> {{ $education->SchoolCollegeGra }}</p>
                    <p><strong>Gra Year of Passing:</strong> {{ $education->YearPassingGra }}</p>
                    <p><strong>Gra Percentage:</strong> {{ $education->PercentageGra }}</p>

                    <p><strong>SSC Course:</strong> {{ $education->CourseSSC }}</p>
                    <p><strong>SSC School/College:</strong> {{ $education->SchoolCollegeSSC }}</p>
                    <p><strong>SSC Year of Passing:</strong> {{ $education->YearPassingSSC }}</p>
                    <p><strong>SSC Percentage:</strong> {{ $education->PercentageSSC }}</p>

                    <p><strong>HSC Course:</strong> {{ $education->CourseHSC }}</p>
                    <p><strong>HSC School/College:</strong> {{ $education->SchoolCollegeHSC }}</p>
                    <p><strong>HSC Year of Passing:</strong> {{ $education->YearPassingHSC }}</p>
                    <p><strong>HSC Percentage:</strong> {{ $education->PercentageHSC }}</p>

                </div>
            </div>
        @else
            <p>No education found.</p>
        @endif
    </div>
@endsection