<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {
            try  {
                $donation = new Donation;
                $donation->currency = $request->input('currency');
                $donation->amount = $request->input('amount');
                $donation->type = $request->input('type');
                $donation->donator_name = $request->input('name');
                $donation->donator_number = $request->input('phone');
                $donation->donator_email = $request->input('email');
                $donation->status = "NOT PAID";
                $donation->save();
                return view("donation", ["message" => "success"]);
            } catch(Exception $e) {
                return view("donation", ["message" => $e->getMessage()]);
            }
        } else {
            return view("donation", ["message" => null]); 
        }
    }
}
