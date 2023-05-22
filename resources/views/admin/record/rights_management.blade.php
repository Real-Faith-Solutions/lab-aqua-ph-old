@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="text-gray-800">Rights Management</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Record</a></li>
          <li class="breadcrumb-item active">Rights Management</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 mb-3">
        <div class="card shadow">
          <div class="card-header bg-info">
            <span class="card-title h6 font-weight-light text-white">Page Actions</span>
          </div>

          <div class="card-body table-responsive">
            <div class="row">

              <div class="col-md">
                <label for="basic-url" class="form-label">Select periodic</label>
                <div class="input-group mb-3">
                  <select class="form-control" id="inputGroupSelect02">
                    <option selected disabled>---</option>
                    <option value="1">Weekly</option>
                    <option value="2">Monthly</option>
                    <option value="3">Semi Annually 1</option>
                    <option value="3">Semi Annually 2</option>
                    <option value="3">Annually</option>
                  </select>
                </div>
              </div>

              <div class="col-md">
                <label for="basic-url" class="form-label">From</label>
                <div class="input-group mb-3">
                  <input type="date" class="form-control"></input>
                </div>
              </div>

              <div class="col-md">
                <label for="basic-url" class="form-label">To</label>
                <div class="input-group mb-3">
                  <input type="date" class="form-control"></input>
                </div>
              </div>
              <div class="col-md">
                <label for="basic-url" class="form-label">.</label>
                <div class="input-group mb-3">
                  <input class="form-control btn btn-info" type="submit" />
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card shadow">
          <div class="card-header">
            <span class="card-title h6 font-weight-bold text-primary">Rights Management table</span>
            <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="example1" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
              <thead class="thead-dark">
                <tr>
                  <!-- <th></th> -->
                  <th>Super Admin</th>
                  <th>Sales Manager</th>
                  <th>Marketing Manager</th>
                  <th>Service Coordinator</th>
                  <th>Admin Asst.</th>
                  <th>FSR</th>
                  <th>Micro Analyst</th>
                  <th>Pchem Analyst</th>
                  <th>Micro Manager</th>
                  <th>Pchem Manager</th>
                  <th width="auto"></th>
                </tr>
              </thead>
              <tbody class="font-weight-light">
                @foreach($rightsmanagement as $record)
                <tr class="mx-md-n5">
                  <!-- <td>
                    <button class="viewAnalysis collapse-item btn text-primary" data-bs-toggle="modal" data-bs-target="#analysisReuqestTable" data-id="{{$record->sample_id ?? 0}}">
                      <i class="bi bi-eye-fill"></i>
                    </button>
                  </td> -->
                  <td>{{$record->super_admin ?? 0}}</td>
                  <td>{{$record->sales_manager ?? 0}}</td>
                  <td>{{$record->marketing_manager ?? 0}}</td>
                  <td>{{$record->service_coordinator ?? 0}}</td>
                  <td>{{$record->admin_asst ?? 0}}</td>
                  <td>{{$record->fsr ?? 0}}</td>
                  <td>{{$record->micro_analyst ?? 0}}</td>
                  <td>{{$record->pchem_analyst ?? 0}}</td>
                  <td>{{$record->micro_manager ?? 0}}</td>
                  <td>{{$record->pchem_manager ?? 0}}</td>
                </tr>
                @endforeach
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