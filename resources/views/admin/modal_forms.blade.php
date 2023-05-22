<script>
  function submitDataForms(urls, formName, modalName) {
    const url = urls;
    fetch(url, {
      method: "POST",
      body: new FormData(document.getElementById(formName)),
    }).then(
      response => response.text() // .json(), etc.
      // same as function(response) {return response.text();}
    ).then(
      html => console.log(html)
    );

    $('#' + modalName).modal('hide');
    //alert(response);
    //location.reload();
  }
</script>

<!-- WORK ORDER FROM LABORATORY TABLE -->
<div class="modal fade" id="workOrder" tabindex="-1" role="dialog" aria-labelledby="Facility" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info shadow text-white" style="margin: -5px; border: none;">
        <div>
          <h5 class="modal-title">WORK ORDER</h5>
          <div class="text-xs fw-100 text-gray-300"><i>Please fill out the entire fields...</i></div>
        </div>
        {{-- <span class="btn-close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-fw fa-times"></i></span> --}}
      </div>
      <br />
      <form class="user" method="POST" id="addWorkOrderForm" action="javascript:void(0);" onsubmit="submitDataForms('{{ config('app.url') }}api/v1/analysis-request/encode', 'addWorkOrderForm', 'workOrder');">
        <center>
            <input type="text" class="form-control form-control-user text-white font-weight-bold w-50 mx-1"
                id="workOrderID" style="background-color: #143c4e;" name="workOrderTableID"
                placeholder="Analysis Request ID..." value="" readonly>
        </center>

        <div class="modal-body">
          <p>
          @include('admin.page_forms.sub_form_micr')
          @include('admin.page_forms.sub_form_chem')
          @include('admin.page_forms.sub_form_phys')
          </p>
        </div>

        <div class="modal-footer" >
          <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="window.location.reload();">Close</button>
          <button type="submit" class="btn btn-primary" onClick="window.location.reload();">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- TEST FORM FOR NEW CLIENT -->
<div class="modal fade" id="addNewClient">
  <div class="modal-dialog modal-lg">
    <form action="">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Request for Analysis</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs text-center" id="nav">
          <li><a href="#analysisInfo" data-toggle="tab">
              <div class="h5 p-3">Information</div>
            </a></li>
          <li><a href="#analysisSampleCollection" data-toggle="tab">
              <div class="h5 p-3">Sample Collection Info</div>
            </a></li>
          <li><a href="#analysisWorkOrder" data-toggle="tab">
              <div class="h5 p-3">Work Order Info</div>
            </a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active p-3" id="analysisInfo">
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Account Name</label>
                  <input type="text" class="form-control" id="" placeholder="Enter Account Name .." required>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Contact Person</label>
                  <input type="text" class="form-control" id="" placeholder="Enter Contact Person..">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" id="" placeholder="Enter Phone..">
                </div>
              </div>

              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile</label>
                  <input type="text" class="form-control" id="" placeholder="Enter Mobile..">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Client Type</label>
                  <select class="form-control">
                    <option>Regular</option>
                    <option>Walk-In</option>
                  </select>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="" placeholder="Enter Email ..">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane p-3" id="analysisSampleCollection">
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Collected by</label>
                  <input type="text" class="form-control" id="" placeholder="Enter Name .." required>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Date Collected</label>
                  <input type="date" class="form-control" id="" placeholder="Enter Date ..">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Time Collected</label>
                  <input type="time" class="form-control" id="" placeholder="Enter Time ..">
                </div>
              </div>

              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Microbial Testing</label>
                  <input type="date" class="form-control" id="" placeholder="Enter Time ..">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Change of Filter</label>
                  <input type="date" class="form-control" id="" placeholder="Enter Time ..">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Last Change of UV</label>
                  <input type="date" class="form-control" id="" placeholder="Enter Time ..">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane p-3" id="analysisWorkOrder">
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Source of Water Sample</label>
                  <input type="text" class="form-control" id="" placeholder="Enter Source Water Sample .." required>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Water Purpose</label>
                  <input type="date" class="form-control" id="" placeholder="Enter Water Purpose ..">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Test Purpose</label>
                  <input type="time" class="form-control" id="" placeholder="Enter Test Purpose ..">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Customer Representative Name</label>
                  <input type="date" class="form-control" id="" placeholder="Enter Name ..">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
          <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
        </div>
      </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- TEST LAB ACCEPTANCE FORM FOR NEW CLIENT -->
