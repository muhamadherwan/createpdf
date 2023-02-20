<?php

namespace App\Http\Controllers;

use Spipu\Html2Pdf\Html2Pdf;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {

        $data = [
            'title' => 'Dynamic Title.',
            'date' => date('m/d/Y'),
//            'logo' => asset('storage/logo.png'),
        ];

//        $pdf = PDF::loadView('myPDF', $data);

        // $pdf = PDF::loadView('inv2', $data);

        // return $pdf->stream();

        // $options = new Options();
        // $options->setIsRemoteEnabled(true);


        // // current stable
        // // $html = view('inv3')->render();
        // // $pdf = PDF::loadHtml($html);

        // // addon part
        // PDF::setOptions($options);
        // $pdf = PDF::loadHtml($html);

        // // current stable part
        // $pdf->setPaper('A4',    'portrait'); // setup the paper and orientation
        // $pdf->render(); // render the html as pdf
        // return $pdf->stream('document.pdf'); // output the generated pdf to browser

        // $html = '<div style="display: flex; flex-direction: row; justify-content: space-between;">
        //     <div>First column</div>
        //     <div>Second column</div>
        //     <div>Third column</div>
        // </div>';            

        // $html = view('inv3')->render();

        // $html2pdf = new Html2Pdf();
        // // $html2pdf->writeHTML('<h1>Hello, world!</h1>');
        // $html2pdf->writeHTML($html);
        // $html2pdf->output('example.pdf');




    //    return view('inv3');
       return view('myPDF');




    }
}
