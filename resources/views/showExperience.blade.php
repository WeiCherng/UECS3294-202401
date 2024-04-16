<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Experience Details</title>

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
                    <h1 class="h3 mb-0 text-gray-800">Experience Details</h1>
                </div>
    
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

