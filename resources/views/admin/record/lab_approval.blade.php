@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="text-gray-800">Lab Approval</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Report</a></li>
          <li class="breadcrumb-item active">Lab Approval</li>
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
            <span class="card-title h6 font-weight-bold text-primary">Lab Approval table</span>
            <!--<button class="btn btn-success btn-xs" style="margin-left: 77%" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Add</button>-->
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="generalTable" class="table table-borderless table-striped table-sm" style="border-radius: 3px; overflow: hidden;">
              <thead class="thead-dark">
                <tr>
                    {{-- <th></th> --}}
                    <th>Raw</th>
                    <th>Action</th>
                    <th>Status</th>
                    <th>Acceptance No.</th>
                    <th>Test No.</th>
                    <th>Evaluated by</th>
                    <th>Date</th>
                    <th>Mcr1 Time</th>
                    <th>Mcr1 Hpc A</th>
                    <th>Mcr1 Hpc B</th>
                    <th>mcr1 Hpc Ave</th>
                    <th>Mcr1 Hpc Value</th>
                    <th>Mcr1 Difference</th>
                    <th>Mcr1 Remarks</th>
                    <th>mcr2_bg_24h</th>
                    <th>mcr2_bg_48h</th>
                    <th>micr2_fc_24h</th>
                    <th>Micr2 Fc Total</th>
                    <th>Mcr2 Tc Remarks</th>
                    <th>micr3_tc_24h</th>
                    <th>mcr3_tc_48h</th>
                    <th>Mcr3 Tc Total</th>
                    <th>Mcr3 Tc Remarks</th>
                    <th>Micr4 Results</th>
                    <th>Mcr4 Remarks</th>
                    <th>reading_chem1_1</th>
                    <th>reading_chem1_2</th>
                    <th>reading_chem1_3</th>
                    <th>Chem1 Final</th>
                    <th>Chem1 Remarks</th>
                    <th>color_of_the_sample</th>
                    <th>fluorescence</th>
                    <th>reading_chem2_1</th>
                    <th>reading_chem2_2</th>
                    <th>reading_chem2_3</th>
                    <th>Chem2 Result</th>
                    <th>Chem2 Remarks</th>
                    <th>iwoedr1_chem3</th>
                    <th>fwoedr1_chem3</th>
                    <th>worr1_chem3</th>
                    <th>iwofedr2_chem3</th>
                    <th>fwofedr2_chem3</th>
                    <th>worr2_chem3</th>
                    <th>Chem3 Result</th>
                    <th>Chem3 Remarks</th>
                    <th>ir_chem4</th>
                    <th>Chem4 Result</th>
                    <th>Chem4 Remarks</th>
                    <th>ir1_chem5</th>
                    <th>ir2_chem5</th>
                    <th>ir3_chem5</th>
                    <th>Chem5 Result</th>
                    <th>Chem5 Remarks</th>
                    <th>ir1_chem6</th>
                    <th>ir2_chem6</th>
                    <th>ir3_chem6</th>
                    <th>Chem6 Result</th>
                    <th>Chem6 Remarks</th>
                    <th>ir1_chem7</th>
                    <th>ir2_chem7</th>
                    <th>ir3_chem7</th>
                    <th>Chem7 Result</th>
                    <th>Chem7 Remarks</th>
                    <th>ir1_chem9</th>
                    <th>ir2_chem9</th>
                    <th>ir3_chem9</th>
                    <th>Chem9 Result</th>
                    <th>Chem9 Remarks</th>
                    <th>ir1_chem10</th>
                    <th>ir2_chem10</th>
                    <th>ir3_chem10</th>
                    <th>Chem10 Result</th>
                    <th>Chem10 Remarks</th>
                    <th>Sample Condition</th>
                    <th>Remarks</th>
                    <th>Final Remarks</th>
                </tr>
              </thead>
              <tbody class="font-weight-light"> 
                <tr class="mx-md-n5">@foreach($records as $record)
                  @if ($record->remarks == 'Accepted') 
                    {{-- <td>
                        <button class="viewLab collapse-item btn text-primary" data-bs-toggle="modal" data-bs-target="#addLabAcceptance" data-id="{{$record->test_no ?? 0}}">
                        <i class="bi bi-eye-fill"></i>
                        </button>
                    </td>  --}}
                    <td>
                      {{-- @if ($record->status == 1) --}}
                        <button class="btn btn-info" data-toggle="modal" data-target="#workOrder" onclick="myForm('{{ $record->AnalysisRequest->test_parameter ?? '' }}', '{{ $record->AnalysisRequest->id ?? '' }}')">
                          Create Raw Data File ID {{ $record->AnalysisRequest->id ?? '-'}}
                        </button>
                            
        
                  {{-- @endif --}}
                    </td>
                    <td>
                      <a href="{{ route('getApprovalLabStatus', ['id'=>$record->id])}}">
                        @if ($record->status == 1)
                              - {{-- <button class="btn btn-danger">For validation</button>  --}}
                            @else 
                              <button class="btn btn-primary">Approved</button>
                        </a>
                        @endif 
                    </td>
                    <td>@if($record->status == 0) <div class="badge badge-danger">For validation</div> @else <div class="badge badge-success">Approved</div> @endif</td>
                    <td>{{$record->id ?? 0}}</td>
                    <td>{{$record->test_no ?? 0}}</td>  
                    <td>{{$record->evaluated_by ?? 0}}</td>
                    <td>{{$record->date ?? 0}}</td>
                    <td>{{$record->time ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->hpc_a ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->hpc_b ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->hpc_ave ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->hpc_value ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->difference ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->hpc_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->mcr2_bg_24h ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->mcr2_bg_48h ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->micr2_fc_24h ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->micr2_fc_total ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->mcr2_tc_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->micr3_tc_24h ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->mcr3_tc_48h ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->mcr3_tc_total ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->mcr3_tc_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->micr4_results ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->mcr4_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->reading_chem1_1 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->reading_chem1_2 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->reading_chem1_3 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem1_final ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem1_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->color_of_the_sample ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->fluorescence ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->reading_chem2_1 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->reading_chem2_2 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->reading_chem2_3 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem2_result ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem2_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->iwoedr1_chem3 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->fwoedr1_chem3 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->worr1_chem3 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->iwofedr2_chem3 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->fwofedr2_chem3 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->worr2_chem3 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem3_result ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem3_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir_chem4 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem4_result ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem4_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir1_chem5 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir2_chem5 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir3_chem5 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem5_result ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem5_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir1_chem6 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir2_chem6 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir3_chem6 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem6_result ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem6_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir1_chem7 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir2_chem7 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir3_chem7 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem7_result ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem7_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir1_chem9 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir2_chem9 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir3_chem9 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem9_result ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem9_remarks ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir1_chem10 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir2_chem10 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->ir3_chem10 ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem10_result ?? 0}}</td>
                    <td>{{$record->AnalysisRequest->chem10_remarks ?? 0}}</td>
                    
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
                  @endif
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