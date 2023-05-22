@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="text-gray-800">Lab Result Status</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Record</a></li>
          <li class="breadcrumb-item active">Lab Status Results</li>
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

              <!-- <div class="col-md">
                      <label for="basic-url" class="form-label">Select a water purpose</label>
                      <div class="input-group mb-3">
                        <select class="form-control" id="inputGroupSelect02">
                            <option selected disabled>---</option>
                            <option value="1">Drinking</option>
                            <option value="2">Dialysis</option>
                            <option value="3">Recreational</option>
                            <option value="3">Others</option>
                        </select>
                      </div>
                    </div> -->

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

              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <!-- <a class="collapse-item" href="{{ config('app.url') }}admin/app-forms/analysis-request">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Analysis Request</button>
                        </a>
                        <button class="btn btn-primary btn-sm"data-bs-toggle="modal" data-bs-target="#addLabAcceptance"><i class="fa fa-plus"></i> Add Lab Acceptance</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card shadow">
          <div class="card-header">
            <span class="card-title h6 font-weight-bold text-primary">Lab Status Results table</span>
            <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="generalTable" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
              <thead class="thead-dark">
                <tr>
                  <th width="auto">Action</th>
                  <th>Status</th>
                  <th>Analysis ID</th>
                  <th>Account Name</th>
                  <th>Collected by</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Source of Water Sample</th>
                  <th>Water Purpose</th>
                  <th>Test Request</th>
                  <th>Customer Name</th>
                </tr>
              </thead>
              <tbody class="font-weight-light">
                @foreach($records as $record)
                <tr class="mx-md-n5">
                  <td>
                    @if ($record->status == 1) 
                     @if (Session::get('role') == 'super_admin' OR Session::get('role') == 'service_coordinator')
                    <a class="btn text-primary btn-sm" target="_blank" href="{{ config('app.url') }}admin/report/lab-result-print/{{$record->id ?? 0}}">
                      <i class="bi bi-printer-fill"> Print</i>
                    </a>  
                    @endif
                      @endif
                      <a href="{{ route('getChangeLabStatus', ['id'=>$record->id])}}">@if ($record->status == 1)
                        <td style="display:none;">
                        @else 
                        @if (Session::get('role') == 'pchem_manager' OR Session::get('role') == 'micro_manager' OR Session::get('role') == 'super_admin')
                          <button class="btn btn-primary">Approve</button> @else
                        @endif
                      </a>
                    @endif
                  </td>
                  <td>@if($record->status == 0) <div class="badge badge-danger">Pending</div> @else <div class="badge badge-success">Approved</div>    @endif</td>
                  <td>{{$record->id ?? 0}}</td>
                  @if (Session::get('role') == 'super_admin' OR Session::get('role') == 'service_coordinator')
                  <td>{{$record->account_name ?? 0}}</td> @else <td><div class="badge badge-danger">Account Restriction</div></td> @endif
                  <td>{{$record->collected_by ?? 0}}</td>
                  <td>{{$record->date_collected}}</td>
                  <td>{{$record->time_collected ?? 0}}</td>
                  <td>{{$record->source_of_water_sample ?? 0}}</td>
                  <td>{{$record->water_purpose ?? 0}}</td>
                  <td>{{$record->test_request ?? 0}}</td>
                  <td>{{$record->customer_representative_name ?? 0}}</td>
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
