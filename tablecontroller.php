<?php

namespace App\Http\Controllers;
use App\Http\Controllers\details;
use App\Http\Controllers\search;
use PDF;
use App\Models\detail;

use DB;
use Illuminate\Http\Request;
use App\Models\tabledetails;


class tablecontroller extends Controller
{
    //
    function show()
    {


        $details= detail::all();

        return view('tabledetails',['details'=>$details]);

    }



    public function downloadPDF()
    {
        $details= detail::all();
        $pdf = PDF::loadview('tabledetails',compact('details'));
        return $pdf->download('customers.pdf');
    }

}
