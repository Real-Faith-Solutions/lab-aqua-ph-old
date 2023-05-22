<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use Auth;

class FacilityController extends Controller
{
    public function addFacility(Request $request){
        Facility::create([
            'description' => $request->description,
            'purpose' => $request->purpose,
            'status' => $request->status,
        ]);

        return "Success!";
    }

    public function getFacility(){
        $facility = Facility::all();

         return $facility;
    }

    public function getFacilityPage(Request $request){
        if(Auth::guest()){
            return redirect()->route('/');
        }
        $facility = Facility::all();
        if(Auth::check()){
        return view('admin.record.facility ', compact('facility'))->render();
        }
    }
}
