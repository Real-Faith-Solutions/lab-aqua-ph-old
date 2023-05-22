@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><a class="text-gray-800" href="{{ config('app.url') }}admin/user-management/role"><i class="bi bi-arrow-left"></i></a></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">User Management</a></li>
            <li class="breadcrumb-item">Roles</li>
            <li class="breadcrumb-item active">Add roles</li>
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
                <span class="card-title h6 font-weight-bold text-primary">Add role</span>
            </div>
            <!-- /.card-header -->
            <form class="card-body table-responsive">
                <div class="col-6 form-group">
                    <p>Role name</p>
                    <input type="text" class="form-control form-control-user font-weight-bold"  name="role_name" placeholder="Enter role name">
                </div>
                <div class="col-12 form-group">
                    <p>Rights</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="r_dashboard"/>
                        <label class="form-check-label" for="r_dashboard">Dashboard</label>
                        <br/>
                        {{-- SERVICE --}}
                        <input class="form-check-input" type="checkbox" value="" id="r_service" onchange="rService('#r_service')"/>
                        <label class="form-check-label" for="r_service">Service</label>
                        <br/>
                        <div class="ml-5">
                            <input class="form-check-input" type="checkbox" value="" id="r_add_client" disabled/>
                            <label class="form-check-label" for="r_add_client">Add client account</label>
                            <br/>
                            <input class="form-check-input" type="checkbox" value="" id="r_add_analysis" disabled/>
                            <label class="form-check-label" for="r_add_analysis">Add analysis request</label>
                            <br/>
                        </div>
                        {{-- LABORATORY --}}
                        <input class="form-check-input" type="checkbox" value="" id="r_laboratory" onchange="rLaboratory('#r_laboratory')"/>
                        <label class="form-check-label" for="r_laboratory">Laboratory</label>
                        <br/>
                        <div class="ml-5">
                            <input class="form-check-input" type="checkbox" value="" id="r_lab_acceptance" disabled/>
                            <label class="form-check-label" for="r_lab_acceptance">Lab Acceptance</label>
                            <br/>
                            <input class="form-check-input" type="checkbox" value="" id="r_lab_work_order" disabled/>
                            <label class="form-check-label" for="r_lab_work_order">Lab Work order</label>
                            <br/>
                        </div>
                        {{-- RECORDS AND REPORTS --}}
                        <input class="form-check-input" type="checkbox" value="" id="r_records_and_reports" onchange="rRecordsAndReports('#r_records_and_reports')"/>
                        <label class="form-check-label" for="r_records_and_reports">Records and Reports</label>
                        <br/>
                        <div class="ml-5">
                            <input class="form-check-input" type="checkbox" value="" id="r_records_lab_acceptance" disabled/>
                            <label class="form-check-label" for="r_records_lab_acceptance">Lab acceptance</label>
                            <br/>
                            <input class="form-check-input" type="checkbox" value="" id="r_lab_result" disabled/>
                            <label class="form-check-label" for="r_lab_result">Lab result</label>
                            <br/>
                            <input class="form-check-input" type="checkbox" value="" id="r_record_analysis_request" disabled/>
                            <label class="form-check-label" for="r_record_analysis_request">Analysis request</label>
                            <br/>
                            <input class="form-check-input" type="checkbox" value="" id="r_facility" disabled/>
                            <label class="form-check-label" for="r_facility">Facility</label>
                            <br/>
                            <input class="form-check-input" type="checkbox" value="" id="r_client_list" disabled/>
                            <label class="form-check-label" for="r_client_list">Client Lists</label>
                            <br/>
                        </div>
                        {{-- USER MANAGEMENT --}}
                        <input class="form-check-input" type="checkbox" value="" id="r_usermanagement" onchange="rUsermanagement('#r_usermanagement')"/>
                        <label class="form-check-label" for="r_usermanagement">User management</label>
                        <br/>
                        <div class="ml-5">
                            <input class="form-check-input" type="checkbox" value="" id="r_user_list" disabled/>
                            <label class="form-check-label" for="r_user_list">User Lists</label>
                            <br/>
                            <input class="form-check-input" type="checkbox" value="" id="r_roles" disabled/>
                            <label class="form-check-label" for="r_roles">Roles</label>
                            <br/>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-success" />
            </form>
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
