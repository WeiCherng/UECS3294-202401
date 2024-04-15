@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Experience Details</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Employee ID:</strong> {{ $experience->EmpID }}</p>

                <p><strong>Employer 1 Name:</strong> {{ $experience->Employer1Name }}</p>
                <p><strong>Employer 1 Designation:</strong> {{ $experience->Employer1Designation }}</p>
                <p><strong>Employer 1 CTC:</strong> {{ $experience->Employer1CTC }}</p>
                <p><strong>Employer 1 Work Duration:</strong> {{ $experience->Employer1WorkDuration }}</p>

                <p><strong>Employer 2 Name:</strong> {{ $experience->Employer2Name }}</p>
                <p><strong>Employer 2 Designation:</strong> {{ $experience->Employer2Designation }}</p>
                <p><strong>Employer 2 CTC:</strong> {{ $experience->Employer2CTC }}</p>
                <p><strong>Employer 2 Work Duration:</strong> {{ $experience->Employer2WorkDuration }}</p>

                <p><strong>Employer 3 Name:</strong> {{ $experience->Employer3Name }}</p>
                <p><strong>Employer 3 Designation:</strong> {{ $experience->Employer3Designation }}</p>
                <p><strong>Employer 3 CTC:</strong> {{ $experience->Employer3CTC }}</p>
                <p><strong>Employer 3 Work Duration:</strong> {{ $experience->Employer3WorkDuration }}</p>
            </div>
        </div>
       
    </div>
@endsection