<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function index(){
        $attach_details = [
            'address' => "XXXXXXXXXX",
            'date'    => " " ,
            'customer_info' => "",
            'phone_number'  => "",
            'email_address'     => "",
            'invoice_id' =>"",
            'order_id'   => "",
            'mobile_recharge' => "BDT 30.00",
            'sub_total'       => "BDT 30.00",
            'discount'        => "BDT 30.00",
            'total'           => "BDT 30.00 ",
        ];
        return view('pdfs.body',compact('attach_details'));
    }

    public function download(){
        $attach_details = [
            'address' => "XXXXXXXXXX",
            'date'    => " " ,
            'customer_info' => "",
            'phone_number'  => "",
            'email_address'     => "",
            'invoice_id' =>"",
            'order_id'   => "",
            'mobile_recharge' => "BDT 30.00",
            'sub_total'       => "BDT 30.00",
            'discount'        => "BDT 30.00",
            'total'           => "BDT 30.00 ",
        ];

        $pdf     = PDF::loadView('pdfs.body',compact('attach_details'));
        $content = $pdf->download()->getOriginalContent();

        Storage::put('public/pdf/invoice.pdf', $pdf->output());

        return "Successfully";
    }
}