<div class="modal fade" id="analysisReuqestTable" tabindex="-1" role="dialog" aria-labelledby="analysisReuqestTable" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info shadow text-white" style="margin: -5px; border: none;">
        <div>
          <h5 class="modal-title font-weight-light" id="AnalysisPayment">Analysis Request profile</h5>
          <!-- <div class="text-xs fw-100 text-gray-300"><i>Please fill out the entire fields...</i></div> -->
        </div>
        <span class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-fw fa-times"></i></span>
      </div>
      <br />
      <form class="user" method="POST" id="analysisReuqestTableForm" action="javascript:void(0);" onsubmit="submitDataForms('{{ config('app.url') }}api/v1/lab-acceptance/add', 'analysisReuqestTableForm', 'addLabAcceptance');">
        <div class="modal-body">
          <div class="col-12">
            <div class="form-group d-flex">
              <input type="text" class="form-control form-control-user text-white font-weight-bold w-50 mx-1" id="analysisReuqestTableID" style="background-color: #143c4e;" name="analysisReuqestTableID" placeholder="SAMPLE ID" value="" disabled>
              <input type="text" class="form-control form-control-user text-white font-weight-bold w-50 mx-1" id="analysisReuqestTableID" style="background-color: #143c4e;" name="analysisReuqestTableID" placeholder="ACCOUNT ID" value="" disabled>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-5">
              <div class="form-group">
                <!--<label for="exampleInputEmail1">Date</label>-->
                <input type="text" class="form-control form-control-user" name="" placeholder="Establishment">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <!--<label for="exampleInputEmail1">Time</label>-->
                <input type="time" class="form-control form-control-user" name="time" placeholder="Enter Time ..">
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-5">
              <span class="text-sm">Sample Conditions</span>
              <select class="form-control form-control-user" name="sample_condition" style="height: auto; padding: 1.1rem 0.8rem;">
                <option>Complies with the Requirement</option>
                <option>Leaking or with wet caps</option>
                <option>In another container</option>
                <option>Below required volume</option>
                <option>Expired</option>
              </select>
            </div>
            <div class="col-6">
              <span class="text-sm">Remarks</span>
              <select class="form-control form-control-user" name="remarks" style="height: auto; padding: 1.1rem 0.8rem;">
                <option>Accepted</option>
                <option>Conditionally Accepted</option>
                <option>Rejected</option>
              </select>
            </div>
          </div>
          <br />
          <div class="col-12">
            <div class="form-group">
              <!--<label for="exampleInputEmail1">Remarks</label>-->
              <textarea class="form-control form-control-user" id="" row="3" placeholder="Enter Remarks .."></textarea>
            </div>
          </div>
        </div>

        <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- TEST LAB ACCEPTANCE FORM FOR NEW CLIENT -->
