@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="text-gray-800">Widget Reports</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Report</a></li>
          <li class="breadcrumb-item active">Widget Reports</li>
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
          <div class="card-header bg-dark">
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
            <span class="card-title h6 font-weight-bold text-primary">Widget Reports table</span>
            <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="generalTable" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
              <thead class="thead-dark">
                <tr>
                  <th>No. of Samples per City/Municipality</th>
                  <th>No. of Samples per Market Segment</th>
                  <th>No. of Micro Samples per City/Municipality</th>
                  <th>No. of Micro Samples per Market Segment</th>
                  <th>No. of Phy-Chem Samples per City/Municipality</th>
                  <th>No. of Phy-Chem Samples per Market Segment</th>
                  <th>No. of Samples per FSR</th>
                  <th>No. of Micro Samples per FSR</th>
                  <th>No. of Micro Samples per FSR</th>
                  <th>No. of Failed HPC Samples per City/Municipality</th>
                  <th>No. of Failed Total Coliform Samples per City/Municipality</th>
                  <th>No. of Failed Fecal Coliform Samples per City/Municipality</th>
                </tr>
              </thead>
              <tbody class="font-weight-light">
                
                <tr class="mx-md-n5">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>         
                    <td></td>
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
