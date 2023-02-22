<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
// use Dompdf\Options;
use Dompdf\Dompdf; // this is same as use PDF
// use PDF;
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

        
        //// current stable part
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

    public function generatePDF2()
    {
        // instance options
        // $options = new Options();
        // $options->set('isRemoteEnabled', true);
        
        // set other options, such as font path or margins
        // $options->set([
        //     'isPhpEnabled' => true,
        //     'isRemoteEnabled' => true,
        //     // 'fontDir' => '/path/to/fonts',
        //     'margin-top' => '50mm',
        //     'margin-bottom' => '50mm',    
        // ]);

        // $pdf->setOptions([
        //     'isPhpEnabled' => true,
        //     // 'fontDir' => '/path/to/fonts',
        //     'margin-top' => '20mm',
        //     'margin-bottom' => '20mm',
        // ]);        

        // create dompdf instance
        // $pdf = new Dompdf();

        // create dompdf instance with options
        $pdf = new Dompdf($options);

        // set paper size orientation
        $pdf->setPaper('A4', 'potrait');
        $pdf->setOptions(['margin-top' => '50mm']);

        // set other options, such as font path or margins
        // $pdf->setOptions([
        //     'isPhpEnabled' => true,
        //     // 'fontDir' => '/path/to/fonts',
        //     'margin-top' => '20mm',
        //     'margin-bottom' => '20mm',
        // ]);
        
        // load the HTML content
        $html = '
        <h1>Hello world
        <p>This is PDF generated with Laravel Dompdf.</p>
        </h1>';
        $pdf->loadHtml($html);

        // render and output the PDF
        $pdf->render();
        return $pdf->stream('document.pdf');
    }

    public function generatePDF3()
    {
    
        $data = [
            'title' => 'perkhidmatan penyelenggaraan fasa 11 sistem rangkaian local area network (lan)',
            'date' => date('m/d/Y'),
//            'logo' => asset('storage/logo.png'),
        ];

        // set pdf option
        // Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isPhpEnabled' => true]);
        
        
        // use if have data to pass to blade template
        // $pdf = Pdf::loadView('headerfloat', $data);
        $pdf = Pdf::loadView('test4', $data);
        
        // $pdf = Pdf::loadView('headerfloat')->setPaper('a4','potrait');
        $pdf->setPaper('A4', 'potrait');
        
        // download the template as pdf and set name as invoice
        // return $pdf->download('invoice.pdf');

        // stream the template as pdf in browser and set name as invoice
        return $pdf->stream('invoice.pdf');
        
    }

}
