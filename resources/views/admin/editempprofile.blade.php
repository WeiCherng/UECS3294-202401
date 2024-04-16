<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Employee Profile</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  @include('admin.layouts.sidebar')
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
          <h1 class="h3 mb-4 text-gray-800">Edit Employee Profile</h1>



<form class="user" method="POST" action="">
  @csrf
  @if(isset($user['id']))
               <div class="row">
               <input type="hidden" name="id" value="{{$user['id']}}">
                <div class="col-4 mb-3">Employee Name</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="name" name="name" aria-describedby="emailHelp" value="{{$user['name']}}"></div>
                    </div>  
                
                    <div class="row">
                    <div class="col-4 mb-3">Employee Email </div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" value="{{$user['email']}}"></div>
                    </div>

                    <div class="row">
                      <div class="col-4 mb-3">Employee Department</div>
                     <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="department" name="department" aria-describedby="emailHelp" value="{{$user['department']}}">
                    </div></div>

                    <div class="row">
                    <div class="col-4 mb-3">Job Title</div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="jobTitle" name="jobTitle" aria-describedby="emailHelp" value="{{$user['jobTitle']}}">
                    </div></div>

                    <div class="row">
                    <div class="col-4 mb-3">ContactNo</div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="contactNo" name="contactNo" aria-describedby="emailHelp" value="{{$user['contactNo']}}">
                    </div></div>

                    <div class="row">
                    <div class="col-4 mb-3">Gender</div>
                    <div class="col-4 mb-3">  
                      @if($user['gender']=='Male')
                      <input type="radio" id="gender" name="gender" value="Male" checked="true">Male
                      <input type="radio" name="gender" value="Female">Female
                 @else
 <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" name="gender" value="Female" checked="true">Female
                 @endif
                    </div></div>

                    <div class="row" style="margin-top:4%">
                      <div class="col-4"></div>
                      <div class="col-4">
                      <input type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                    </div>
                    </div>
                    @else
    <td>N/A</td>
@endif
                  </form>





        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
   @include('admin.layouts.footer')
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
    $(".jDate").datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
}).datepicker("update", "10/10/2016"); 
  </script>

</body>

</html>