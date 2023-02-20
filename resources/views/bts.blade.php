<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Hello, world!</title>

    <style>

      /* @media print {
        @page {
          size: A4 portrait;
          margin: 1cm;
        }
      } */

      /* @page {
          size: A4 portrait;
            margin: 100px 25px;
            /* margin: 1cm; */
        }

        .pageheader {
          position: fixed;
          top: -60px;
            left: 0px;
            right: 0px;
            height: 80px;
        } */

    </style>
  </head>
  <body>
    <div id="boxes">

        <header class="pageheader">
            <div class="container bg-primary">
              <div class="row bg-light">
                <div class="col-1 bg-primary border border-dark">col 1</div>
                <div class="col-auto bg-success border border-dark">
                  col 1safsafsasfasdfasdsfdfadsdfaf
                  <br>
                  afasdfd
                </div>
                <div class="col bg-danger border border-dark">col 1</div>
              </div>
        
              <div class="row bg-light">
                <div class="col-6 bg-warning border border-dark">col2a</div>
                <div class="col-6 bg-secondary border border-dark">col2b</div>
              </div>
            </div>
          </header>
      
             <!-- Page content goes here -->
             <div class="container mt-3">
              <h1>My PDF</h1>
              <p>This is the content of my PDF.</p>
          </div>
          <!-- END Content section -->

          
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    {{-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
$(window).on('load', function () {
    var element = document.getElementById('boxes');
    var opt = {
        {{--filename: '{{Utility::customerInvoiceNumberFormat($invoice->invoice_id)}}',--}}
        filename: '{test}',
        image: {type: 'jpeg', quality: 1},
        html2canvas: {scale: 4, dpi: 72, letterRendering: true},
        jsPDF: {unit: 'in', format: 'A4'}
    };
    html2pdf().set(opt).from(element).save();
});

</script>

</body>
</html>
