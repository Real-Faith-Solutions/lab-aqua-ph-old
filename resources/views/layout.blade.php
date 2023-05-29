<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Lab Management</title>
    <link rel="icon" href="/images/aqualab_logo.png">

    <!-- Google Font: Source Sans Pro -->
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Font Awesome -->

    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/charts-components.js') }}"></script>

    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    @include('admin.modal_forms')
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center my-3" href="{{ config('app.url') }}admin/dashboard">
                <img src="{{ asset('images/aqualab_logo.png') }}" style="width: 90%;" />
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ config('app.url') }}admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboards</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item -->


            <!-- <li class="nav-item">

                <a class="nav-link" href="{{ config('app.url') }}admin/user-management/sales">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Sales</span>
                </a>
            </li> -->

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Service</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <a class="collapse-item" href="{{ config('app.url') }}admin/record/payment-info">Add payment</a> -->
                        <a class="collapse-item" href="" data-bs-toggle="modal" data-bs-target="#addClient">Add Client Account</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/app-forms/analysis-request">Add Analysis Request</a>
                        {{-- @if (Session::get('role') == 'pchem_manager' OR Session::get('role') == 'micro_manager' OR Session::get('role') == 'Super Admin') --}}
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/lab-status">Lab Results Status</a>
                        {{-- @endif --}}

                    </div>
                </div>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwos" aria-expanded="true" aria-controls="collapseTwos">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Laboratory</span>
                </a>
                <div id="collapseTwos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @if (Session::get('role') == 'pchem_manager' OR Session::get('role') == 'micro_manager' OR Session::get('role') == 'Super Admin' OR Session::get('role') == 'laboratory_asst')
                        <a class="collapse-item" href="" data-bs-toggle="modal" data-bs-target="#addLabAcceptance">Lab Acceptance</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/record/lab-work-order">Lab Work Order</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/record/lab-approval">Lab Approval</a>
                        @endif
                        {{-- <a class="collapse-item" href="{{ config('app.url') }}admin/laboratory/dw-micro">Drinking Water<br /> - Micro</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/laboratory/dw-py-chem">Drinking Water<br /> - Phy-Chem</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/laboratory/ew-micro">Environmental Water<br /> - Micro</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/laboratory/ew-py-chem">Environmental Water<br /> - Phy-Chem</a> --}}
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFunding" aria-expanded="true" aria-controls="collapseFunding">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Records & Reports</span>
                </a>
                <div id="collapseFunding" class="collapse" aria-labelledby="headingFunding" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Reports Pages</h6>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/lab-acceptance">Lab Acceptances</a>
                        <a class="collapse-item" href="{{ config('app.url') }}admin/report/lab-result">Lab Results</a>
                        {{-- <a class="collapse-item" href="{{ config('app.url') }}admin/report/widget_reports">Widget Reports</a> --}}

                        <!-- <div class="collapse-divider"></div>

                        <h6 class="collapse-header">Records Pages:</h6> -->
                        @if (Session::get('role') == 'Super Admin')
                        <a class="collapse-item" href="{{ config('app.url') }}admin/record/analysis-request">Analysis Request</a>
                        @endif
                        <a class="collapse-item" href="{{ config('app.url') }}admin/record/facility">Facility</a>
                        @if (Session::get('role') == 'Super Admin')
                        <a class="collapse-item" href="{{ config('app.url') }}admin/user-management/client">Clients List</a>
                        @endif

                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User Management</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingFunding" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @if (Session::get('role') == 'Super Admin')
                        <a class="collapse-item" href="{{ config('app.url') }}admin/user-management/srole">Users List</a>
                        @endif
                        <a class="collapse-item" href="{{ config('app.url') }}admin/user-management/role">Roles</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                                    {{ ucwords(Session::get('name')) }}</br>
                                    <span style="color:red">&#187; {{ Session::get('role') }}</span>

                            </span>

                                <img class="img-profile rounded-circle" src="https://icons-for-free.com/download-icon-business+costume+male+man+office+user+icon-1320196264882354682_512.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                {{-- <div class="dropdown-divider"></div> --}}
                                <a class="dropdown-item" href="{{ config('app.url') }}logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-3">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

                <footer class="main-footer p-3">
                    <strong>Footer <a href="">Lab Management System</a>.</strong>
                    All rights reserved. Developed By <strong><a href="">Real Faith Solutions.</a></strong>
                </footer>
            </div>
        </div>
        <!-- ./wrapper -->


        <!-- jQuery -->
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <!-- Page level custom scripts -->
        <!--<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>-->
        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js" type="text/javascript"></script>

        {{-- PH LOCATION --}}
        <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js" type="text/javascript" ></script> --}}
        <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js" type="text/javascript" ></script>

        <script>
            $(document).ready(function() {
                $('#generalTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'copyHtml5',
                            attr: {
                                title: 'Copy',
                                id: 'copyButton',
                                class: 'btn btn-primary btn-sm'
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            attr: {
                                title: 'Excel',
                                id: 'button',
                                class: 'btn btn-info btn-sm'
                            }
                        },
                        {
                            extend: 'csvHtml5',
                            attr: {
                                title: 'CSV',
                                id: 'button',
                                class: 'btn btn-warning btn-sm'
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            attr: {
                                title: 'PDF',
                                id: 'button',
                                class: 'btn btn-danger btn-sm'
                            }
                        }
                    ],
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "responsive": true,
                });

                $('div.dataTables_filter input').addClass('px-2 mx-2');
                $('div.dataTables_filter input').attr('placeholder', 'Keyword here...');
            });

            // $('#generalTable').DataTable( {
            //     buttons: [
            //         {
            //             extend: 'excelHtml5',
            //             text: 'Save current page',
            //             exportOptions: {
            //                 modifier: {
            //                     page: 'current'
            //                 }
            //             }
            //         }
            //     ]
            // } );

            // $(function () {
            // $("#example1").DataTable({
            //     "responsive": true, "lengthChange": false, "autoWidth": false,
            //     "buttons": [""]
            // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
            // });

            // $(function () {
            //     bsCustomFileInput.init();
            // });
        </script>
</body>

</html>
