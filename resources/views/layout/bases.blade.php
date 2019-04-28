<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../../assets2/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../assets2/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('page_title') | {{ config('app.name') }} Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../../../assets2/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    @include('layout.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('layout.navbar')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      @include('layout.footer')
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../../../assets2/js/core/jquery.min.js"></script>
  <script src="../../../assets2/js/core/popper.min.js"></script>
  <script src="../../../assets2/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../../assets2/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../../../assets2/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../../../assets2/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../../../assets2/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../../../assets2/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../../../assets2/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../../../assets2/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../../../assets2/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../../../assets2/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../../../assets2/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../../../assets2/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../../../assets2/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../../../assets2/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../../../assets2/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../../../assets2/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../../assets2/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../../assets2/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  
  @yield('customJS')

</body>

</html>