<div class="modal fade" id="addLabAcceptance" tabindex="-1" role="dialog" aria-labelledby="LabAcceptance" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info shadow text-white" style="margin: -5px; border: none;">
        <div>
          <h5 class="modal-title font-weight-light" id="AnalysisPayment">LAB ACCEPTANCE</h5>
          <div class="text-xs fw-100 text-gray-300"><i>Please fill out the entire fields...</i></div>
        </div>
        <span class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-fw fa-times"></i></span>
      </div>
      <br />
      <form class="user" method="POST" id="addLabAcceptanceForm" action="javascript:void(0);" onsubmit="submitDataForms('{{ config('app.url') }}api/v1/lab-acceptance/add', 'addLabAcceptanceForm', 'addLabAcceptance');">
        <div class="modal-body">
          <div class="col-12">
            <div class="form-group">
              <input type="text" class="form-control form-control-user text-white font-weight-bold" id="test_no" style="background-color: #143c4e" name="test_no" placeholder="Enter Test ID ..">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user text-white font-weight-bold" style="background-color: #143c4e" name="lab_approval_id" placeholder="Enter LAB ID ..">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <input type="text" class="form-control form-control-user text-capitilize" name="evaluated_by" placeholder="Enter Evaluator Name ..">
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-5">
              <div class="form-group">
                <!--<label for="exampleInputEmail1">Date</label>-->
                <input type="date" class="form-control form-control-user" name="date" placeholder="Enter Date ..">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <!--<label for="exampleInputEmail1">Time</label>-->
                <input type="time" class="form-control form-control-user" name="time" placeholder="Enter Time ..">
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-5">
              <span class="text-sm">Status</span>
              <select class="form-control form-control-user" name="sample_condition" style="height: auto; padding: 1.1rem 0.8rem;">
                <option value="Complies with the Requirement">Complies with the Requirement</option>
                <option value="Leaking or with wet caps">Leaking or with wet caps</option>
                <option value="In another container">In another container</option>
                <option value="Below required volume">Below required volume</option>
                <option value="Expired">Expired</option>
              </select>
            </div>
            <div class="col-6">
              <span class="text-sm">Remarks</span>
              <select class="form-control form-control-user" name="remarks" style="height: auto; padding: 1.1rem 0.8rem;" onchange='labacceptanceremarks(this.value)'>
                <option value="Accepted">Accepted</option>
                <option value="Conditionally Accepted">Conditionally Accepted</option>
                <option value="Rejected">Rejected</option>
              </select>
            </div>
          </div>
          <br />
          <div class="col-12" id="lab_acceptance_final_remarks" style="display:none">
            <div class="form-group">
              <label for="exampleInputEmail1">Remarks</label>
              <textarea class="form-control form-control-user" name="lab_acceptance_final_remarks" row="3" placeholder="Enter Remarks .."></textarea>
            </div>
          </div>
        </div>

        <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- TEST LAB PAYMENT FORM FOR NEW CLIENT -->
<div class="modal fade" id="addAnalysisPayment" tabindex="-1" role="dialog" aria-labelledby="AnalysisPayment" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info shadow text-white" style="margin: -5px; border: none;">
        <div>
          <h5 class="modal-title font-weight-light" id="Facility">ANALYSIS PAYMENT</h5>
          <div class="text-xs fw-100 text-gray-300"><i>Please fill out the entire fields...</i></div>
        </div>
        <span class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-fw fa-times"></i></span>
      </div>
      <br />
      <form class="user" method="POST" id="addAnalysisPaymentForm" action="javascript:void(0);" onsubmit="submitDataForms('{{ config('app.url') }}api/v1/payment/add', 'addAnalysisPaymentForm', 'addAnalysisPayment');">
        <div class="modal-body">
          <div class="col-12 form-group">
            <input type="text" class="form-control form-control-user text-white font-weight-bold" style="background-color: #143c4e" name="client_no" placeholder="Enter Client ID ..">
          </div>

          <div class="col-12 form-group">
            <input type="text" class="form-control form-control-user" name="soa_no" placeholder="Enter SOA Number ..">
          </div>

          <div class="row justify-content-center">
            <div class="col-5 form-group">
              <input type="date" class="form-control form-control-user" name="date" placeholder="Date">
            </div>
            <div class="col-6 form-group">
              <input type="number" class="form-control form-control-user" name="amount_paid" placeholder="Paid Amount...">
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-5">
              <select class="form-control form-control-user" name="payment_status" style="height: auto; padding: 1rem 0.8rem;">
                <option>Full Payment</option>
                <option>Partial Payment</option>
                <option>No Payment</option>
              </select>
            </div>
            <div class="col-6 form-group">
              <input type="number" class="form-control form-control-user" name="balance" placeholder="Balance Amount...">
            </div>
          </div>

          <div class="col-12 form-group">
            <input type="file" class="form-control form-control-user" id="formFile" accept=".jpg,.gif,.png" placeholder="00.00" style="height: auto; padding: 1.1rem 0.8rem;">
          </div>
        </div>

        <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- TEST FACILITY FORM -->
