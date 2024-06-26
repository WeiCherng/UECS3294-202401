<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit My Education</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.app')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="container">
                        <h2>Edit Education</h2>

                        <form action="{{ route('editmyeducation', $education->id) }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="form-group mt-2">
                                <label for="CourseProgram">Course Program</label>
                                <input type="text" class="form-control @error('CourseProgram') is-invalid @enderror"
                                    id="CourseProgram" name="CourseProgram"
                                    value="{{ old('CourseProgram', $education->CourseProgram) }}" required>
                                @error('CourseProgram')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label for="University">University Graduated</label>
                                <input type="text" class="form-control @error('University') is-invalid @enderror"
                                    id="University" name="University"
                                    value="{{ old('University', $education->University) }}">
                                @error('University')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label for="YearGraduate">Year Graduated</label>
                                <input type="text" class="form-control @error('YearGraduate') is-invalid @enderror"
                                    id="YearGraduate" name="YearGraduate"
                                    value="{{ old('YearGraduate', $education->YearGraduate) }}">
                                @error('YearGraduate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label for="Cgpa">Results (CGPA)</label>
                                <input type="number" step="0.01"
                                    class="form-control @error('Cgpa') is-invalid @enderror" id="Cgpa"
                                    name="Cgpa" value="{{ old('Cgpa', $education->Cgpa) }}">
                                @error('Cgpa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label for="Achievements">Achievements</label>
                                <input type="text" class="form-control @error('Achievements') is-invalid @enderror"
                                    id="Achievements" name="Achievements"
                                    value="{{ old('Achievements', $education->Achievements) }}">
                                @error('Achievements')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
                        </form>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.footer')

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
        $(".jDate").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        }).datepicker("update", "10/10/2016");
    </script>

</body>

</html>
