<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersRole;

class UsersRoleController extends Controller
{
    public function addUsersRole(Request $request){
        UsersRole::create([
            'add_client_account' => $request->add_client_account,
            'add_analysis_request' => $request->add_analysis_request,
            'lab_acceptance' => $request->lab_acceptance,
            'lab_work_order' => $request->lab_work_order,
            'lab_result' => $request->lab_result,
            'analysis_request' => $request->analysis_request,
            'facility' => $request->facility,
            'client_list' => $request->client_list,
            'user_list' => $request->user_list,
            'roles' => $request->roles,
        ]);

        return "Role Success!";
    }

    public function getUsersRole(){
        $UsersRole = UsersRole::all();

         return $UsersRole;
    }

    public function getUsersRolePage(Request $request){
        $UsersRole = UsersRole::all();

        return view('admin.user-management.add_role', compact('UsersRole'))->render();
        
        $role = app(App\Http\Controllers\CustomAuthController::class)->getUsersRolePage($allUsers);
    }

}
