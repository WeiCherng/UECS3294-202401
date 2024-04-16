<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Education</title>
    {{-- CSS files or links --}}
     <!-- Custom fonts for this template-->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
 
     <!-- Custom styles for this template-->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
    
    {{-- page wrapper --}}
    <div id='wrapper'>

        {{-- sidebar --}}
        @include('layouts.sidebar')
        {{-- end of sidebar --}}

        {{-- content --}}
        <div id='content'>

            {{-- topbar --}}
            @include('layouts.app')
            {{-- end of topbar --}}

            {{-- begin page content --}}
            <div class="container">
                {{-- page heading --}}
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Add Education</h1>
                </div>
    
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
        </div>
    </div>
    {{-- end of main content --}}

    {{-- footer --}}
    @extends('layouts.app')
    {{-- end of footer --}}

    {{-- any javascript files --}}
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
 
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
 
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    
   
        
    
</body>
</html>

