<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class Empcontroller extends Controller
{
    public function getAllCustomers()

    {
        $customers = Customer::all();
        return view('tabledetails', compact('tabledetails'));
    }
}
