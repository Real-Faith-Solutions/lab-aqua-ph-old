<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

use App\Models\AnalysisRequest;
use Illuminate\Http\Request;
use App\Models\LabAcceptance;
use Auth;

class LabAcceptanceController extends Controller
{
    public function addLabAcceptance(Request $request)
    {
        LabAcceptance::create([
            'test_no' => $request->test_no,
            'evaluated_by' => $request->evaluated_by,
            'date' => $request->date,
            'time' => $request->time,
            'sample_condition' => $request->sample_condition,
            'remarks' => $request->remarks,
            'lab_acceptance_final_remarks' => $request->lab_acceptance_final_remarks,
            'status' => false,
            'lab_approval_id' => $request->lab_approval_id,
        ]);

        return "Success!";
    }

    public function getLabAcceptance()
    {
        $records = LabAcceptance::all();

        return $records;
    }

    public function getLabAcceptanceByStatus($status)
    {
        $records = LabAcceptance::query()
            ->where('remarks', $status);

        return $records;
    }

    public function getLabAcceptancePage(Request $request)
    {   
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = LabAcceptance::all();
        if(Auth::check()){
        return view('admin.report.lab_acceptance', compact('records'))->render();
        }
    }

    public function getLabResultPage(Request $request)
    {
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = AnalysisRequest::all();
        if(Auth::check()){
        return view('admin.report.lab_result', compact('records'))->render();
        }
    }

    public function getLabResultPrintPage(Request $request)
    {
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = LabAcceptance::all();
        if(Auth::check()){
        return view('admin.report.lab_result_print', compact('records'))->render();
        }
    }

    public function getLabAcceptancePageBetween(Request $request)
    {   
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = LabAcceptance::all()
        ->whereBetween('date', [$request->date_from, $request->date_to]);
        if(Auth::check()){
        return view('admin.report.lab_acceptance', compact('records'))->render();
        }
    }

    public function getResultPageBetween(Request $request)
    {   
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = LabAcceptance::all()
        ->whereBetween('date', [$request->date_from, $request->date_to]);

        if(Auth::check()){
        return view('admin.report.lab_result', compact('records'))->render();
        }
    }

    public function getLabApproval(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $records = LabAcceptance::query()
        ->with('AnalysisRequest')
        ->get();

        // ->toArray();
        // dd($records);
        if(Auth::check()){
        return view('admin.record.lab_approval', compact('records'))->render();
        }
    }

    public function getApprovalLabStatus(Request $request, $id){
        $data = LabAcceptance::find($id);

        if ($data->status ==0){    

            $data->status=1;
        }else{
            $data->status=0;
        }
        $data->save();   

    return Redirect::to('admin/record/lab-approval')->with('message', 'Status Has Been Changed.');   
    } 
}
