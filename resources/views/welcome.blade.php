
<!DOCTYPE html>
<html>
<head>
<!-- FORM CSS CODE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Workflows Management</title>
  <link rel='shortcut icon' href='http://ahmedprojectsv2.great-site.net/uploads/logos/default.png' />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/bootstrap/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Color Picker  -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/dist/css/color-picker.css">


  <!-- Select2 -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/select2/select2.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/DataTables-1.10.18/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/DataTables-1.10.18/extensions/FixedHeader-3.1.4/css/fixedHeader.dataTables.min.css">
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/DataTables-1.10.18/extensions/FixedHeader-3.1.4/css/fixedHeader.bootstrap.min.css">
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/DataTables-1.10.18/extensions/Responsive-2.2.2/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/DataTables-1.10.18/extensions/Responsive-2.2.2/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/DataTables-1.10.18/extensions/Buttons-1.5.4/css/buttons.bootstrap.min.css">

  <!-- include summernote css/js -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/css/summernote.min.css">

  <!-- Full Calendar . -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" /> -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/css/summernote.min.css">

  <!-- Arabic RTL  -->





  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/dist/css/skins/_all-skins.min.css">
 <!--Toastr notification -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/toastr/toastr.css">
  <!--Toastr notification end-->
  <!-- iCheck -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/iCheck/square/orange.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--Custom Css File-->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/dist/css/custom.css">


  <!-- Full Calendar . -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" /> -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/css/fullcalendar.css" />


  <!-- Pace Loader -->
  <link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/pace/pace.min.css">
    <!-- Theme color finder -->
  <script type="text/javascript">
    var sidebar_collapse = (typeof (Storage) !== "undefined") ? localStorage.getItem('collapse') : 'skin-blue';
  </script>
  <!-- jQuery 2.2.3 -->
  <!-- <script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
  <script src="http://ahmedprojectsv2.great-site.net/js/jquery-3.2.1.min.js"></script>
  <!-- </copy> -->
