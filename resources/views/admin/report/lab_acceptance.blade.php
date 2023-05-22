@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="text-gray-800">Lab Acceptance</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Report</a></li>
          <li class="breadcrumb-item active">Lab Acceptance</li>
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
                <label for="basic-url" class="form-label">Select a payment type</label>
                <div class="input-group mb-3">
                  <select class="form-control" id="inputGroupSelect02">
                    <option selected disabled>---</option>
                    <option value="1">Payment type 1</option>
                    <option value="2">Payment type 2</option>
                    <option value="3">Payment type 3</option>
                  </select>
                </div>
              </div>

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
                  <input type="submit" class="form-control btn btn-info" />
                </div>
              </div>

              <!-- /.card-header -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card shadow">
          <div class="card-header">
            <span class="card-title h6 font-weight-bold text-primary">Lab Acceptance table</span>
            <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="generalTable" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
              <thead class="thead-dark">
                <tr>
                  <th></th>
                  <th>Acceptance No.</th>
                  <th>Test No.</th>
                  <th>Evaluated by</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Sample Condition</th>
                  <th>Remarks</th>
                  <th>Final Remarks</th>

                </tr>
              </thead>
              <tbody class="font-weight-light">
                @foreach($records as $record)
                <tr class="mx-md-n5">
                  <td>
                    <button class="viewLab collapse-item btn text-primary" data-bs-toggle="modal" data-bs-target="#addLabAcceptance" data-id="{{$record->test_no ?? 0}}">
                      <i class="bi bi-eye-fill"></i>
                    </button>
                  </td>
                  <td>{{$record->id ?? 0}}</td>
                  <td>{{$record->test_no ?? 0}}</td>
                  <td>{{$record->evaluated_by ?? 0}}</td>
                  <td>{{$record->date ?? 0}}</td>
                  <td>{{$record->time ?? 0}}</td>
                  <td>{{$record->sample_condition ?? 0}}</td>
                  <td>
                    <span class="badge badge-{{$record->remarks == 'Accepted' ? 'success': '' }}{{$record->remarks == 'Conditionally Accepted' ? 'primary': '' }}{{$record->remarks == 'Rejected' ? 'danger': '' }}">
                      {{$record->remarks ?? 0}}
                    </span>
                  </td>
                  <td>
                      <span class="badge badge-{{$record->lab_acceptance_final_remarks   ? 'danger': '' }}">
                      {{$record->lab_acceptance_final_remarks ?? 0}}
                      </span>
                  </td>

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