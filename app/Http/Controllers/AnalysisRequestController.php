<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use Auth;
use \Illuminate\Support\Facades\DB;

class AnalysisRequestController extends Controller
{
    public function addNewAnalysisRequest(Request $request){
        AnalysisRequest::create([
            'status' => false,
            'client_id' => $request->client_id ?? '',
            'account_name' => $request->account_name ?? '',
            'unit_no_floor_bldg_name' => $request->unit_no_floor_bldg_name ?? '',
            'stree_name_or_subdivision' => $request->stree_name_or_subdivision ?? '',
            'barangay_name' => $request->barangay_name ?? '',
            'municipality_or_city' => $request->municipality_or_city ?? '',
            'zip_code' => $request->zip_code ?? '',
            'province' => $request->province ?? '',
            'contact_person' => $request->contact_person ?? '',
            'phone' => $request->phone ?? '',
            'mobile' => $request->mobile ?? '',
            'email' => $request->email ?? '',
            'collected_by' => $request->collected_by ?? '',
            'date_collected' => $request->date_collected ?? '',
            'time_collected' => $request->time_collected ?? '',
            'market_segment' => $request->market_segment ?? '',
            'last_microbial_testing' => $request->last_microbial_testing ?? '',
            'last_change_of_filter' => $request->last_change_of_filter ?? '',
            'last_change_of_uv' => $request->last_change_of_uv ?? '',
            'collection_point' => $request->collection_point ?? '',
            'address_of_collection_point' => $request->address_of_collection_point ?? '',
            'uv_light' => $request->uv_light ?? '',
            'chlorinator' => $request->chlorinator ?? '',
            'faucet_condition_after_disinfection' => $request->faucet_condition_after_disinfection ?? '',
            'source_of_water_sample' => $request->source_of_water_sample ?? '',
            'water_purpose' => $request->water_purpose ?? '',
            'test_request' => $request->test_request ?? '',
            'customer_representative_name' => $request->customer_representative_name ?? '',
            'sample_id' => $request->sample_id ?? '',
            'account_id' => $request->account_id ?? '',
            'establishment' => $request->establishment ?? '',
            'estab_same_as_sampling_loc' => $request->estab_same_as_sampling_loc ?? '',
            'sampling_location_name' => $request->sampling_location_name ?? '',
            'owner' => $request->owner ?? '',
            'address' => $request->address ?? '',
            'add_same_as_sampling_add' => $request->add_same_as_sampling_add ?? '',
            'sampling_location_address' => $request->sampling_location_address ?? '',
            'city' => $request->city ?? '',
            'sampling_point' => $request->sampling_point ?? '',
            'source' => $request->source ?? '',
            'type' => $request->type ?? '',
            'purpose' => $request->purpose ?? '',
            'date_sampled' => $request->date_sampled ?? NULL,
            'time_sampled' => $request->time_sampled ?? NULL,
            'sampled_by' => $request->sampled_by ?? '',
            'date_received' => $request->date_received ?? NULL,
            'time_received' => $request->time_received ?? NULL,
            'walk_in' => $request->walk_in ?? '',
            'remarks' => $request->remarks ?? '',
            'holding_time' => $request->holding_time ?? NULL,
            'date_tested' => $request->date_tested ?? NULL,
            'time_tested' => $request->time_tested ?? NULL,
            'hpc_a' => $request->hpc_a ?? '',
            'hpc_b' => $request->hpc_b ?? '',
            'hpc_ave' => $request->hpc_ave ?? '',
            'hpc_value' => $request->hpc_value ?? '',
            'difference' => $request->difference ?? '',
            'tc_24h' => $request->tc_24h ?? '',
            'tc_48h' => $request->tc_48h ?? '',
            'bg_24h' => $request->bg_24h ?? '',
            'bg_48h' => $request->bg_48h ?? '',
            'fc_24h' => $request->fc_24h ?? '',
            'mcr2_bg_24h' => $request->mcr2_bg_24h ?? '',
            'mcr2_bg_48h' => $request->mcr2_bg_48h ?? '',
            'micr2_fc_24h' => $request->micr2_fc_24h ?? '',
            'micr2_fc_total' => $request->micr2_fc_total ?? '',
            'mcr2_tc_remarks' => $request->mcr2_tc_remarks ?? '',
            'micr3_tc_24h' => $request->micr3_tc_24h ?? '',
            'mcr3_tc_48h' => $request->mcr3_tc_48h ?? '',
            'mcr3_tc_total' => $request->mcr3_tc_total ?? '',
            'mcr3_tc_remarks' => $request->mcr3_tc_remarks ?? '',
            'micr4_results' => $request->micr4_results ?? '',
            'mcr4_remarks' => $request->mcr4_remarks ?? '',
            'chem1_final' => $request->chem1_final ?? '',
            'chem1_remarks' => $request->chem1_remarks ?? '',
            'chem2_result' => $request->chem2_result ?? '',
            'chem2_remarks' => $request->chem2_remarks ?? '',
            'chem3_result' => $request->chem3_result ?? '',
            'chem3_remarks' => $request->chem3_remarks ?? '',
            'chem4_result' => $request->chem4_result ?? '',
            'chem4_remarks' => $request->chem4_remarks ?? '',
            'chem6_result' => $request->chem6_result ?? '',
            'chem6_remarks' => $request->chem6_remarks ?? '',
            'chem5_result' => $request->chem5_result ?? '',
            'chem5_remarks' => $request->chem5_remarks ?? '',
            'color_of_the_sample' => $request->color_of_the_sample ?? '',
            'fluorescence' => $request->fluorescence ?? '',
            'reading_chem1_1' => $request->reading_chem1_1 ?? '',
            'reading_chem1_2' => $request->reading_chem1_2 ?? '',
            'reading_chem1_3' => $request->reading_chem1_3 ?? '',
            'reading_chem2_1' => $request->reading_chem2_1 ?? '',
            'reading_chem2_2' => $request->reading_chem2_2 ?? '',
            'reading_chem2_3' => $request->reading_chem2_3 ?? '',
            'iwoedr1_chem3' => $request->iwoedr1_chem3 ?? '',
            'fwoedr1_chem3' => $request->fwoedr1_chem3 ?? '',
            'worr1_chem3' => $request->worr1_chem3 ?? '',
            'iwofedr2_chem3' => $request->iwofedr2_chem3 ?? '',
            'fwofedr2_chem3' => $request->fwofedr2_chem3 ?? '',
            'worr2_chem3' => $request->worr2_chem3 ?? '',
            'ir_chem4' => $request->ir_chem4 ?? '',
            'ir1_chem5' => $request->ir1_chem5 ?? '',
            'ir2_chem5' => $request->ir2_chem5 ?? '',
            'ir3_chem5' => $request->ir3_chem5 ?? '',
            'ir1_chem6' => $request->ir1_chem6 ?? '',
            'ir2_chem6' => $request->ir2_chem6 ?? '',
            'ir3_chem6' => $request->ir3_chem6 ?? '',
            'chem6_result' => $request->chem6_result ?? '',
            'chem6_remarks' => $request->chem6_remarks ?? '',
            'ir1_chem7' => $request->ir1_chem7 ?? '',
            'ir2_chem7' => $request->ir2_chem7 ?? '',
            'ir3_chem7' => $request->ir3_chem7 ?? '',
            'chem7_result' => $request->chem7_result ?? '',
            'chem7_remarks' => $request->chem7_remarks ?? '',
            'ir1_chem9' => $request->ir1_chem9 ?? '',
            'ir2_chem9' => $request->ir2_chem9 ?? '',
            'ir3_chem9' => $request->ir3_chem9 ?? '',
            'chem9_result' => $request->chem9_result ?? '',
            'chem9_remarks' => $request->chem9_remarks ?? '',
            'ir1_chem10' => $request->ir1_chem10 ?? '',
            'ir2_chem10' => $request->ir2_chem10 ?? '',
            'ir3_chem10' => $request->ir3_chem10 ?? '',
            'chem10_result' => $request->chem10_result ?? '',
            'chem10_remarks' => $request->chem10_remarks ?? '',
            'analyzed_by' => $request->analyzed_by ?? '',
            'hpc' => $request->hpc ?? '',
            'hpc_remarks' => $request->hpc_remarks ?? '',
            'total_coliform' => $request->total_coliform ?? '',
            'tc_remarks' => $request->tc_remarks ?? '',
            'fecal_caliform' => $request->fecal_caliform ?? '',
            'fc_remarks' => $request->fc_remarks ?? '',
            'checked_by' => $request->checked_by ?? '',
            'cert_no' => $request->cert_no ?? '',
            'test_parameter' => $request->test_parameter ?? '',
            'lab_approval_id' => $request->client_id ??'',
        ]);

        return "Success!";
}