<!-- jvectormap -->
<link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="http://ahmedprojectsv2.great-site.net/css/mediaQuery.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Change the theme color if it is set -->
   <script type="text/javascript">
    if(sidebar_collapse=='true'){
      $("body").addClass('sidebar-collapse');
    }
  </script>
  <!-- end -->

  <!-- Start Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
      <span class="logo-mini"><b>T</b></span>
      <span class="logo-lg"><b>Workflows Management</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
          <!-- <li class="text-center hidden-xs" id="">
            <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search Sales Invoice">
            </div>
          </form>
          </li> -->
          <!-- User Account Menu -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" title="App Language" data-toggle='tooltip'>
              <i class="fa fa-globe fa-lg"></i> &nbsp;
              Language
            </a>
            <ul class="dropdown-menu" style="width: auto;height: auto;">
              <li>
                <ul class="menu languages">
                                            <li>
                            <a rel="alternate" hreflang="en" href="{{ route('home') }}">
                                English
                            </a>
                        </li>
                                            <li>
                            <a rel="alternate" hreflang="ar" href="{{ route('home') }}">
                                ខ្មែរ
                            </a>
                        </li>

                </ul>
              </li>

            </ul>
          </li>


          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://ahmedprojectsv2.great-site.net/uploads/admins/93RDi9pgBkeAAS8vnopPBnE6VKNNgpCFpwOyo8oM.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Test Account</span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://ahmedprojectsv2.great-site.net/uploads/admins/93RDi9pgBkeAAS8vnopPBnE6VKNNgpCFpwOyo8oM.png" class="img-circle" alt="User Image">
                <p>
                 Test Account <small>Year 2022</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                      <a href="{{ route('home') }}" style="margin-bottom:10px" class="btn btn-default btn-block "> <i class="fa fa-user fa-fw"></i> Profile</a>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="">
                      <form action="http://ahmedprojectsv2.great-site.net/en/admin/logout" method="POST">
                          <input type="hidden" name="_token" value="WKbwiDc14V2dXMrcc2Y2Sw1JIV74pxQrQY3HEOb9">
                          <button type="submit" style="cursor:pointer" class="btn btn-default btn-block confirm_logout"><i class="fa fa-power-off fa-fw"></i> Logout</button>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left">
          <img src="http://ahmedprojectsv2.great-site.net/uploads/admins/93RDi9pgBkeAAS8vnopPBnE6VKNNgpCFpwOyo8oM.png" style="width:40px;height:40px;border-radius:50%" class="" alt="User Image">
        </div>
        <div class="pull-left info" style="margin-top:10px">
          <p> Test Account</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <!--<li class="header">MAIN NAVIGATION</li>-->
        <li class="active">
            <a href="{{ route('home') }}"><i class="fa fa-dashboard text-aqua"></i> <span> Dashboard</span></a>
        </li>

        <!-- Admins -->
        <li class=" users-active-li roles-list-active-li role-active-li treeview">
            <a href="#">
                <i class="fa fa-users"></i> <span>User</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Assign Role</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Create New</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Departments -->
        <li class=" users-active-li roles-list-active-li role-active-li treeview">
            <a href="#">
                <i class="fa fa-th"></i> <span>Department</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Departments</span>
                    </a>
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Assign User</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Create New</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Missions -->
        <li class=" users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-check-circle"></i> <span>Mission</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>All Missions</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Pending Missions</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Approved Missions</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Rejected Missions</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Leaves -->
        <li class=" users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-check-circle"></i> <span>Leave</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>All Leaves</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Pending Leaves</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Approved Leaves</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Rejected Leaves</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Notification -->
        <li class=" users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-folder"></i> <span>Notification</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-angle-double-right"></i>
                        <span>View Notifications</span>
                    </a>
                </li>
            </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="dashboard-page-title">
             <i class="fa fa-dashboard"></i> Dashboard         </h1>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        <!-- Info boxes -->
    <div class="row">

      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner text-uppercase">
            <h3>2</h3><p>Users</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>

          <a href="{{ route('home') }}" class="small-box-footer text-uppercase"> Show Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner text-uppercase">
            <h3>14</h3><p>Roles</p>
          </div>
          <div class="icon">
            <i class="fa fa-arrow-up"></i>
          </div>

          <a href="{{ route('home') }}" class="small-box-footer text-uppercase"> Show Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner text-uppercase">
            <h3>12</h3><p>Department</p>
          </div>
          <div class="icon">
            <i class="fa fa-list"></i>
          </div>

          <a href="{{ route('home') }}" class="small-box-footer text-uppercase"> Show Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner text-uppercase">
            <h3>12</h3><p>Pending Missions</p>
          </div>
          <div class="icon">
            <i class="fa fa-exclamation"></i>
          </div>
          <a href="{{ route('home') }}" class="small-box-footer text-uppercase"> Show Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
          </div>

      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner text-uppercase">
            <h3>2</h3><p>Approved Missions</p>
          </div>
          <div class="icon">
            <i class="fa fa-check-circle"></i>
          </div>

          <a href="{{ route('home') }}" class="small-box-footer text-uppercase"> Show Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner text-uppercase">
            <h3>1</h3><p>Rejected Missions</p>
          </div>
          <div class="icon">
            <i class="fa fa-close"></i>
          </div>

          <a href="{{ route('home') }}" class="small-box-footer text-uppercase"> Show Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner text-uppercase">
            <h3>12</h3><p>Pending Leaves</p>
          </div>
          <div class="icon">
            <i class="fa fa-exclamation"></i>
          </div>
          <a href="{{ route('home') }}" class="small-box-footer text-uppercase"> Show Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
          </div>

      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner text-uppercase">
            <h3>2</h3><p>Approved Leaves</p>
          </div>
          <div class="icon">
            <i class="fa fa-check-circle"></i>
          </div>

          <a href="{{ route('home') }}" class="small-box-footer text-uppercase"> Show Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner text-uppercase">
            <h3>1</h3><p>Rejected Leaves</p>
          </div>
          <div class="icon">
            <i class="fa fa-close"></i>
          </div>

          <a href="{{ route('home') }}" class="small-box-footer text-uppercase"> Show Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>


    <!-- Info boxes -->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>This is footer text for dashboard .</b>
    </div>
    <strong> <i class="fa fa-heart fa-fw fa-lg" style="color:red"></i> &nbsp;&nbsp; Copyright &copy; <span style="color:#56a7ed">2025</span> All Rights Reserved</strong>
  </footer>

</div>
<!-- ./wrapper -->




<!-- Bootstrap 3.3.6 -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/bootstrap/js/bootstrap.min.js"></script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>  -->


<!-- <script src="http://ahmedprojectsv2.great-site.net/js/jquery-ui.min.js"></script> -->
<script src="http://ahmedprojectsv2.great-site.net/js/moment.min.js"></script>
<script src="http://ahmedprojectsv2.great-site.net/js/fullcalendar.min.js"></script>

<!-- end -->

<!-- SlimScroll -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/fastclick/fastclick.js"></script>
<!-- Select2 -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/select2/select2.full.min.js"></script>

