<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function addPayment(Request $request){
        Payment::create([
            'client_no' => $request->client_no,
            'soa_no' => $request->soa_no,
            'date' => $request->date,
            'amount_paid' => $request->amount_paid,
            'balance' => $request->balance,
            'payment_status' => $request->payment_status,
        ]);

        return "Payment Success!";
    }

    public function getPayments(){
        $payment = Payment::all();

         return $payment;
    }

    public function getPaymentsInfoPage(Request $request){
        $payment = Payment::all();

        return view('admin.record.payment_info', compact('payment'))->render();
    }

    // public function getPaymentsInfoPage(Request $request){
    //     $payment = Payment::all();

    //      return $payment;
    // }
}
