

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab Management with SMS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
<!-- <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=-7eSns8llm-RMrRDsxHMEIf7RLOedtIl6ZakLhKnAVIi-rbZhzluH4rAXuSX_8wNGEWusUgzMC9IkFMaNASdxErVoYrB2Z8hTL1irKOppalmPhXlsdexC0odXcoEnuLC" charset="UTF-8"> --></script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <?php include '../Components/Navigation/sideBar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lab Analysis Requests</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Records</a></li>
              <li class="breadcrumb-item active">Analysis Requests</li></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-flex">
        <div class="row">
          <div class="col-12">
       

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lab Analysis Requests Data table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped table-responsive">
                  <thead>
                  <tr>
                    <th>Test No.</th>
                    <th>Account Name</th>
                    <th>Collected by</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Last Microbial Testing</th>
                    <th>Last Change of Filter</th>
                    <th>Last Change of UV</th>
                    <th>Collection Point</th>
                    <th>Address of Collection Point</th>
                    <th>UV Light</th>
                    <th>Chlorinator</th>
                    <th>Faucet Condition after Disinfection</th>
                    <th width="7%"></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><b style="color: maroon">7545</b></td>
                    <td>John Doe</td>
                    <td>Juan Dela Cruz</td>
                    <td><i>July 12, 2021</i></td>
                    <td><b style="color: blue">10:30 AM</b></td>
                    <td>Maynilad</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td><b style="color: blue">Data</b></td>
                    <td>John Doe</td>
                    <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td>
                    
                  </tr>
                   <tr>
                   <td><b style="color: maroon">7545</b></td>
                    <td>Juan Dela Cruz</td>
                    <td>John Doe</td>
                    <td><i>July 12, 2021</i></td>
                    <td><b style="color: blue">9:00 AM</b></td>
                    <td>PrimeWater</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td><b style="color: blue">Data</b></td>
                    <td>John Doe</td>
                    <td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td>
                  </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Test No.</th>
                    <th>Account Name</th>
                    <th>Collected by</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Last Microbial Testing</th>
                    <th>Last Change of Filter</th>
                    <th>Last Change of UV</th>
                    <th>Collection Point</th>
                    <th>Address of Collection Point</th>
                    <th>UV Light</th>
                    <th>Chlorinator</th>
                    <th>Faucet Condition after Disinfection</th>
                    <th width="7%"></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Footer <a href="">Lab Management with SMS System</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Footer</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [""]
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
  bsCustomFileInput.init();
});
</script>
</body>
</html>