<div class="modal fade" id="addFacility" tabindex="-1" role="dialog" aria-labelledby="Facility" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info shadow text-white" style="margin: -5px; border: none;">
        <div>
          <h5 class="modal-title font-weight-light" id="Facility">REGISTER FACILITY</h5>
          <div class="text-xs fw-100 text-gray-300"><i>Please fill out the entire fields...</i></div>
        </div>
        <span class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-fw fa-times"></i></span>
      </div>
      <br />
      <form class="user" method="POST" id="addFacilityForm" action="javascript:void(0);" onsubmit="submitDataForms('{{ config('app.url') }}api/v1/facility/add', 'addFacilityForm', 'addFacility');">
        <div class="modal-body">
          <div class="col-12">
            <div class="form-group">
              <input type="text" class="form-control form-control-user text-capitilize" name="description" placeholder="Enter Description ..">
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <textarea class="form-control form-control-user" name="purpose" row="3" placeholder="Enter Purpose .."></textarea>
            </div>
          </div>

          <div class="col-12 form-group">
            <label for="exampleInputEmail1">Status</label>
            <select class="form-control form-control-user" name="status" style="height: auto; padding: 1.1rem 0.8rem;">
              <option>Active</option>
              <option>Inactive</option>
            </select>
          </div>
        </div>

        <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- TEST FACILITY FORM -->
