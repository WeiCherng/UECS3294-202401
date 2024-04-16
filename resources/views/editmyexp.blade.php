<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit My Expirence</title>

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
                        <h2>Edit Experience</h2>

                        <form action="{{ route('updateExperience', $experience->id) }}" method="POST">
                            @csrf

                            <div class="form-group mt-2">
                                <label for="CompanyName">Company Name</label>
                                <input type="text" class="form-control @error('CompanyName') is-invalid @enderror"
                                    id="CompanyName" name="CompanyName"
                                    value="{{ old('CompanyName', $experience->CompanyName) }}" required>
                                @error('CompanyName')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label for="RoleDesignation">Role/Designation</label>
                                <input type="text"
                                    class="form-control @error('RoleDesignation') is-invalid @enderror"
                                    id="RoleDesignation" name="RoleDesignation"
                                    value="{{ old('RoleDesignation', $experience->RoleDesignation) }}" required>
                                @error('RoleDesignation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label for="Salary">Salary</label>
                                <input type="number" step="0.01"
                                    class="form-control @error('Salary') is-invalid @enderror" id="Salary"
                                    name="Salary" value="{{ old('Salary', $experience->Salary) }}" required>
                                @error('Salary')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label for="WorkDuration">Work Duration</label>
                                <input type="text" class="form-control @error('WorkDuration') is-invalid @enderror"
                                    id="WorkDuration" name="WorkDuration"
                                    value="{{ old('WorkDuration', $experience->WorkDuration) }}" required>
                                @error('WorkDuration')
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
