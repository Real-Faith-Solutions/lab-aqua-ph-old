<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function getDashboardData()
    {
        $data = array();

        $recordClients = app(ClientController::class)->getClients();
        $recordLabResults = app(LabAcceptanceController::class)->getLabAcceptance();
        $recordFacilities = app(FacilityController::class)->getFacility();
        $recordPayments = app(PaymentController::class)->getPayments();
        $recordAnalysisRequest = app(AnalysisRequestController::class)->getAnalysisRequestData();


        $grpSampleAnalysisRequest = $recordAnalysisRequest
            ->groupBy('municipality_or_city');

        $grpParameterAnalysisRequest = $recordAnalysisRequest
            ->where('test_parameter', 'LIKE', ''.$recordAnalysisRequest.'')
            ->groupBy('municipality_or_city');

        $grpParameterCnAnalysisRequest = $recordAnalysisRequest
            ->where('test_parameter', 'LIKE', ''.$recordAnalysisRequest.'')
            ->groupBy('collector_name');

        $grpHpcRemarksCityAnalysisRequest = $recordAnalysisRequest
            ->where('hpc_remarks','FAIL')
            ->groupBy('municipality_or_city');

        $grpTcRemarksCityAnalysisRequest = $recordAnalysisRequest
            ->where('tc_remarks','FAIL')
            ->groupBy('municipality_or_city');

        return collect([
            "items" => [
                [
                    "group_header" => "Client Statistics",
                    "group_values" => [
                        [
                            "label" => "Total Clients",
                            "value" => $recordClients
                            ->count(),
                            "color" => "bg-info"
                        ],
                        [
                            "label" => "Total Regular Clients",
                            "value" => $recordClients
                                ->where('type', 'Regular')
                                ->count(),
                            "color" => "bg-warning"
                        ],
                        [
                            "label" => "Total Walk-In Clients",
                            "value" => $recordClients
                                ->where('type', 'Walk-In')
                                ->count(),
                            "color" => "bg-success"
                        ]
                    ]
                ],
                [
                    "group_header" => "Lab Statistics",
                    "group_values" => [
                        [
                            "label" => "Total Lab Tests",
                            "value" => $recordLabResults->count(),
                            "color" => "bg-success"
                        ],
                        [
                            "label" => "Total Lab Accepted",
                            "value" => $recordLabResults
                                ->where('remarks', 'Accepted')
                                ->count(),
                            "color" => "bg-primary"
                        ],
                        [
                            "label" => "Total Lab Rejected",
                            "value" => $recordLabResults
                                ->where('remarks', 'Rejected')
                                ->count(),
                            "color" => "bg-info"
                        ]
                    ]
                ],
                [
                    "group_header" => "Record Statistics",
                    "group_values" => [
                        [
                            "label" => "Total Facilities",
                            "value" => $recordFacilities->count(),
                            "color" => "bg-primary"
                        ],
                        [
                            "label" => "Total Request",
                            "value" => $recordPayments
                                ->sum('amount_paid'),
                            "color" => "bg-info"
                        ],
                        [
                            "label" => "Total Released Results",
                            "value" => $recordLabResults
                                ->where('remarks', 'Rejected')
                                ->count(),
                            "color" => "bg-warning"
                        ]
                    ]
                ]
            ],
            "charts" => [
                [
                    "group_headers" => "Client Types",
                    "labels" => ["Total Clients", "Total Regular Clients", "Total Walk-In Clients"],
                    "values" => [
                        $recordClients->count(),
                        $recordClients->where('type', 'Regular')->count(),
                        $recordClients->where('type', 'Walk-In')->count()
                    ]
                ],
                [
                    "group_headers" => "Lab Acceptance Status",
                    "labels" => ["Total Lab Tests", "Total Lab Accepted", "Total Lab Rejected"],
                    "values" => [
                        $recordLabResults->count(),
                        $recordLabResults->where('remarks', 'Accepted')->count(),
                        $recordLabResults->where('remarks', 'Rejected')->count()
                    ]
                ],
                [
                    "group_headers" => "No. of Samples per Municipality",
                    "labels" => array_keys($grpSampleAnalysisRequest->toArray()),
                    "values" => $grpSampleAnalysisRequest->map(function($samples){
                        return count($samples);
                    })->sortDesc()->values()
                ],
                [
                    "group_headers" => "No. of Micro Samples per City/Municipality",
                    "labels" => array_keys($grpParameterAnalysisRequest->toArray()),
                    "values" => $grpParameterAnalysisRequest->map(function($samples){
                        return count($samples);
                    })->sortDesc()->values()
                ],
                [
                    "group_headers" => "No. of Micro Samples per FSR",
                    "labels" => array_keys($grpParameterCnAnalysisRequest->toArray()),
                    "values" => $grpParameterCnAnalysisRequest->map(function($samples){
                        return count($samples);
                    })->sortDesc()->values()
                ],
                [
                    "group_headers" => "No. of Failed HPC Samples per City/Municipality",
                    "labels" => array_keys($grpHpcRemarksCityAnalysisRequest->toArray()),
                    "values" => $grpHpcRemarksCityAnalysisRequest->map(function($samples){
                        return count($samples);
                    })->sortDesc()->values()
                ],
                [
                    "group_headers" => "No. of Failed Total Coliform Samples per City/Municipality",
                    "labels" => array_keys($grpTcRemarksCityAnalysisRequest->toArray()),
                    "values" => $grpTcRemarksCityAnalysisRequest->map(function($samples){
                        return count($samples);
                    })->sortDesc()->values()
                ]
            ]
        ]);
    }

    public function getDashboardPage()
    {
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $data = $this->getDashboardData();
        if(Auth::check()){
        return view('admin.dashboard', compact('data'))->render();
        }
    }
}
