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


        <div id="content-wrapper" class="d-flex flex-column">
            {{-- content --}}
            <div id='content'>

                {{-- topbar --}}
                @include('layouts.app')
                {{-- end of topbar --}}

                {{-- begin page content --}}
                <div class="container">
                    <h2>Add Experience</h2>

                    <form action="addExperience" method="POST">
                        @csrf

                        <div class="form-group mt-2">
                            <label for="CompanyName">Company Name</label>
                            <input type="text" class="form-control @error('CompanyName') is-invalid @enderror"
                                id="CompanyName" name="CompanyName" value="{{ old('CompanyName') }}" required>
                            @error('CompanyName')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="RoleDesignation">Role/Designation</label>
                            <input type="text" class="form-control @error('RoleDesignation') is-invalid @enderror"
                                id="RoleDesignation" name="RoleDesignation" value="{{ old('RoleDesignation') }}"
                                required>
                            @error('RoleDesignation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="Salary">Salary</label>
                            <input type="number" step="0.01"
                                class="form-control @error('Salary') is-invalid @enderror" id="Salary" name="Salary"
                                value="{{ old('Salary') }}" required>
                            @error('Salary')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="WorkDuration">Work Duration</label>
                            <input type="text" class="form-control @error('WorkDuration') is-invalid @enderror"
                                id="WorkDuration" name="WorkDuration" value="{{ old('WorkDuration') }}" required>
                            @error('WorkDuration')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Add Experience</button>
                    </form>
                </div>
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
