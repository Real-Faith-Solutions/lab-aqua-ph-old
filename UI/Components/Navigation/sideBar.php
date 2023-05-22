<?php include '../Components/Navigation/formNew.php'; ?>

<style>
    .sidebar a{
        color: white !important;
    }
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #bc0909; box-shadow: none !important;">
<!-- Brand Logo -->
<a href="" class="brand-link" style="background-color: white; color: #555;">
    <img src="../dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Lab Management</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel d-flex" style="background: #9b0909; padding: 10px; border: none; margin: 0 -8px;">
        <div class="image">
        <img src="../dist/img/avatar.png" class="img-square elevation-3"  alt="User Image">   </div>
        <div class="info">
            <a href="#" class="d-block">Juan Dela Cruz</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="smslog.php" class="nav-link">
            <i class="nav-icon fas fa-file-signature"></i>
            <p>
            Sms Logs
            </p>
        </a>
        </li>

        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
            App Forms
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <div class="nav-link" data-toggle="modal" data-target="#addNewClient">
                <i class="far fa-circle nav-icon"></i>
                <p>Analysis Request</p>
            </div>
            </li>
            <li class="nav-item">
            <div class="nav-link" data-toggle="modal" data-target="#addLabAcceptance">
                <i class="far fa-circle nav-icon"></i>
                <p>Lab Acceptance</p>
            </div>
            </li>
            <li class="nav-item">
            <div class="nav-link" data-toggle="modal" data-target="#addAnalysisPayment">
                <i class="far fa-circle nav-icon"></i>
                <p>Analysis Payment</p>
            </div>
            </li>
        </ul>
        </li>

        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
            Records
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="labAnalysisRequest.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Analysis Request</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="labWorkOrder.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lab Work Order</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="paymentInfo.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Payment Info</p>
            </a>
            </li>
        </ul>
        </li>

        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>
            Reports & Analysis
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Client Records</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="labResult.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lab Results</p>
            </a>
            </li>
        </ul>
        </li>

        <li class="nav-item">
        <a href="usermanagement.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
            User Management
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="../index.php" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
            Logout
            </p>
        </a>
        </li>

    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>