@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="text-gray-800">Analysis Request</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Record</a></li>
          <li class="breadcrumb-item active">Analysis Request</li>
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
            <span class="card-title h6 font-weight-bold text-primary">Analysis Request table</span>
            <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="generalTable" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
              <thead class="thead-dark">
                <tr>
                  <!-- <th></th> -->
                  <th>ID</th>
                  <th>Account Name</th>
                  <th>Unit No Floor Bldg Name</th>
                  <th>Street Name Or Subdivision</th>
                  <th>Barangay Name</th>
                  <th>Municipality Or City</th>
                  <th>Zip Code</th>
                  <th>Province</th>
                  <th>Contact Person</th>
                  <th>Phone</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Collected By</th>
                  <th>Date Collected</th>
                  <th>Time Collected</th>
                  <th>Last Microbial Testing</th>
                  <th>Last Change Of Filter</th>
                  <th>last Change Of Uv</th>
                  <th>Collection Point</th>
                  <th>Address Of Collection Point</th>
                  <th>Uv Light</th>
                  <th>Chlorinator</th>
                  <th>Faucet Condition After disinfection</th>
                  <th>Source Of Water Sample</th>
                  <th>Water Purpose</th>
                  <th>Test Request</th>
                  <th>Customer Representative Name</th>
                  <th>Sample ID</th>
                  <th>Account ID</th>
                  <th>Establishment</th>
                  <th>Estab Same As Sampling Loc</th>
                  <th>Sampling Location Name</th>
                  <th>Owner</th>
                  <th>Address</th>
                  <th>Add Same As Sampling Add</th>
                  <th>Sampling Location Address</th>
                  <th>Cinty</th>
                  <th>Sampling Point</th>
                  <th>Source</th>
                  <th>Type</th>
                  <th>Purpose</th>
                  <th>Date Sampled</th>
                  <th>Time Sampled</th>
                  <th>Sampled BY</th>
                  <th>Date Receive</th>
                  <th>Time Receive</th>
                  <th>Walk-In</th>
                  <th>REMARKS</th>
                  <th>Holding Time</th>
                  <th>Remarks</th>
                  <th>Time Tested</th>
                  <th>HPC-A</th>
                  <th>HPC-B</th>
                  <th>HPC-AVE</th>
                  <th>HPC-VALUE</th>
                  <th>% Difference</th>
                  <th>TC-24H</th>
                  <th>TC-48H</th>
                  <th>BG-24H</th>
                  <th>BG-48H</th>
                  <th>FC-24H</th>
                  <th>Analyzed BY</th>
                  <th>HPC</th>
                  <th>HPC-REMARKS</th>
                  <th>Total Coliform</th>
                  <th>TC-REMARKS</th>
                  <th>Fecal Coliform</th>
                  <th>FC-REMARKS</th>
                  <th>Remarks</th>
                  <th>Checked BY</th>
                  <th>Cert NO.</th>
                  <th width="auto"></th>
                </tr>
              </thead>
              <tbody class="font-weight-light">
                @foreach($records as $record)
                <tr class="mx-md-n5">
                  <!-- <td>
                    <button class="viewAnalysis collapse-item btn text-primary" data-bs-toggle="modal" data-bs-target="#analysisReuqestTable" data-id="{{$record->sample_id ?? 0}}">
                      <i class="bi bi-eye-fill"></i>
                    </button>
                  </td> -->
                  <td>{{$record->id ?? 0}}</td>
                  <td>{{$record->account_name ?? 0}}</td>
                  <td>{{$record->unit_no_floor_bldg_name ?? 0}}</td>
                  <td>{{$record->stree_name_or_subdivision ?? 0}}</td>
                  <td>{{$record->barangay_name ?? 0}}</td>
                  <td>{{$record->municipality_or_city ?? 0}}</td>
                  <td>{{$record->zip_code ?? 0}}</td>
                  <td>{{$record->province ?? 0}}</td>
                  <td>{{$record->contact_person ?? 0}}</td>
                  <td>{{$record->phone ?? 0}}</td>
                  <td>{{$record->mobile ?? 0}}</td>
                  <td>{{$record->email ?? 0}}</td>
                  <td>{{$record->collected_by ?? 0}}</td>
                  <td>{{$record->date_collected ?? 0}}</td>
                  <td>{{$record->time_collected ?? 0}}</td>
                  <td>{{$record->last_microbial_testing ?? 0}}</td>
                  <td>{{$record->last_change_of_filter ?? 0}}</td>
                  <td>{{$record->last_change_of_uv ?? 0}}</td>
                  <td>{{$record->collection_point ?? 0}}</td>
                  <td>{{$record->address_of_collection_point ?? 0}}</td>
                  <td>{{$record->uv_light ?? 0}}</td>
                  <td>{{$record->chlorinator ?? 0}}</td>
                  <td>{{$record->faucet_condition_after_disinfection ?? 0}}</td>
                  <td>{{$record->source_of_water_sample ?? 0}}</td>
                  <td>{{$record->water_purpose ?? 0}}</td>
                  <td>{{$record->test_request ?? 0}}</td>
                  <td>{{$record->customer_representative_name ?? 0}}</td>
                  <td>{{$record->sample_id ?? 0}}</td>
                  <td>{{$record->account_id ?? 0}}</td>
                  <td>{{$record->establishment ?? 0}}</td>
                  <td>{{$record->estab_same_as_sampling_loc ?? 0}}</td>
                  <td>{{$record->sampling_location_name ?? 0}}</td>
                  <td>{{$record->owner ?? 0}}</td>
                  <td>{{$record->address ?? 0}}</td>
                  <td>{{$record->add_same_as_sampling_add ?? 0}}</td>
                  <td>{{$record->sampling_location_address ?? 0}}</td>
                  <td>{{$record->city ?? 0}}</td>
                  <td>{{$record->sampling_point ?? 0}}</td>
                  <td>{{$record->source ?? 0}}</td>
                  <td>{{$record->type ?? 0}}</td>
                  <td>{{$record->purpose ?? 0}}</td>
                  <td>{{$record->date_sampled ?? 0}}</td>
                  <td>{{$record->time_sampled ?? 0}}</td>
                  <td>{{$record->sampled_by ?? 0}}</td>
                  <td>{{$record->date_received ?? 0}}</td>
                  <td>{{$record->time_received ?? 0}}</td>
                  <td>{{$record->walk_in ?? 0}}</td>
                  <td>{{$record->remarks ?? 0}}</td>
                  <td>{{$record->holding_time ?? 0}}</td>
                  <td>{{$record->date_tested ?? 0}}</td>
                  <td>{{$record->time_tested ?? 0}}</td>
                  <td>{{$record->hpc_a ?? 0}}</td>
                  <td>{{$record->hpc_b ?? 0}}</td>
                  <td>{{$record->hpc_ave ?? 0}}</td>
                  <td>{{$record->hpc_value ?? 0}}</td>
                  <td>{{$record->difference ?? 0}}</td>
                  <td>{{$record->tc_24h ?? 0}}</td>
                  <td>{{$record->tc_48h ?? 0}}</td>
                  <td>{{$record->bg_24h ?? 0}}</td>
                  <td>{{$record->bg_48h ?? 0}}</td>
                  <td>{{$record->fc_24h ?? 0}}</td>
                  <td>{{$record->analyzed_by ?? 0}}</td>
                  <td>{{$record->hpc ?? 0}}</td>
                  <td>{{$record->hpc_remarks ?? 0}}</td>
                  <td>{{$record->total_coliform ?? 0}}</td>
                  <td>{{$record->tc_remarks ?? 0}}</td>
                  <td>{{$record->fecal_caliform ?? 0}}</td>
                  <td>{{$record->remarks ?? 0}}</td>
                  <td>{{$record->fc_remarks ?? 0}}</td>
                  <td>{{$record->checked_by ?? 0}}</td>
                  <td>{{$record->cert_no ?? 0}}</td>
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