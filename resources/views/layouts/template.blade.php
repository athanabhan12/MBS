<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>www.MBSonline.id | IT Consultant Provider</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../admin/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- iCon -->
  <link href="../../img/Logo MBS Corp.png" rel="icon">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../admin/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../admin/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../admin/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../admin/assets/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../admin/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../admin/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../admin/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../admin/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../admin/assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../../admin/assets/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../../admin/assets/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../admin/assets/dist/css/adminlte.min.css">
  <script src="https://kit.fontawesome.com/045781860b.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../img/Logo MBS Corp.png" alt="MBSLogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Dashboard</a>
      </li>
    </ul>

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../img/Logo MBS Corp.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <h3 class="brand-text font-weight-bold" style="color: #003C8D;">MBS</span><span style="color: #5CE1E6;">.Corp</span></h3>
    </a>

    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../img/Logo MBS Corp.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin/index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin/team') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-people-group"></i>
              <p>
                Our Team
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin/pengguna') }}" class="nav-link">
              <i class="nav-icon fa-solid fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin/partner') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-handshake-angle"></i>
              <p>
                Platform Partnership
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin/sertifikasi') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-certificate"></i>
              <p>
                Sertifikasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-list"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin/produk') }}" class="nav-link">
                    <i class="fa-solid fa-database"></i>
                  <p>Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/project') }}" class="nav-link">
                    <i class="fa-solid fa-bars-progress"></i>
                  <p>Project Reference</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-bars-progress"></i>
              <p>
                Project Reference
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin/education') }}" class="nav-link">
                    <i class="fa-solid fa-school"></i>
                  <p>Education</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/FB') }}" class="nav-link">
                    <i class="fa-solid fa-coins"></i>
                  <p>Finance & Banking</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/goverment') }}" class="nav-link">
                    <i class="fa-solid fa-building-flag"></i>
                  <p>Goverment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/non_goverment') }}" class="nav-link">
                    <i class="fa-solid fa-building"></i>
                  <p>Non Goverment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/hospital') }}" class="nav-link">
                    <i class="fa-solid fa-hospital"></i>
                  <p>Hospital</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-database"></i>
              <p>
                Produk
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin/cctv') }}" class="nav-link">
                    <i class="far fa-solid fa-video"></i>
                  <p>CCTV</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/laptop') }}" class="nav-link">
                    <i class="far fa-solid fa-laptop"></i>
                  <p>Laptop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/networking') }}" class="nav-link">
                    <i class="far fa-solid fa-globe"></i>
                  <p>Networking</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/pc') }}" class="nav-link">
                    <i class="fa-solid fa-desktop"></i>
                  <p>PC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/printer') }}" class="nav-link">
                    <i class="far fa-solid fa-print"></i>
                  <p>Printer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/security_system') }}" class="nav-link">
                    <i class="far fa-solid fa-shield"></i>
                  <p>Security System</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/server') }}" class="nav-link">
                    <i class="far fa-solid fa-server"></i>
                  <p>Server</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/services') }}" class="nav-link">
                    <i class="far fa-solid fa-screwdriver-wrench"></i>
                  <p>Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/software') }}" class="nav-link">
                    <i class="far fa-solid fa-gears"></i>
                  <p>Software</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/isp') }}" class="nav-link">
                    <i class="far fa-solid fa-wifi"></i>
                  <p>ISP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/disk') }}" class="nav-link">
                    <i class="far fa-solid fa-database"></i>
                  <p>Storage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin/san_switch') }}" class="nav-link">
                    <i class="far fa-solid fa-network-wired"></i>
                  <p>San Switch</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item mt-4">
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="nav-link">
                <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>
               Logout
              </p>
              </button>
            </form>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      since 2017 - <b>www.mbsonline.id</b>
    </div>
    <strong>www.mbsonline.id</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../../admin/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../../admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- FONTAWESOME -->
<script src="../../../../https://kit.fontawesome.com/90c4b6e831.js" crossorigin="anonymous"></script>
<!-- Bootstrap 4 -->
<script src="../../../../admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../../../admin/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../../../admin/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../../../admin/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../../admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../../../admin/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../../../admin/assets/plugins/moment/moment.min.js"></script>
<script src="../../../../admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../../admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../../../admin/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../../admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../../admin/assets/dist/js/adminlte.js"></script>
<script src="../../../../admin/assets/dist/js/pages/dashboard.js"></script>
<script src="../../../../admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../../admin/assets/plugins/jszip/jszip.min.js"></script>
<script src="../../../../admin/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../../admin/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../../admin/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../../admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../../admin/assets/plugins/jszip/jszip.min.js"></script>
<script src="../../../../admin/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../../admin/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../../admin/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../../admin/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- CDN Jquery -->
{{-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> --}}

<!-- Select2 -->
<script src="../../../../admin/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../../../admin/assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../../../admin/assets/plugins/moment/moment.min.js"></script>
<script src="../../../../admin/assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../../../admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../../../admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../../admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../../../admin/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../../../admin/assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../../../admin/assets/plugins/dropzone/min/dropzone.min.js"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

</body>
</html>