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

        <div id="content-wrapper" class="d-flex flex-column">

            {{-- content --}}
            <div id='content'>

                {{-- topbar --}}
                @include('layouts.app')
                {{-- end of topbar --}}

                {{-- begin page content --}}
                <div class="container">
                    {{-- page heading --}}
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Your Education</h1>
                    </div>

                    <form action="addEducation" method="POST">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="CourseProgram">Course Program</label>
                            <input type="text" class="form-control @error('CourseProgram') is-invalid @enderror"
                                id="CourseProgram" name="CourseProgram" value="{{ old('CourseProgram') }}" required>
                            @error('CourseProgram')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="University">University Graduated</label>
                            <input type="text" class="form-control @error('University') is-invalid @enderror"
                                id="University" name="University" value="{{ old('University') }}" required>
                            @error('University')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="YearGraduate">Year Graduated</label>
                            <input type="text" class="form-control @error('YearGraduate') is-invalid @enderror"
                                id="YearGraduate" name="YearGraduate" value="{{ old('YearGraduate') }}" required>
                            @error('YearGraduate')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="Cgpa">Results (CGPA)</label>
                            <input type="number" step="0.01"
                                class="form-control @error('Cgpa') is-invalid @enderror" id="Cgpa" name="Cgpa"
                                value="{{ old('Cgpa') }}" required>
                            @error('Cgpa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="Achievements">Achievement</label>
                            <input type="text" class="form-control @error('Achievements') is-invalid @enderror"
                                id="Achievements" name="Achievements" value="{{ old('Achievements') }}" required>
                            @error('Achievements')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary mt-3">Add Education</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    {{-- end of main content --}}
    {{-- footer --}}
    @extends('layouts.footer')
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
