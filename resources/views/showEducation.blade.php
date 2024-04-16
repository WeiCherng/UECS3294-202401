<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Education Details</title>
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
                    <h1 class="h3 mb-0 text-gray-800">Education Details</h1>
                </div>
    
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

