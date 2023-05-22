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
                                        <li id="step-1" class="active"><strong>Account</strong></li>
                                        <li id="step-2"><strong>Sample Collection</strong></li>
                                        <li id="step-3"><strong>Work Order</strong></li>
                                        <!-- <li id="payment"><strong>Payment Information</strong></li> -->
                                        <li id="step-4"><strong>Finish</strong></li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <span class="fs-title px-3 text-gray-600 font-weight-light">Account Information</span><br/><br/>

                                        <div class="row col-12">

                                            {{-- <div class="col-4 form-group" style="display: none;">
                                                <input type="text" class="form-control form-control-user" name="client_id" placeholder="Account ID" readonly>
                                            </div> --}}
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" id="account_name" name="account_name" placeholder="Account Name" required>
                                            </div>
                                            {{-- <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="id" placeholder="ID" readonly required>
                                            </div> --}}
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="client_id" placeholder="Account ID" readonly required>
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="unit_no_floor_bldg_name" placeholder="Unit No. Floor, Bldg Name" readonly required>
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="street_name_or_subdivision" placeholder="Street Name or Subdivision" readonly required>
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="barangay_name"  placeholder="Barangay Name" readonly required>
                                            </div>

                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="municipality_or_city" placeholder="Municipality or City" readonly required>
                                            </div>

                                        </div>

                                        <div class="row col-12">
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="contact_person" placeholder="Contact Person" >
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="zip_code" placeholder="Zip Code" readonly required>
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="province" placeholder="Province" readonly required>
                                            </div>
                                            
                                            <div class="col-4 form-group">
                                                <input type="tel" class="form-control form-control-user" name="phone" placeholder="Phone" readonly required>
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="text" class="form-control form-control-user" name="mobile" placeholder="Mobile" readonly required>
                                            </div>
                                            <div class="col-4 form-group">
                                                <input type="email" class="form-control form-control-user" name="email"  placeholder="Email" readonly required>
                                            </div>

                                        </div>

                                        <input type="button" name="next" class="next action-button bg-info px-3" style="width:auto;" value="Next Step"/>
                                    </fieldset>
                                    <fieldset>
                                        <span class="fs-title px-3 text-gray-600 font-weight-light">Sample Collection Information</span><br/><br/>

                                        <div class="row col-12">
                                            <div class="col-4 form-group">
                                                <span class="text-sm">Collector Name</span>
                                                <input type="text" class="form-control form-control-user" name="collected_by" placeholder="Enter Collector Name .." >
                                            </div>
                                            <div class="col-4 form-group">
                                                <span class="text-sm">Date Collected</span>
                                                <input type="date" class="form-control form-control-user" name="date_collected" placeholder="Enter Date.." >
                                            </div>
                                            <div class="col-4 form-group">
                                                <span class="text-sm">Time Collected</span>
                                                <input type="time" class="form-control form-control-user" name="time_collected" placeholder="Enter Time.." >
                                            </div>

                                            <div class="col form-group">
                                                <span class="text-sm">Collection Point</span>


                                                <div class="form-check">
                                                  <input class="form-check-input" id="Faucet" name="collection_point" type="checkbox" onchange="checkingBox();"> 
                                                  <label class="form-check-label" for="Faucet">Faucet</label>
                                                  <br>
                                                  <input class="form-check-input" id="Pump" name="collection_point" type="checkbox" onchange="checkingBox();">
                                                  <label class="form-check-label" for="Pump">Pump</label>
                                                  <br>
                                                  <input class="form-check-input" id="CPOthers" name="collection_point" type="checkbox" onclick="checkingBox()" onchange="collectionPointOthers('#CPOthers')" >
                                                  <label class="form-check-label" for="CPOthers">Others</label>
                                                  <br>
                                                  <input type="text" class="form-control" id="collection_point_others" name="sampling_point_others" placeholder="if others, please specify..." style="display:none "/>
                                                </div>
                                               


                                            </div>
                                            <div class="col form-group">
                                                <span class="text-sm">Address of Collection Point</span>
                                                <div class="form-check">
                                                  <input class="form-check-input" id="ACP" type="checkbox" name="sampling_location_address" onchange="checkingBox1();"> 
                                                  <label class="form-check-label" for="ACP">Sampling address is the same with the Account Address</label>
                                                  <br>
                                                  <input class="form-check-input" id="addressCPOthers1" name="sampling_location_address" type="checkbox" onclick="checkingBox1();" onchange="addressCollectionPointOthers('#addressCPOthers1')">
                                                  <label class="form-check-label" for="addressCPOthers1">Others</label>
                                                  <br>
                                                  <input type="text" class="form-control" id="addressCPOthers" name="sampling_location_address_others" placeholder="if others, please specify..." style="display:none "/>
                                                </div>
                                            </div>
                                            <div class="col form-group">
                                                <span class="text-sm">UV Light</span>
                                                <div class="form-check">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="uvlight" id="UVLight_na" type="radio">
                                                <label class="form-check-label" for="UVLight_na">N/A</label>
                                                <br/>
                                                <input class="form-check-input" name="uvlight" id="UVLight_on" type="radio">
                                                <label class="form-check-label" for="UVLight_on">ON</label>
                                                <br/>
                                                <input class="form-check-input" name="uvlight" id="UVLight_off" type="radio">
                                                <label class="form-check-label" for="UVLight_off">OFF</label>
                                            </div>
                                                </div>
                                            </div>

                                            <div class="col form-group">
                                                <span class="text-sm">Chlorinator</span>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="chlorinator" id="chlorinator_na" type="radio">
                                                    <label class="form-check-label" for="chlorinator_na">N/A</label>
                                                    <br/>
                                                    <input class="form-check-input" name="chlorinator" id="chlorinator_on" type="radio">
                                                    <label class="form-check-label" for="chlorinator_on">ON</label>
                                                    <br/>
                                                    <input class="form-check-input" name="chlorinator" id="chlorinator_off" type="radio">
                                                    <label class="form-check-label" for="chlorinator_off">OFF</label>
                                                </div>
                                            </div>

                                            <div class="col form-group">
                                                <span class="text-sm">Faucet Condition after Disinfection</span>
                                                <input type="text" class="form-control form-control-user" name="faucet_condition" placeholder="" >
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
                                                <select class="form-control form-control-user" onchange='SourceWaterSample(this.value)' name="source_of_water_sample" style="height: auto; padding: 1.1rem 0.8rem;" placeholder="Enter Source of Water Sample.." required>
                                                    <option value="Maynilad">Maynilad</option>
                                                    <option value="MWSS">MWSS</option>
                                                    <option value="Local Water Works">Local Water Works</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                <br/>
                                                <input type="text" class="form-control" id="Source_Water_Sample_Others" name="source_water_sample_others" placeholder="if others, please specify..." style="display:none "/>
                                            </div>
                                            <div class="col-6 form-group">
                                                <span class="text-sm">Water Purpose</span>
                                                <select class="form-control form-control-user" onchange='WaterPurpose(this.value)' name="water_purpose" style="height: auto; padding: 1.1rem 0.8rem;" placeholder="Enter Water Purpose.." required>
                                                    <option value="Drinking">Drinking</option>
                                                    <option value="Dialysis">Dialysis</option>
                                                    <option value="Recreational">Recreational</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                <br/>
                                                <input type="text" class="form-control" id="Water_Purpose_Others" name="water_purpose_others" placeholder="if others, please specify..." style="display:none "/>
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
                                                  <span class="text-sm">Test Parameters</span>
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
                                                      <option value="#chem_form_6">CHEM6 - Cadmium</option>
                                                      <option value="#chem_form_7">CHEM7 - Lead</option>
                                                      <option value="#chem_form_8">CHEM8 - All Twenty (20) Mandatory Chemical Parameters (DOH AO
                                                        2013-003 Dialysis Water)</option>
                                                      <option value="#chem_form_9">CHEM9 - Iron</option>
                                                      <option value="#chem_form_10">CHEM10 - Manganese</option>
                                                      <option value="#phys_1">PHYS1 - Appearance</option>
                                                      <option value="#phys_2">PHYS2 - Odor</option>
                                                      <option value="#phys_3">PHYS3 - Color, apparent</option>
                                                      <option value="#phys_4">PHYS4 - Turbidity</option>
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