<!-- include summernote js -->
<!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
<script src="http://ahmedprojectsv2.great-site.net/js/summernote.min.js"></script>

<!-- Color Picker -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/dist/js/bootstrap-colorpicker.min.js"></script>

<!-- AdminLTE App -->
<script>
  var AdminLTEOptions = {
    /*https://adminlte.io/themes/AdminLTE/documentation/index.html*/
    sidebarExpandOnHover: true,
    navbarMenuHeight: "200px", //The height of the inner menu
    animationSpeed: 250,
  };
</script>
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/dist/js/app.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/dist/js/demo.js"></script>
<!-- page script -->
<!--Toastr notification -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/toastr/toastr.js"></script>

<!--Toastr notification end-->

<!-- Custom JS -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/js/special_char_check.js"></script>
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/js/custom.js"></script>

<!-- Pace Loader -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/pace/pace.min.js"></script>
<script type="text/javascript">
$(document).ajaxStart(function() { Pace.restart(); });
</script>
<!-- Sweet alert -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/js/sweetalert.min.js"></script>
<!-- iCheck -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-orange',
      /*uncheckedClass: 'bg-white',*/
      radioClass: 'iradio_square-orange',
      increaseArea: '10%' // optional
    });
  });
</script>


<!-- Color Picker  -->
<script>
  //Colorpicker
  $(document).ready(function(){
    $('#color_hex').colorpicker();
  });
</script>


<!-- Initialize Select2 Elements -->
<script type="text/javascript"> $(".select2").select2(); </script>
<!-- Initialize toggler -->
<script type="text/javascript">
  $(document).ready(function(){
      $('[data-toggle="popover"]').popover();
  });
</script>

<script type="text/javascript">
    $(document).ready(function () { setTimeout(function() {$( ".alert-dismissable" ).fadeOut( 1000, function() {});}, 10000); });
</script>
<script type="text/javascript">
  function round_off(input=0){
          return input;
      }
</script>
<!-- bootstrap datepicker -->

<!-- ChartJS 1.0.1 -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/chartjs/Chart.min.js"></script>


<!-- Sparkline -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

 <!-- BAR CHART -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/highcharts/highcharts.js"></script>
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/highcharts/highcharts-more.js"></script>
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/highcharts/exporting.js"></script>
<!-- BAR CHART END -->
<!-- PIE CHART -->
<script src="http://ahmedprojectsv2.great-site.net/Dashboard/plugins/highcharts/export-data.js"></script>
<!-- PIE CHART END -->



<!-- validation -->
<script src="http://ahmedprojectsv2.great-site.net/js/validation/jquery.validate.min.js"></script>
<script src="http://ahmedprojectsv2.great-site.net/js/validation/additional-methods.min.js"></script>


<!-- lobilist -->
<!-- custom -->
<!-- <script src="http://ahmedprojectsv2.great-site.net/js/custom.js"></script> -->
<script src="http://ahmedprojectsv2.great-site.net/js/sweetalert.min.js"></script>
<script src="http://ahmedprojectsv2.great-site.net/js/jquery.countTo.js"></script>
<script>
    $(document).ready(function() {

        // Success Message ...

        // Error Message ...

        // Warning Message ...

        // Confirm Delete .... ??!
        $(document).on('click' , '.delete' ,function(e){

            e.preventDefault();

            var that = $(this);

            swal({
                title: "Confirm Delete",
                icon: "error",
                buttons: ["No", "Yes"],
                dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                    that.closest('form').submit();
                }
            });

        });

        // Confirm Delete .... ??!
        $(document).on('click' , '.restore' ,function(e){

          e.preventDefault();

          var that = $(this);

          swal({
              title: "Confirm Restore !",
              icon: "info",
              buttons: ["No", "Yes"],
              dangerMode: false,
          })
          .then((willDelete) => {
          if (willDelete) {
                  that.closest('form').submit();
              }
          });

        });



        // Confirm Delete .... ??!
        $(document).on('click' , '.confirm_logout' ,function(e){

            e.preventDefault();

            var that = $(this);

            swal({
                title: "Confirm Logout !",
                icon: "info",
                buttons: ["No", "Yes"],
                dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                    that.closest('form').submit();
                }
            });

        });

    } );
</script>


            <script src="http://ahmedprojectsv2.great-site.net/js/bootstrap-datatables/en/jquery.dataTables.min.js"></script>
        <script src="http://ahmedprojectsv2.great-site.net/js/bootstrap-datatables/en/dataTables.bootstrap4.min.js"></script>

    <script src="http://ahmedprojectsv2.great-site.net/Dashboard/js/main.js"></script>
</body>
</html>
