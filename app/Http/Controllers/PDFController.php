<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;


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


        // $options = new Options();
        // $options->set('isPhpEnabled', true); // enable inline PHP code

        // // current stable
        $html = view('headerfloat')->render();
        $pdf = PDF::loadHtml($html);

        
        // // current stable part
        $pdf->setPaper('A4','portrait'); // setup the paper and orientation

        // set the margin-top for the content area
        $pdf->setOptions(['margin-top' => '50mm']);

        $pdf->render(); // render the html as pdf
        return $pdf->stream('preview.pdf'); // if want to output the generated pdf to browser (preview)

        
        // return view('headerfloat');






        // return $pdf->download('download.pdf'); // if want to auto download the generated pdf

        // return view('float');
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




        // return view('bts');
        //    return view('inv2');    
            //   return view('inv3');
           //    return view('myPDF');
      
           

    }
}
