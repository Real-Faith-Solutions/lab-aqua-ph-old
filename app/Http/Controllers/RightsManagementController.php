<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RightsManagement;

class RightsManagementController extends Controller
{
    public function addRightsManagement(Request $request){
        RightsManagement::create([
            'super_admin' => $request->super_admin,
            'sales_manager' => $request->sales_manager,
            'marketing_manager' => $request->marketing_manager,
            'service_coordinator' => $request->service_coordinator,
            'admin_asst' => $request->admin_asst,
            'fsr' => $request->fsr,
            'micro_analyst' => $request->micro_analyst,
            'pchem_analyst' => $request->pchem_analyst,
            'micro_manager' => $request->micro_manager,
            'pchem_manager' => $request->pchem_manager,
        ]);

        return "Creating Rights Success!";
    }

    public function getRightsManagement(){
        $rightsmanagement = RightsManagement::all();

         return $rightsmanagement;
    }

    public function getRightsManagementPage(Request $request){
        $rightsmanagement = RightsManagement::all();

        return view('admin.record.rights_management', compact('rightsmanagement'))->render();
    }
}
