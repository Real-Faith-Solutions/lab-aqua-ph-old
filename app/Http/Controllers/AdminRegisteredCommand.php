<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AdminRegisteredCommand extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $users = DB::table('users')->get();
        return view('admin.user-management.user_update_status',['users' => $users]);
    }


    public function status(Request $request, $id){
        $data = User::find($id);

        if ($data->status ==0){    

            $data->status=1;
        }else{
            $data->status=0;
        }
        $data->save();

    return Redirect::to('admin/user-management/srole')->with('message', $data->name.' Status Has Been Changed.');   
    } 
}
