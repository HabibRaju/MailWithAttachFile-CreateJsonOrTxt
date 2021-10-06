<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;

class MailController extends Controller
{
    public function sendMail(){

        $details = [
            'name'             =>  'Habibur Rahaman Raju',
            'customer_msissdn' => 'XXXXXXXXXX- 10',
            'paid_amount'	   => '30 BDT',
            'discount_amount'  => '0 BDT',
            'recharge_amount'  => '30 BDT',
            'transaction_id'   => 'xxxxxxxxx',
            'card_type'        => 'bKash, AMEX/Visa',
            'Card_no'          => 'xxxxxxxxxxxxx'
        ];

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

        $pdf = PDF::loadView('pdfs.body',compact('attach_details'));
        Mail::to('1814351001@uits.edu.bd')->send(new TestMail($details,$pdf->output()));

        return "Mail Send Successfully";
    }
}
