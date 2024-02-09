<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Invoice;
use App\Models\Passenger;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use Dompdf\Dompdf;
use Dompdf\Options;



class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function company($id)
    {
        $company_data = Company::where('id', $id)->first();

        return view('invoice', compact('company_data'));
    }
    public function generatePDF(Request $request)
    {
        $invoiceDate = ([
            'company_id' => $request->company_id,
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

        $invoice_id = $invoice->id;
        return redirect()->route('downloadPDF', ['id' => $invoice_id]);
    }

    public function download($id) {
        $invoice_id = $id;

        $invoice_data = Invoice::where('id', $invoice_id)->first();
        $company_data = Company::where('id', $invoice_data->company_id)->first();
        $passenger_data = Passenger::where('invoice_id', $invoice_data->id)->get();

        // Render the view using Laravel's view system
        $html = View::make('download', compact('company_data', 'invoice_data', 'passenger_data'))->render();

        $options = new Options();
        // Set the default font
        $options->set('defaultFont', 'Arial');

        $pdf = new Dompdf($options);
        $pdf->loadHtml($html);

        // Render the PDF
        $pdf->render();

        return $pdf->stream('invoice.pdf');
    }


}
