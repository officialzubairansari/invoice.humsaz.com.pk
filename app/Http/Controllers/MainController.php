<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use App\Models\Invoice;
use App\Models\Passenger;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function companyAlhafiz()
    {
        $company_name_english = 'Alhafiz VIP Transport';
        $company_name_arabic = 'شرکۃ ال العالی لنقل البری';
        $number = '03222138989';
        $logo = 'test';
        return view('invoice', compact('company_name_english', 'company_name_arabic', 'logo'));
    }

    public function companyTalabAlali()
    {
        $company_name_english = 'High Demand Land Transport';
        $company_name_arabic = 'شرکۃ الطلب العالی لنقل البری';
        $number = '03222138989';

        $logo = 'test';
        return view('invoice', compact('company_name_english', 'company_name_arabic', 'logo'));
    }
    public function generatePDF(Request $request)
    {
        $invoiceDate = ([
            'no_al_sayarah' => $request->no_al_sayarah,
            'raqam_al_lawha' => $request->raqam_al_lawha,
            'ism_al_saiq' => $request->ism_al_saiq,
            'raqam_al_iqama' => $request->raqam_al_iqama,
            'raqam_al_hatif' => $request->raqam_al_hatif,
            'al_tarekh' => $request->al_tarekh,
            'al_malahizat' => $request->al_malahizat
        ]);

        $invoice = Invoice::create($invoiceDate);

        $passengerData = ([
            'ism_al_zaif' => $request->ism_al_zaif,
            'raqam_al_jawaz' => $request->raqam_al_jawaz,
            'al_jinsiyah' => $request->al_jinsiyah
        ]);

        $passengerCount = count($passengerData['ism_al_zaif']);

        for ($i = 0; $i < $passengerCount; $i++) {
            Passenger::create([
                'invoice_id' => $invoice->id,
                'ism_al_zaif' => $passengerData['ism_al_zaif'][$i],
                'raqam_al_jawaz' => $passengerData['raqam_al_jawaz'][$i],
                'al_jinsiyah' => $passengerData['al_jinsiyah'][$i],
            ]);
        }
    }


}
