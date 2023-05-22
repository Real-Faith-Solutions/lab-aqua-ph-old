@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Roles</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">User Management</a></li>
            <li class="breadcrumb-item active">Roles</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card shadow">
            <div class="card-header">
                <span class="card-title h6 font-weight-bold text-primary">Users table</span>
                <a href="{{ config('app.url') }}admin/user-management/add-role" class="btn btn-success btn-sm float-right" ><i class="fa fa-plus"></i> Add role</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="generalTable" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
                <thead class="thead-dark">
                <tr>
                    <th>Role Name</th>
                    <th>Rights</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="font-weight-light">
                    <tr>
                        <td>SUPER ADMIN	SALES MANAGER</td>
                        <td>-</td>
                        <td>-
                          {{-- <a class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i></a> --}}
                        </td>
                    </tr>
                    <tr>
                        <td>MARKETING MANAGER</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>SERVICE COORDINATOR	ADMIN ASST.</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>FSR	MICRO ANALYST</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>PCHEM ANALYST</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>ICRO MANAGER</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>PCHEM MANAGER</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
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
@endsection
