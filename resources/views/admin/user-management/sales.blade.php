@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800">Sales</h1></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Sales</li>
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
                <span class="card-title h6 font-weight-bold text-primary">Sales table</span>
                <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
            </div>
            <!-- /.card-header -->

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
                            <input class="form-control btn btn-info" type="submit"/>
                          </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addClient"><i class="fa fa-plus"></i> Add Client</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive">
                <table id="generalTable" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
                <thead class="thead-dark">
                <tr>
                    <th>Client ID </th>
                    <th>Account Name</th>
                    <th>Business TIN</th>
                    <th>Name Of Owner</th>
                    <th>Type Of Ownership</th>
                    <th>Name OF Authorized Person</th>
                    <th>Unit No. Floor. Bldg Name</th>
                    <th>Street Name Or Subdivision</th>
                    <th>Barangay Name</th>
                    <th>Municipality Or City</th>
                    <th>Zip Code</th>
                    <th>Province</th>
                    <th>Phone</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Preffered Mode Of Contact</th>
                    <th>Fsr Assigned</th>
                    <th>Market Segment</th>
                    <th>No. Of Microbiology Samples</th>
                    <th>Sample Collection Frequency (Micro)</th>
                    <th>No. Of Physico-Chemical Samples</th>
                    <th>Sample Collection Frequency Of (PChem)</th>
                    <th>Assigned Week</th>
                    <th width="auto"></th>
                </tr>
                </thead>
                <tbody class="font-weight-light">
                @foreach($client as $recipient)
                    <tr class="mx-md-n5">
                    <td>000004</td>
                    <td>{{$recipient->account_name ?? 0}}</td>
                    <td>{{$recipient->business_tin ?? 0}}</td>
                    <td>{{$recipient->name_of_owner ?? 0}}</td>
                    <td>{{$recipient->type_of_ownership ?? 0}}</td>
                    <td>{{$recipient->name_of_authorized_person ?? 0}}</td>
                    <td>{{$recipient->unit_no_floor_bldg_name ?? 0}}</td>
                    <td>{{$recipient->street_name_or_subdivision ?? 0}}</td>
                    <td>{{$recipient->barangay_name ?? 0}}</td>
                    <td>{{$recipient->municipality_or_city ?? 0}}</td>
                    <td>{{$recipient->zip_code ?? 0}}</td>
                    <td>{{$recipient->province ?? 0}}</td>
                    <td>{{$recipient->phone ?? 0}}</td>
                    <td>{{$recipient->mobile ?? 0}}</td>
                    <td>{{$recipient->email ?? 0}}</td>
                    <td>{{$recipient->preferred_model_of_contract ?? 0}}</td>
                    <td>{{$recipient->fsr_assigned ?? 0}}</td>
                    <td>{{$recipient->market_segment ?? 0}}</td>
                    <td>{{$recipient->no_of_microbiology_samples ?? 0}}</td>
                    <td>{{$recipient->sample_collection_frequency_micro ?? 0}}</td>
                    <td>{{$recipient->no_of_physico_chemical_samples ?? 0}}</td>
                    <td>{{$recipient->sample_collection_frequency_pchem ?? 0}}</td>
                    <td>{{$recipient->assigned_week ?? 0}}</td>
                    <td></td>

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