    public function getAnalysisRequests(Request $request){
        $analysisrequest = AnalysisRequest::all();

        return $analysisrequest;
    }

    public function getAnalysisRequestData(){
        $analysisrequest = AnalysisRequest::all();

        return $analysisrequest;
    }

    public function getAnalysisRequestsPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = AnalysisRequest::all();
        if(Auth::check()){
        return view('admin.record.analysis_request', compact('records'))->render();
        }
    }

    public function getWorkOrderPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = LabAcceptance::all();
        // $labApprove = DB::table('lab_acceptances')->get();
        // dd($labApprove);
        if(Auth::check()){
        return view('admin.record.lab_work_order', compact('records'))->render();
        }
    }

    public function encodeAnalysisResult(Request $request){
        $encodingLabResults = DB::table('analysis_requests')
            ->where('id', $request['workOrderTableID'])
            ->update([
                'hpc_a' => $request['mcr1_hpc_a'] ?? '',
                'hpc_b' => $request['mcr1_hpc_b'] ?? '',
                'hpc_ave' => $request['mcr1_hpc_ave'] ?? '',
                'difference' => $request['mcr1_hpc_diff'] ?? '',
                'hpc_remarks' => $request['mcr1_hpc_remarks'] ?? '',
                'hpc_value' => $request->mcr1_hpc_value ?? '',
                'mcr2_bg_24h' => $request->mcr2_bg_24h ?? '',
                'mcr2_bg_48h' => $request->mcr2_bg_48h ?? '',
                'micr2_fc_24h' => $request->micr2_fc_24h ?? '',
                'micr2_fc_total' => $request->micr2_fc_total ?? '',
                'mcr2_tc_remarks' => $request->mcr2_tc_remarks ?? '',
                'micr3_tc_24h' => $request->micr3_tc_24h ?? '',
                'mcr3_tc_48h' => $request->mcr3_tc_48h ?? '',
                'mcr3_tc_total' => $request->mcr3_tc_total ?? '',
                'mcr3_tc_remarks' => $request->mcr3_tc_remarks ?? '',
                'micr4_results' => $request->micr4_results ?? '',
                'mcr4_remarks' => $request->mcr4_remarks ?? '',
                'reading_chem1_1' => $request->reading_chem1_1 ?? '',
                'reading_chem1_2' => $request->reading_chem1_2 ?? '',
                'reading_chem1_3' => $request->reading_chem1_3 ?? '',
                'chem1_final' => $request->chem1_final ?? '',
                'chem1_remarks' => $request->chem1_remarks ?? '',
                'color_of_the_sample' => $request->color_of_the_sample ?? '',
                'fluorescence' => $request->fluorescence ?? '',
                'reading_chem2_1' => $request->reading_chem2_1 ?? '',
                'reading_chem2_2' => $request->reading_chem2_2 ?? '',
                'reading_chem2_3' => $request->reading_chem2_3 ?? '',
                'chem2_result' => $request->chem2_result ?? '',
                'chem2_remarks' => $request->chem2_remarks ?? '',
                'iwoedr1_chem3' => $request->iwoedr1_chem3 ?? '',
                'fwoedr1_chem3' => $request->fwoedr1_chem3 ?? '',
                'worr1_chem3' => $request->worr1_chem3 ?? '',
                'iwofedr2_chem3' => $request->iwofedr2_chem3 ?? '',
                'fwofedr2_chem3' => $request->fwofedr2_chem3 ?? '',
                'worr2_chem3' => $request->worr2_chem3 ?? '',
                'chem3_result' => $request->chem3_result ?? '',
                'chem3_remarks' => $request->chem3_remarks ?? '',
                'ir_chem4' => $request->ir_chem4 ?? '',
                'chem4_result' => $request->chem4_result ?? '',
                'chem4_remarks' => $request->chem4_remarks ?? '',
                'ir1_chem5' => $request->ir1_chem5 ?? '',
                'ir2_chem5' => $request->ir2_chem5 ?? '',
                'ir3_chem5' => $request->ir3_chem5 ?? '',
                'chem5_result' => $request->chem5_result ?? '',
                'chem5_remarks' => $request->chem5_remarks ?? '',
                'ir1_chem6' => $request->ir1_chem6 ?? '',
                'ir2_chem6' => $request->ir2_chem6 ?? '',
                'ir3_chem6' => $request->ir3_chem6 ?? '',
                'chem6_result' => $request->chem6_result ?? '',
                'chem6_remarks' => $request->chem6_remarks ?? '',
                'ir1_chem7' => $request->ir1_chem7 ?? '',
                'ir2_chem7' => $request->ir2_chem7 ?? '',
                'ir3_chem7' => $request->ir3_chem7 ?? '',
                'chem7_result' => $request->chem7_result ?? '',
                'chem7_remarks' => $request->chem7_remarks ?? '',
                'ir1_chem9' => $request->ir1_chem9 ?? '',
                'ir2_chem9' => $request->ir2_chem9 ?? '',
                'ir3_chem9' => $request->ir3_chem9 ?? '',
                'chem9_result' => $request->chem9_result ?? '',
                'chem9_remarks' => $request->chem9_remarks ?? '',
                'ir1_chem10' => $request->ir1_chem10 ?? '',
                'ir2_chem10' => $request->ir2_chem10 ?? '',
                'ir3_chem10' => $request->ir3_chem10 ?? '',
                'chem10_result' => $request->chem10_result ?? '',
                'chem10_remarks' => $request->chem10_remarks ?? '',
                'status' => false,
            ]);

        return $encodingLabResults;
    }

    public function getLabResultPrintPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $analysisrequest = AnalysisRequest::query()
        ->where('id', $request->id)
        ->first();
        if(Auth::check()){
        return view('admin.report.lab_result_print', compact('analysisrequest'))->render();
        }
    }

    public function getAnalysisRequestPageBetween(Request $request)
    {   
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = LabAcceptance::all()
        ->whereBetween('date', [$request->date_from, $request->date_to]);
        if(Auth::check()){
        return view('admin.report.analysis_request', compact('records'))->render();
        }
    }

    public function getLabStatus(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = AnalysisRequest::all();
        if(Auth::check()){
        return view('admin.report.lab_status', compact('records'))->render();
        }
    }

    public function getChangeLabStatus(Request $request, $id){
        $data = AnalysisRequest::find($id);

        if ($data->status ==0){    

            $data->status=1;
        }else{
            $data->status=0;
        }
        $data->save();   

    return Redirect::to('admin/report/lab-status')->with('message', 'Status Has Been Changed.');   
    } 
}
