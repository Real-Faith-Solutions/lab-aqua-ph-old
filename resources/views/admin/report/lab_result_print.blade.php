
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Lab Result Format</title>
  </head>
  <style>
.underline{
	border-bottom: 1px solid black
}
.center-text{
    text-align: center;
}
.signature{
    border-top: 1px solid black;
}


  </style>
<!-- Content Header (Page header) -->

<style>
    thead tr {
        border-bottom: 1px dashed black;
        border-top: 1px dashed black;
    }

    .center-text {
        text-align: center;
    }

    .dotted {
        border-top: 1px dashed black;
    }
</style>



<section class="content shadow-lg p-5">
    <div class="container-fluid">

        <div>
            <img src="{{ asset('images/aqualab_logo.png') }}" alt="AquaLabPH" width="300" height="100" />

            <h6>Aqualab Analytical Services Inc. Operating under the name "AQUALAB PH"<br>
                Block 36 Lot 1&3 Green Estate 3 Malagasang 1-G Imus City 4103 Cavite<br>
                Tel. No.: (046) 686 3704 | Mobile No. 0919 087 4880 | Email: Info@aqualabph.com<br>
                AQUALABPH INTEGRITY IN EVERY RESULT is a registered trademark of AQUALAB PH </h6>

        </div>

        <div class="row mb-3">
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">
                <h6>Certificate No.: <strong>{{$analysisrequest->id ?? 'Null'}}</strong></h6>
            </div>
            <div class="col">

            </div>
        </div>


        <div class="row">
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">
                <h6>Account ID: <strong>{{$analysisrequest->id ?? 'Null'}}</strong></h6>
            </div>
            <div class="col">

            </div>
        </div>
        <div class="row mb-5">
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">
                <h6>Sample ID: <strong>{{$analysisrequest->id ?? 'Null'}}</strong></h6>
            </div>
            <div class="col">

            </div>
        </div>
        <div class="row">
            <div class="col">
                <h6>Requested by:</h6>
            </div>
            <div class="col">
                <strong>{{ucwords($analysisrequest->account_name) ?? 'Null'}}</strong>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        <div class="row">
            <div class="col">
                <h6>Main Source: </h6>
            </div>
            <div class="col">
                <strong>{{$analysisrequest->source_of_water_sample ?? 'Null'}}</strong>
            </div>
            <div class="col">
                <h6>Sampling Point: </h6>
            </div>
            <div class="col">
                <strong>{{$analysisrequest->sampling_point ?? 'Null'}}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h6>Water Purpose (Use): </h6>
            </div>
            <div class="col">
                <strong>{{$analysisrequest->water_purpose ?? 'Null'}}</strong>
            </div>
            <div class="col">
                <h6>Type of Water: </h6>
            </div>
            <div class="col">
                <strong>{{$analysisrequest->water_purpose ?? 'Null'}}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h6>Date/Time Collected:</h6>
            </div>
            <div class="col">
                <h6><strong>{{ date('m/d/Y', strtotime($analysisrequest->date_collected)) }}</strong>, <strong>{{ date('h:i:s A', strtotime($analysisrequest->time_collected)) }}</strong></h6>
            </div>
            <div class="col">
                <h6>Date/Time Received: </h6>
            </div>
            <div class="col">
                <strong>{{ date('m/d/Y', strtotime($analysisrequest->date_received)) }}</strong>, <strong>{{ date('h:i:s A', strtotime($analysisrequest->time_received)) }}</strong>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <h6>Collected by:</h6>
            </div>
            <div class="col">
                <h6><strong>{{ucwords($analysisrequest->collected_by) ?? ''}}</strong></h6>
            </div>
            <div class="col">
                <h6>Date/Time Tested: </h6>
            </div>
            <div class="col">
                <strong>{{ date('m/d/Y', strtotime($analysisrequest->date_tested)) }},</strong> <strong>{{ date('h:i:s A', strtotime($analysisrequest->time_tested)) }}</strong>
            </div>
        </div>
        <div class="center-text"><b>CERTIFICATION OF MICROBIOLOGICAL ANALYSIS</b></div>
        <div>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">PARAMETER</th>
                        <th scope="col">METHOD OF ANALYSIS</th>
                        <th scope="col">RESULT</th>
                        <th scope="col">LIMIT</th>
                        <th scope="col">REMARKS</th>
                    </tr>
                </thead>
                <tbody>
                    @if($analysisrequest->test_parameter == '#micr_form_1')
                        <tr>
                            <td>MICR1 - Heterotrophic Plate Count (HPC)</td>
                            <td>SMEWW 9215 B. Pour Plate Method</td>
                            <td>
                                {{ $analysisrequest->hpc_ave }}
                            </td>
                            <td>
                                {{ $analysisrequest->hpc_value }}
                            </td>
                            <td>
                                {{ $analysisrequest->hpc_remarks }}
                            </td>
                        </tr>
                    @endif
                    @if($analysisrequest->test_parameter == '#micr_form_2')
                        <tr>
                            <td>MICR2 - Thermotolerant Colifom Test, cfu/mL</td>
                            <td>SMEWW 9221 Multiple Tube Fermentation Technique</td>
                            <td>
                                {{ $analysisrequest->mcr2_bg_24h }}
                            </td>
                            <td>
                                {{ $analysisrequest->micr2_fc_total }}
                            </td>
                            <td>
                                {{ $analysisrequest->mcr2_tc_remarks }}
                            </td>
                        </tr>
                    @endif
                    @if($analysisrequest->test_parameter == '#micr_form_3')
                        <tr>
                            <td>MICR3 - Total Coliform</td>
                            <td>SSMEWW 9221 Multiple Tube Fermentation Technique</td>
                            <td>
                                {{ $analysisrequest->micr3_tc_24h }}
                            </td>
                            <td>
                                {{ $analysisrequest->mcr3_tc_total }}
                            </td>
                            <td>
                                {{ $analysisrequest->mcr3_tc_remarks }}
                            </td>
                        </tr>
                    @endif
                    @if($analysisrequest->test_parameter == '#micr_form_4')
                        <tr>
                            <td>MICR4 - E. coli Test</td>
                            <td>SMEWW 9223 Enzyme Substrate Coliform Test</td>
                            <td>
                                {{ $analysisrequest->hpc_ave  ?? '0'}}
                            </td>
                            <td>
                                {{ $analysisrequest->micr4_results }}
                            </td>
                            <td>
                                {{ $analysisrequest->mcr4_remarks }}
                            </td>
                        </tr>
                    @endif
                    @if($analysisrequest->test_parameter == 'micr_form_5')
                        <tr>
                            <td>MICR5 - All three (3) Mandatory Microbiological Parameters (PNSDW 2017/DOH AO 2013-003)</td>
                            <td>"1. Heterotrophic Plate Count  - SMEWW 9215 B. Pour Plate Method
                                2. Total Coliform - SMEWW 9221 Multiple Tube Fermentation Technique
                                3. Thermotolerant Coliform (E. coli) - SMEWW 9221 Multiple Tube Fermentation Technique"
                            </td>
                            <td>
                                {{ $analysisrequest->hpc_ave }}
                            </td>
                            <td>
                                {{ $analysisrequest->difference }}
                            </td>
                            <td>
                                {{ $analysisrequest->hpc_remarks }}
                            </td>
                            <td>
                                {{ $analysisrequest->mcr2_bg_24h }}
                            </td>
                            <td>
                                {{ $analysisrequest->micr2_fc_total }}
                            </td>
                            <td>
                                {{ $analysisrequest->mcr2_tc_remarks }}
                            </td>
                            <td>
                                {{ $analysisrequest->micr3_tc_24h }}
                            </td>
                            <td>
                                {{ $analysisrequest->mcr3_tc_total }}
                            </td>
                            <td>
                                {{ $analysisrequest->mcr3_tc_remarks }}
                            </td>
                        </tr>
                    @endif
                    @if($analysisrequest->test_parameter == '#chem_form_1')
                        <tr>
                            <td>CHEM1 - pH</td>
                            <td>SMEWW 4500-H+ B. Electrometric Method</td>
                            <td>
                                {{ $analysisrequest->reading_chem1_1 }}
                            </td>
                            <td>
                                {{ $analysisrequest->chem1_final }}
                            </td>
                            <td>
                                {{ $analysisrequest->chem1_remarks }}
                            </td>
                        </tr>
                    @endif
                    @if($analysisrequest->test_parameter == '#chem_form_2')
                        <tr>
                            <td>CHEM2 - Nitrate</td>
                            <td>SMEWW 4500-NO3- E. Cadmium Reduction Method</td>
                            <td>
                                {{ $analysisrequest->reading_chem2_1 }}
                            </td>
                            <td>
                                {{ $analysisrequest->chem2_result }}
                            </td>
                            <td>
                                {{ $analysisrequest->chem2_remarks }}
                            </td>
                        </tr>
                    @endif
                    @if($analysisrequest->test_parameter == '#chem_form_3')
                        <tr>
                            <td>CHEM3 - Total Dissolved Solids</td>
                            <td>SMEWW 2540 C. Total Dissolved Solids Dried at 180°C</td>
                            <td>
                                {{ $analysisrequest->iwoedr1_chem3 }}
                            </td>
                            <td>
                                {{ $analysisrequest->chem3_result }}
                            </td>
                            <td>
                                {{ $analysisrequest->chem3_remarks }}
                            </td>
                        </tr>
                    @endif
                    @if($analysisrequest->test_parameter == '#chem_form_4')
                        <tr>
                            <td>CHEM4 - Chlorine (Residual), as free</td>
                            <td>DPD Colorimetric Method</td>
                            <td>
                                {{ $analysisrequest->ir_chem4 }}
                            </td>
                            <td>
                                {{ $analysisrequest->chem4_result }}
                            </td>
                            <td>
                                {{ $analysisrequest->chem4_remarks }}
                            </td>
                        </tr>
                    @endif
                    @if($analysisrequest->test_parameter == '#chem_form_5')
                        <tr>
                            <td>CHEM5 - Arsenic</td>
                            <td>SMEWW 3113 B. Elelctrothermal Atomic Absorption Spectrometric Method</td>
                            <td>
                                {{ $analysisrequest->ir1_chem5 }}
                            </td>
                            <td>
                                {{ $analysisrequest->chem5_result }}
                            </td>
                            <td>
                                {{ $analysisrequest->chem5_remarks }}
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="dotted mb-3">
        </div>
        <div class="row">
            <div class="col-md-3">
                <h6>Remarks:</h6>
            </div>
            <div class="col-md-9">
                <p>{{ $analysisrequest->remarks }} <br>
                    Results of examination are specifically related to samples as received. <br>
                    Pursuant tp PNSDW 2017, sample was collected according to prescribed aseptic technique and was contained and transported in a sterilized container at controlled temperature by Aqualab PH trained personnel. <br>
                    Sample analysis was conducted within eight (8) hours as prescribed by the standards.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h6>Reference/s:</h6>
            </div>
            <div class="col-md-9">
                <p>Method of Analysis are based on the Standard Methods for the Examination of Water and Wastewater (SMEWW), American Public Health Association, American Water Works Assocation, 22nd Edition (2012); Parameters and Limits are based on Philippine National Standards for Drinking Water (2017).<br>
                    Thermotolerant Coliform - also Fecal Coliform; MPN/100mL - Most Probable Number per 100mL of sample; cfu - Colony Forming Unit per 1mL of sample.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h6>Note/s:</h6>
            </div>
            <div class="col-md-9">
                <p>Comma (,) is used in this report to emphasize presentation of decimal separation/s.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row mt-5">
            <div class="col">
                <h6></h6>
            </div>
            <div class="col">
                <h6>CHLOE JOY C. GABAN, RMicro<br>
                    Senior Microbiologist<br>
                    PAM Reg. No. 15-00250 RM<br>
                    DOH-NRL Cert. No. WMLA-18-0698</h6>
            </div>
            <div class="col">
                <h6>PAULO ANTONIO E. CLEMENTE, MD, DPSP<br>
                    Head of Laboratory<br>
                    PRC Reg. No. 0113927</h6>
            </div>
            <div class="col">

            </div>
        </div>





    </div>

</section>
</body>
</html>