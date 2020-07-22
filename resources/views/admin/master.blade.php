<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--  Datatables  -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/dashboard" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="/logout" class="btn btn-link">Log Out</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link ml-4">
        <span class="brand-text font-weight-light" style="font-family: Comic Sans MS, Comic Sans, cursive">{{ Auth::user()->name }}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Data Warga
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="/warga/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Input Data</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/warga" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Warga Keseluruhan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/warga-asli" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Warga Asli</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/warga-luar" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Warga Luar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/warga-pendatang" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Warga Pendatang</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Pelayanan
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/permintaan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Permohonan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/permintaan/arsip" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Arsip</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="/announcement" class="nav-link">
                <i class="nav-icon fas fa-bullhorn"></i>
                <p>
                  Berita
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-body">
            @yield('konten')
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
  </div>
</body>
  
  <footer>
    
  </footer>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/js/demo.js') }}"></script>
<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

<script>
	$(document).ready( function () {
    $('#myTable').DataTable({
      dom: 
    "<'row'<'col-sm-4 pull-left'B><'col-sm-3'l><'col-sm-5 pull-right'f>>" +
    "<'row'<'col-sm-12'tr>>" +
    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [
            {
                extend: 'excel',
                text:'Excel',
                titleAttr: 'Data Warga',
                "className": 'btn btn-info'
            },
            {
                extend: 'print',
                text:'Print',
                titleAttr: 'Data Warga',
                "className": 'btn btn-info'
            },
        ],
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search..."
        }
    });
    $('input').addClass('form-control');
});
</script>

<script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
</html>
