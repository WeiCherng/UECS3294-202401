<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to ERMS</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Employee Record Management System</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4"></div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-3">
                                                Welcome Back to ERMS !</div>
                                            <div class="container">
                                                <div class="row">

                                                    <!-- Employee General Information -->
                                                    <div class="col-6">

                                                        <div class="card mb-3">
                                                            <div class="card-header">
                                                                <h5>General Information</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <p><strong>Name:</strong> {{ $user->name }}</p>
                                                                <p><strong>Email:</strong> {{ $user->email }}</p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-6">

                                                        <!-- Tasks Section -->
                                                        <div class="card mb-3">
                                                            <div class="card-header">
                                                                <h5>Tasks</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                @if ($tasks->isEmpty())
                                                                    <p>No tasks assigned.</p>
                                                                @else
                                                                    <ul>
                                                                        @foreach ($tasks as $task)
                                                                            <li>{{ $task->title }} 
                                                                                @if ($task->status === 'pending')
                                                                                <span class="badge bg-warning text-dark">Pending</span>
                                                                            @elseif ($task->status === 'in progress')
                                                                                <span class="badge bg-primary">In Progress</span>
                                                                            @elseif ($task->status === 'completed')
                                                                                <span class="badge bg-success">Completed</span>
                                                                            @endif
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">

                                                    <div class="col-6">

                                                        <!-- Education Section -->
                                                        <div class="card mb-3">
                                                            <div class="card-header">
                                                                <h5>Education</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                @if ($education->isEmpty())
                                                                    <p>No education records.</p>
                                                                @else
                                                                    <ul>
                                                                        @foreach ($education as $edu)
                                                                            <li>{{ $edu->CourseProgram }} - University:
                                                                                {{ $edu->University }} - Year:
                                                                                {{ $edu->YearGraduate }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <!-- Experience Section -->
                                                    <div class="col-6">

                                                        <div class="card mb-3">
                                                            <div class="card-header">
                                                                <h5>Experience</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                @if ($experience->isEmpty())
                                                                    <p>No experience records.</p>
                                                                @else
                                                                    <ul>
                                                                        @foreach ($experience as $exp)
                                                                            <li>{{ $exp->CompanyName }} - Role:
                                                                                {{ $exp->RoleDesignation }} - Duration:
                                                                                {{ $exp->WorkDuration }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fname . ' ' . $lname; ?> --}}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Row -->
            </div>



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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

</html>
