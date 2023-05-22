@extends('layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-gray-800"></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Page Forms</a></li>
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
        <div class="col-12">
            <!-- MultiStep Form -->
            <div class="row justify-content-center mt-0">
                <div class="col-12 text-center p-0">
                    <div class="card px-0 pt-4 pb-0 shadow">
                        <h2 class="text-gray-800"><strong>Analysis Request Form</strong></h2>
                        <p>Fill all form field to go to next step</p>
                        <center><div class="row">
                            <div class="col-md-12 mx-0">
                                <form class="user" id="msform" method="POST" action="javascript:void(0);"
                                onsubmit="submitDataForms('{{ config('app.url') }}api/v1/analysis-request/add', 'msform', 'addLabAcceptance');">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active" id="account"><strong>Account</strong></li>
                                        <li id="personal"><strong>Sample Collection</strong></li>
                                        <li id="payment"><strong>Work Order</strong></li>
                                        <!-- <li id="payment"><strong>Payment Information</strong></li> -->
                                        <li id="confirm"><strong>Finish</strong></li>
                                    </ul>
                                    <!-- fieldsets -->
                                    @php
                                    $auto_id = uniqid();
                                    @endphp
                                    <fieldset>
                                        <span class="fs-title px-3 text-gray-600 font-weight-light">Account Information</span><br/><br/>

                                        <div class="row col-12">
                                          <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="account_id" value="{!! ($account_id ?? 0) !!}" readonly>
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="account_name" value="Enter Account Name">
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="unit_no_floor_bldg_name" value="Enter Unit No. Floor, Bldg Name">
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="tel" class="form-control form-control-user" name="stree_name_or_subdivision" value="Enter Street Name or Subdivision">
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="barangay_name" id="mobile" value="Enter Barangay Name">
                                            </div>

                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="municipality_or_city" value="Enter Municipality or City">
                                            </div>

                                        </div>

                                        <div class="row col-12">
                                          <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="zip_code" value="Enter Zip Code">
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="province" value="Enter Province">
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="contact_person" value="Enter Contact Person">
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="tel" class="form-control form-control-user" name="phone" value="Enter Phone">
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="mobile" id="mobile" value="Enter Mobile">
                                            </div>

                                            <div class="col-4 form-group">
                                                <input type="email" class="form-control form-control-user" name="email" id="email" value="Enter Email">
                                            </div>
                                        </div>

                                        <input type="button" name="next" class="next action-button bg-info px-3" style="width:auto;" value="Next Step"/>
                                    </fieldset>
                                    <fieldset>
                                        <span class="fs-title px-3 text-gray-600 font-weight-light">Sample Collection Information</span><br/><br/>

                                        <div class="row col-12">
                                            <div class="col-4 form-group">
                                                <span class="text-sm">Collector Name</span>
                                                <input type="text" class="form-control form-control-user" name="collected_by" value="Enter Collector Name ..">
                                            </div>
                                            <div class="col-4 form-group">
                                                <span class="text-sm">Date Collected</span>
                                                <input type="date" class="form-control form-control-user" name="date_collected" value="Enter Date..">
                                            </div>
                                            <div class="col-4 form-group">
                                                <span class="text-sm">Time Collected</span>
                                                <input type="time" class="form-control form-control-user" name="time_collected" value="Enter Time..">
                                            </div>

                                            <div class="col-3 form-group">
                                                <span class="text-sm">Collection Point</span>
                                                <div class="form-check">
                                                  <input class="form-check-input" id="CP" type="checkbox">
                                                  <label class="form-check-label" for="CP">Faucet</label>
                                                </div>
                                            </div>
                                            <div class="col-3 form-group">
                                                <span class="text-sm">Address of Collection Point</span>
                                                <div class="form-check">
                                                  <input class="form-check-input" id="ACP" type="checkbox">
                                                  <label class="form-check-label" for="ACP">If, "Sampling address is the same with the Account Address"</label>
                                                </div>
                                            </div>
                                            <div class="col-3 form-group">
                                                <span class="text-sm">UV Light</span>
                                                <div class="form-check">
                                                  <input class="form-check-input" id="UVlight" type="checkbox">
                                                  <label class="form-check-label" for="UVlight">N/A</label>
                                                </div>
                                            </div>
                                            <div class="col-3 form-group">
                                            <span class="text-sm">Chlorinator</span>
                                            <div class="form-check form-switch">
                                              <input class="form-check-input" id="chlorinator" type="checkbox">
                                              <label class="form-check-label" for="chlorinator">N/A</label>
                                            </div>
                                          </div>
                                        </div>


                                        <input type="button" name="previous" class="previous action-button-previous bg-black px-3" value="Previous"/>
                                        <input type="button" name="next" class="next action-button bg-info px-3" style="width:auto;" value="Next Step"/>
                                    </fieldset>
                                    <fieldset>
                                      <span class="fs-title px-3 text-gray-600 font-weight-light">Work Order Information</span><br/><br/>

                                        <div class="row col-12">
                                            <div class="col-6 form-group">
                                                <span class="text-sm">Source of Water Sample</span>
                                                <select class="form-control form-control-user" name="source_of_water_sample" style="height: auto; padding: 1.1rem 0.8rem;" placeholder="Enter Source of Water Sample..">
                                                    <option value="maynilad">Maynilad</option>
                                                    <option value="mwss">MWSS</option>
                                                    <option value="local water works">Local Water Works</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                            <div class="col-6 form-group">
                                                <span class="text-sm">Water Purpose</span>
                                                <select class="form-control form-control-user" name="water_purpose" style="height: auto; padding: 1.1rem 0.8rem;" placeholder="Enter Water Purpose..">
                                                    <option value="drinking">Drinking</option>
                                                    <option value="dialysis">Dialysis</option>
                                                    <option value="recreational">Recreational</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>



                                            <div class="col-12 form-group" style="display: flex; justify-content: center; align-items: center;">
                                            <!-- PARAMETERS FUNCTIONS -->
                                                <div class="form-check">
                                                    <input class="form-check-input" id="use_param" onchange="showHideFunction('#use_param', '#frmParams');" name="test_request" type="hidden" value="" request checked>
                                                    <!-- <label class="form-check-label" for="use_param">Please use Test Parameter under Raw Data File tab for options</label> -->
                                                    <!-- <label class="form-check-label" for="use_param">Please select Test Parameters</label> -->
                                                </div>
                                            </div>

                                            <div class="col-12 form-group" id="frmParams" style="display: block;">
                                              <div style="display: flex; justify-content: start; align-items: start;">
                                                <div class="col-6 form-group">
                                                  <span class="text-sm">Please select Test Parameters</span>
                                                    <select class="form-control form-control-user" name="test_parameter" style="height: auto; padding: 1.1rem 0.8rem;">
                                                      <option value="#micr_form_1">MICR1 - Heterophobic Plate Count (HPC)</option>
                                                      <option value="#micr_form_2">MICR2 - Thermotolerant Coliform Test</option>
                                                      <option value="#micr_form_3">MICR3 - Coliform Total</option>
                                                      <option value="#micr_form_4">MICR4 - E. Coliform Test</option>
                                                      <option value="micr_form_5">MICR5 - All 3 Mandatory Microbiological Parameters</option>
                                                      <option value="#chem_form_1">CHEM1 - PH</option>
                                                      <option value="#chem_form_2">CHEM2 - Nitrate</option>
                                                      <option value="#chem_form_3">CHEM3 - Total Dissolved Solids</option>
                                                      <option value="#chem_form_4">CHEM4 - Chlorine (Residual) as free</option>
                                                      <option value="#chem_form_5">CHEM5 - Arsenic</option>
                                                    </select>
                                                </div>

                                                    <!-- <div class="form-check">
                                                        <input class="form-check-input" id="micr1" name="test_request" onchange="showHideFunction('#micr1', '#micr_form_1');" type="checkbox" value="" request>
                                                        <label class="form-check-label" for="micr1">MICR1 - Heterotrophic Plate Count (HPC)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="micr2" name="test_request" onchange="showHideFunction('#micr2', '#micr_form_2');" type="checkbox" value="" request>
                                                        <label class="form-check-label" for="micr2">MICR2 - Thermotolerant Colifom Test</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="micr3" name="test_request" onchange="showHideFunction('#micr3', '#micr_form_3');" type="checkbox" value="" request>
                                                        <label class="form-check-label" for="micr3">MICR3 - Total Coliform</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="micr4" name="test_request" onchange="showHideFunction('#micr4', '#micr_form_4');" type="checkbox" value="" request>
                                                        <label class="form-check-label" for="micr4">MICR4 - E. coli Test</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="micr5" name="test_request" onchange="showHideMicro5('#micr5');" type="checkbox" value="" request>
                                                        <label class="form-check-label" for="micr5">MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)</label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" id="chem1" name="test_request" onchange="showHideFunction('#chem1', '#chem_form_1');" type="checkbox" value="" request>
                                                        <label class="form-check-label" for="chem1">CHEM1 - pH</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="chem2" name="test_request" onchange="showHideFunction('#chem2', '#chem_form_2');" type="checkbox" value="" request>
                                                        <label class="form-check-label" for="chem2">CHEM2 - Nitrate</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="chem3" name="test_request" onchange="showHideFunction('#chem3', '#chem_form_3');" type="checkbox" value="" request>
                                                        <label class="form-check-label" for="chem3">CHEM3 - Total Dissolved Solids</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="chem4" name="test_request" onchange="showHideFunction('#chem4', '#chem_form_4');" type="checkbox" value="" request>
                                                        <label class="form-check-label" for="chem4">CHEM4 - Chlorine (Residual), as free</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="chem5" name="test_request" onchange="showHideFunction('#chem5', '#chem_form_5');" type="checkbox" value="" request>
                                                        <label class="form-check-label" for="chem5">CHEM5 - Arsenic</label>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- MICRO -->
                                            @include('admin.page_forms.sub_form_micr')

                                            <!-- CHEMICAL -->
                                            @include('admin.page_forms.sub_form_chem')

                                            <!-- PHYISICAL -->
                                            @include('admin.page_forms.sub_form_phys')

                                        </div>


                                        <input type="button" name="previous" class="previous action-button-previous bg-black px-3" value="Previous"/>
                                        <input type="submit" class="next action-button bg-info px-3" style="width:auto;" value="Next Step"/>
                                    </fieldset>

                                    <!-- <fieldset>
                                        <span class="fs-title px-3 text-gray-600 font-weight-light">Payment Information</span><br/><br/>

                                        <div class="row col-12">
                                            <div class="col-4 form-group">
                                                <span class="text-sm">SOA Number</span>
                                                <input type="text" class="form-control form-control-user" name="collected_by" placeholder="Enter SOA number">
                                            </div>
                                            <div class="col-4 form-group">
                                                <span class="text-sm">Amount Paid</span>
                                                <input type="text" class="form-control form-control-user" name="date_collected" placeholder="Enter Amount Paid">
                                            </div>
                                            <div class="col-4 form-group">
                                                <span class="text-sm">Balance</span>
                                                <input type="text" class="form-control form-control-user" name="time_collected" placeholder="Enter Balance">
                                            </div>

                                            <div class="col-4 form-group">
                                                <span class="text-sm">Payment Status</span>
                                                <select class="form-control form-control-user" name="source_of_water_sample" style="height: auto; padding: 1.1rem 0.8rem;" placeholder="Enter Source of Water Sample..">
                                                    <option>Full payment</option>
                                                    <option>Partial payment</option>
                                                    <option>No payment</option>
                                                </select>
                                            </div>




                                          </div>



                                        <input type="button" name="previous" class="previous action-button-previous bg-black px-3" value="Previous"/>
                                        <input type="button" name="next" class="next action-button bg-info px-3" style="width:auto;" value="Next Step"/>
                                    </fieldset> -->



                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title text-center">Success !</h2>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-3">
                                                    <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row justify-content-center">
                                                <div class="col-7 text-center">
                                                    <h5>You Have Successfully Submitted New</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div></center>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
