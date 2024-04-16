<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Experience</title>
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
                    <h1 class="h3 mb-0 text-gray-800">Add Experience</h1>
                </div>
    
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
        </div>
    </div>

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

