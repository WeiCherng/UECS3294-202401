@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Experience</h1>

        <form action="addExperience" method="POST">
            @csrf

            <div class="form-group">
                <label for="EmpID">Employee ID</label>
                <input type="text" class="form-control" id="EmpID" name="EmpID" required>
            </div>

            <div class="form-group">
                <label for="Employer1Name">Employer 1 Name</label>
                <input type="text" class="form-control" id="Employer1Name" name="Employer1Name">
            </div>

            <div class="form-group">
                <label for="Employer1Designation">Employer 1 Designation</label>
                <input type="text" class="form-control" id="Employer1Designation" name="Employer1Designation">
            </div>

            <div class="form-group">
                <label for="Employer1CTC">Employer 1 CTC</label>
                <input type="number" step="0.01" class="form-control" id="Employer1CTC" name="Employer1CTC">
            </div>

            <div class="form-group">
                <label for="Employer1WorkDuration">Employer 1 Work Duration</label>
                <input type="text" class="form-control" id="Employer1WorkDuration" name="Employer1WorkDuration">
            </div>

            <div class="form-group">
                <label for="Employer2Name">Employer 2 Name</label>
                <input type="text" class="form-control" id="Employer2Name" name="Employer2Name">
            </div>

            <div class="form-group">
                <label for="Employer2Designation">Employer 2 Designation</label>
                <input type="text" class="form-control" id="Employer2Designation" name="Employer2Designation">
            </div>

            <div class="form-group">
                <label for="Employer2CTC">Employer 2 CTC</label>
                <input type="number" step="0.01" class="form-control" id="Employer2CTC" name="Employer2CTC">
            </div>

            <div class="form-group">
                <label for="Employer2WorkDuration">Employer 2 Work Duration</label>
                <input type="text" class="form-control" id="Employer2WorkDuration" name="Employer2WorkDuration">
            </div>

            <div class="form-group">
                <label for="Employer3Name">Employer 3 Name</label>
                <input type="text" class="form-control" id="Employer3Name" name="Employer3Name">
            </div>

            <div class="form-group">
                <label for="Employer3Designation">Employer 3 Designation</label>
                <input type="text" class="form-control" id="Employer3Designation" name="Employer3Designation">
            </div>

            <div class="form-group">
                <label for="Employer3CTC">Employer 3 CTC</label>
                <input type="number" step="0.01" class="form-control" id="Employer3CTC" name="Employer3CTC">
            </div>

            <div class="form-group">
                <label for="Employer3WorkDuration">Employer 3 Work Duration</label>
                <input type="text" class="form-control" id="Employer3WorkDuration" name="Employer3WorkDuration">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection