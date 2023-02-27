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

//    public function generatePDF3()
//    {
//
//        $data = [
//            'title' => 'Perkhidmatan penyelenggaraan fasa 11 sistem rangkaian local area network (lan).',
//            'date' => date('m/d/Y'),
////            'logo' => asset('storage/logo.png'),
//        ];
//
//        // set pdf option
//        // Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
//
//        // Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isPhpEnabled' => true]);
//
//
//        // use if have data to pass to blade template
//        // $pdf = Pdf::loadView('headerfloat', $data);
//
//        $pdf = Pdf::loadView('test5', $data);
//
//        // exp to set multiple setting:
//        //   // set the options for the PDF instance
//        //   $pdf->setOption([
//        //     'enable_php' => true,
//        //     'javascript_delay' => 1000, // delay in milliseconds to allow JavaScript to run before generating PDF
//        //     'javascript' => $javascript, // the JavaScript script to add footer to the last page
//        // ]);
//
//        $pdf->set_option("enable_php", true);
//        // $pdf->set_options(
//        //     [
//        //         'enable_php' => true,
//        //         'defaultFont' => 'verdana',
//        //     ]);
//
//
//        // $pdf = Pdf::loadView('headerfloat')->setPaper('a4','potrait');
//        $pdf->setPaper('A4', 'potrait');
//
//        // download the template as pdf and set name as invoice
//        // return $pdf->download('invoice.pdf');
//
//        // stream the template as pdf in browser and set name as invoice
//        return $pdf->stream('invoice.pdf');
//
//    }



    public function generatePDF4()
    {

    $data = [
        'title' => 'My PDF Document',
        'pageCount' => null // Initialize pageCount to null
    ];

    $pdf = \PDF::loadView('test6', $data);

    // set pdf options
    $pdf->set_option("enable_php", true);
    $pdf->setPaper('A4', 'portrait');

    // $canvas = $pdf->getDompdf()->get_canvas();
    // $cpdf = $canvas->get_cpdf();
    // if ($cpdf === null) {
    //     // If there was an error, set an error message
    //     $data['errorMessage'] = 'Error: ' . $canvas->get_openssl_error();
    // } else {
    //     // If there was no error, get the page count
    //     $pageCount = $canvas->get_page_number();
    //     $data['pageCount'] = $pageCount; // Set pageCount in data array
    // }


    // $this->dompdf->stream("test.pdf", array("Attachment" => 0));

    $pageCount = $pdf->getDompdf()->get_canvas()->get_page_number();
    $data['pageCount'] = $pageCount; // Set pageCount in data array


    // set Page-Count header and other options
    $options = [
        'Page-Count' => $pageCount,
        'Content-Disposition' => 'attachment; filename="my-pdf-document.pdf"'
    ];

    // stream the pdf to the browser with additional options
    return $pdf->stream($options);

    }

    public function generatePDF3()
    {
        $data = [
            'customerName' => 'Lembaga Peperiksaan',
            'customerAddress1' => 'Jln Tunku Abdul Halim',
            'customerAddress2' => 'Kompleks Kerajaan, 540480 Kuala Lumpur',
            'customerAddress3' => 'Wilayah Persekutuan Kuala Lumpur',
            'invoiceNo' => 'INV-230101-001',
            'poNo' => 'PO-200101-001',
            'date' => date('m/d/Y'),
            'due' => '30 Days',
            'title' => 'Perkhidmatan penyelenggaraan fasa 11 sistem rangkaian local area network (LAN).',
            'items' => [1, 2],
//            'items' => [1, 2, 3, 4, 5],
            'subtotal' => '1,000,000.00',
            'totalSst' => '1,000,000.00',
            'grandTotal' => '1,000,000.00',
            'sign' => 4
        ];

        // use if have data to pass to blade template
        $pdf = Pdf::loadView('test6', $data);

        // exp to set multiple setting:
        $pdf->set_option("enable_php", true);
        // $pdf->set_options(
        //     [
        //         'enable_php' => true,
        //         'defaultFont' => 'verdana',
        //     ]);

        $pdf->setPaper('A4', 'potrait');

        // download the template as pdf and set name as invoice
        // return $pdf->download('invoice.pdf');

        // stream the template as pdf in browser and set name as invoice
        return $pdf->stream('invoice.pdf');
    }
}
