<?php

namespace App\Http\Controllers;

use App\send;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Salla\ZATCA\Tags\TaxNumber;
use Salla\ZATCA\GenerateQrCode;
use Salla\ZATCA\Tags\InvoiceDate;
use Salla\ZATCA\Tags\InvoiceTaxAmount;
use Salla\ZATCA\Tags\InvoiceTotalAmount;
use Salla\ZATCA\Tags\Seller;



class InvoiceController extends Controller
{
    public function testtest(Request $request){
        $generatedString = GenerateQrCode::fromArray([
            new Seller($request->seller_name), // seller name
            new TaxNumber($request->vat_num), // seller tax number
            new InvoiceDate($request->date), // invoice date as Zulu ISO8601 @see https://en.wikipedia.org/wiki/ISO_8601
            new InvoiceTotalAmount($request->invoice_total), // invoice total amount
            new InvoiceTaxAmount($request->vat) // invoice tax amount
            // TODO :: Support others tags
        ])->toBase64();
        return view('invoice',compact('generatedString','request'));
    }
    public function invoice(Request $request)
    {}
}
