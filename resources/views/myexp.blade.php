<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Experience</title>

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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">My Expirence</h1>

                    {{-- <p style="font-size:16px; color:red" align="center"> <?php if ($msg) {
                        echo $msg;
                    } ?> </p> --}}

                    <p style="font-size:16px; color:red" align="center">Your Experience details already added. Now you
                        can only edit the record. </p>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <tr>
                            <th>First Employer Name</th>
                            {{-- <td><?php echo $row['Employer1Name']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>First Employer Designation</th>
                            {{-- <td><?php echo $row['Employer1Designation']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>First Employer CTC</th>
                            {{-- <td><?php echo $row['Employer1CTC']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>First Employer Work Duration</th>
                            {{-- <td><?php echo $row['Employer1WorkDuration']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>Second Employer Name</th>
                            {{-- <td><?php echo $row['Employer2Name']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>Second Employer Designation</th>
                            {{-- <td><?php echo $row['Employer2Designation']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>Second Employer CTC</th>
                            {{-- <td><?php echo $row['Employer2CTC']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>Second Employer Work Duration</th>
                            {{-- <td><?php echo $row['Employer2WorkDuration']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>Third Employer Name</th>
                            {{-- <td><?php echo $row['Employer3Name']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>Third Employer Designation</th>
                            {{-- <td><?php echo $row['Employer3Designation']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>Third Employer CTC</th>
                            {{-- <td><?php echo $row['Employer3CTC']; ?></td> --}}
                        </tr>
                        <tr>
                            <th>Third Employer Work Duration</th>
                            {{-- <td><?php echo $row['Employer3WorkDuration']; ?></td> --}}
                        </tr>

                    </table>

                    <form class="user" method="post" action="">

                        <div class="row">
                            <div class="col-4 mb-3">Employer1 Name</div>
                            <div class="col-8 mb-3"> <input type="text" class="form-control form-control-user"
                                    id="emp1name" name="emp1name" aria-describedby="emailHelp" value=""></div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-3">Employer1 Designation </div>
                            <div class="col-8 mb-3"> <input type="text" class="form-control form-control-user"
                                    id="emp1des" name="emp1des" aria-describedby="emailHelp" value=""></div>
                        </div>



                        <div class="row">
                            <div class="col-4 mb-3">Employer1 CTC </div>
                            <div class="col-8 mb-3">
                                <input type="text" class="form-control form-control-user" id="emp1ctc"
                                    name="emp1ctc" aria-describedby="emailHelp" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 mb-3">Employer1 WorkDuration</div>
                            <div class="col-8 mb-3">
                                <input type="text" class="form-control form-control-user" id="emp1workduration"
                                    name="emp1workduration" aria-describedby="emailHelp" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-3">Employer2 Name</div>
                            <div class="col-8 mb-3"> <input type="text" class="form-control form-control-user"
                                    id="emp2name" name="emp2name" aria-describedby="emailHelp" value=""></div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-3">Employer2 Designation </div>
                            <div class="col-8 mb-3"> <input type="text" class="form-control form-control-user"
                                    id="emp2des" name="emp2des" aria-describedby="emailHelp" value=""></div>
                        </div>



                        <div class="row">
                            <div class="col-4 mb-3">Employer2 CTC </div>
                            <div class="col-8 mb-3">
                                <input type="text" class="form-control form-control-user" id="emp2ctc"
                                    name="emp2ctc" aria-describedby="emailHelp" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 mb-3">Employer2 WorkDuration</div>
                            <div class="col-8 mb-3">
                                <input type="text" class="form-control form-control-user" id="emp2workduration"
                                    name="emp2workduration" aria-describedby="emailHelp" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-3">Employer3 Name</div>
                            <div class="col-8 mb-3"> <input type="text" class="form-control form-control-user"
                                    id="emp3name" name="emp3name" aria-describedby="emailHelp" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-3">Employer3 Designation </div>
                            <div class="col-8 mb-3"> <input type="text" class="form-control form-control-user"
                                    id="emp3des" name="emp3des" aria-describedby="emailHelp" value=""></div>
                        </div>



                        <div class="row">
                            <div class="col-4 mb-3">Employer3 CTC </div>
                            <div class="col-8 mb-3">
                                <input type="text" class="form-control form-control-user" id="emp3ctc"
                                    name="emp3ctc" aria-describedby="emailHelp" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 mb-3">Employer3 WorkDuration</div>
                            <div class="col-8 mb-3">
                                <input type="text" class="form-control form-control-user" id="emp3workduration"
                                    name="emp3workduration" aria-describedby="emailHelp" value="">
                            </div>
                        </div>

                        <div class="row" style="margin-top:4%">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <input type="submit" name="submit" value="submit"
                                    class="btn btn-primary btn-user btn-block">
                            </div>
                        </div>

                    </form>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