<div class="modal fade" id="addClient" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addClient" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white font-weight-bold fs-3" id="addClient">
          Add clients
        </h5>
        <button type="button" class="btn btn-danger me-2 float-end shadow-lg" data-bs-dismiss="modal">
          X
        </button>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <div class="row justify-content-center mt-0">
              <div class="col-12 text-center p-0">
                <div class="card px-0 pt-4 pb-0 shadow">
                  <center>
                    <form class="user" id="msforms" method="POST" action="javascript:void(0);" onsubmit="submitDataForms('{{ config('app.url') }}api/v1/client/add', 'msforms', 'addClient');">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <span class="h3 font-weight-bold text-info">GENERAL INFORMATION</span>
                          <hr class="bg-dark my-3" />

                          <div class="row">
                            <div class="col-md">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="client_id" placeholder="Account number" required />
                              </div>
                            </div>
                            <div class="col-md">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="account_name" placeholder="Account name" required />
                              </div>
                            </div>

                            <div class="col-md">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name_of_owner" placeholder="Name Of Owner" required />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name_of_authorized_person" placeholder="Name OF Authorized Person" required />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <p>Type of ownership</p>
                              <div class="input-group mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" name="type_of_ownership1" type="checkbox" value="" id="type_of_ownership1" />
                                  <label class="form-check-label" for="type_of_ownership1">
                                    Single Prorietorship
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" name="type_of_ownership2" type="checkbox" value="" id="type_of_ownership2" />
                                  <label class="form-check-label" for="type_of_ownership2">
                                    Partnership
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" name="type_of_ownership3" type="checkbox" value="" id="type_of_ownership3" />
                                  <label class="form-check-label" for="type_of_ownership3">
                                    Cooperative
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" name="type_of_ownership4" type="checkbox" value="" id="type_of_ownership4" />
                                  <label class="form-check-label" for="type_of_ownership4">
                                    Corporation
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-12 col-md-6">
                          <span class="h3 font-weight-bold text-info">ADDRESS</span>
                          <hr class="bg-dark my-3" />

                          <div class="row">
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="unit_no_floor_bldg_name" placeholder="Unit No. Floor. Bldg" required />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="street_name_or_subdivision" placeholder="Street Or Subdivision" required />
                              </div>
                            </div>

                            {{-- SELECT PROVINCE START --}}
                            
                          {{-- <div class="col-md-4">
                              <div class="input-group mb-3">
                                <select class="form-control" id="province">
                                    <option text="province">Please Select</option>
                                    <input type="hidden" name="province" value="" />
                                </select>
                              </div>
                            </div> --}}
                          
                          <div class="col-md">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" name="province" placeholder="Province" required />
                            </div>
                          </div>
                          

                          {{-- SELECT CITY --}}
                          {{-- <div class="row">
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <select class="form-control" id="municipality_or_city">
                                    <option text="municipality_or_city">Please Select</option>
                                    <input type="hidden" name="municipality_or_city" value="" />
                                </select>
                              </div>
                            </div> --}}

                            

                            {{-- SELECT BARANGAY --}}
                            {{-- <div class="col-md-4">
                              <div class="input-group mb-3">
                                <!-- <input type="text" class="form-control" name="barangay_name" placeholder="Barangay Name" required />
                                <select class="form-control" id="barangay">
                                    <option text="barangay">Please Select</option>
                                    <input type="hidden" name="barangay_name" value="" />
                                </select>
                              </div>
                            </div> --}}

                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="municipality_or_city" placeholder="City" required />
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="barangay_name" placeholder="Barangay" />
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="zip_code" placeholder="Zip Code" />
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-12 col-md-6">
                          <span class="h3 font-weight-bold text-info">CONTACT INFORMATION</span>
                          <hr class="bg-dark my-3" />

                          <p>Preffered Contacts</p>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="input-group mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" id="phone" onchange="pContacts('#phone')" type="checkbox" value="" request>
                                  <label class="form-check-label" for="phone">Telephone</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md">
                              <div class="input-group mb-3">
                                <input type="tel" class="form-control" name="phone" id="phoneInput" placeholder="Telephone number" style="display: none;" />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-3">
                              <div class="input-group mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" id="mobile" onchange="pMobile('#mobile')" type="checkbox" value="" request>
                                  <label class="form-check-label" for="mobile">Mobile</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md">
                              <div class="input-group mb-3">
                                <input type="tel" class="form-control" name="mobile" id="mobileInput" placeholder="Mobile number" style="display: none;" />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-3">
                              <div class="input-group mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" id="Email" onchange="pEmail('#Email')" type="checkbox" value="" request>
                                  <label class="form-check-label" for="Email">E-mail</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md">
                              <div class="input-group mb-3">
                                <input type="tel" class="form-control" name="email" id="EmailInput" placeholder="E-mail" style="display: none;" />
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-12 col-md-6">
                          <span class="h3 font-weight-bold text-info">CLASSIFICATION</span>
                          <hr class="bg-dark my-3" />

                          <div class="row">
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="fsr_assigned" placeholder="Fsr Assigned" required />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                  <select class="form-control" name="market_segment" onchange='marketsegment(this.value)'>
                                  <option disabled selected>Market Segment</option>
                                  <option value="001 - Water Refilling Station">001 - Water Refilling Station</option>
                                  <option value="002A - Food and Beverage (Service)">002A - Food and Beverage (Service)</option>
                                  <option value="002B - Food and Beverage (Manufacturer)">002B - Food and Beverage (Manufacturer)</option>
                                  <option value="003 - Hospitality Industry">003 - Hospitality Industry</option>
                                  <option value="004A - Healthcare (Dialysis)">004A - Healthcare (Dialysis)</option>
                                  <option value="004B - Healthcare (Lying-in)">004B - Healthcare (Lying-in)</option>
                                  <option value="004C - Healthcare (Hospital)">004C - Healthcare (Hospital)</option>
                                  <option value="005 - Water Service Provider">005 - Water Service Provider</option>
                                  <option value="others">006 - others</option>
                                </select>
                              </div>
                              <input type="text" class="form-control" id="market_segment_others" name="market_segment" placeholder="Please specify" style="display:none "/>
                            </div>
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="no_of_microbiology_samples" placeholder="No. Of Microbiology Samples" required />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <select class="form-control" name="sample_collection_frequency_micro">
                                  <option disabled selected>Sample Collection Frequency (Micro)</option>
                                  <option value="Monthly">Monthly</option>
                                  <option value="Quarterly">Quarterly</option>
                                  <option value="Bi-annual">Bi-annual</option>
                                  <option value="Annual">Annual</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" name="no_of_physico_chemical_samples" placeholder="No. Of Physico-Chemical Samples" required />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <select class="form-control" name="sample_collection_frequency_pchem">
                                  <option disabled selected>Sample Collection Frequency Of (PChem)</option>
                                  <option value="Monthly">Monthly</option>
                                  <option value="Quarterly">Quarterly</option>
                                  <option value="Bi-annual">Bi-annual</option>
                                  <option value="Annual">Annual</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="input-group mb-3">
                                <select class="form-control" name="assigned_week">
                                  <option disabled selected>Assigned Week</option>
                                  <option value="Week 1">Week 1</option>
                                  <option value="Week 2">Week 2</option>
                                  <option value="Week 3">Week 3</option>
                                  <option value="Week 4">Week 4</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <hr class="bg-dark my-3 px-5" />
                      <div>
                        <input type="submit" class="btn btn-info px-5 m-2" value="Submit form" />
                      </div>
                    </form>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
