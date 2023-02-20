{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <style>
        .parent {
            display: flex;
            /* justify-content:center; */
            flex-wrap: wrap;
        }
            

        .child {
            width:10px;
            height:10px;
            background:gray;
            border:1px solid;
        }
    </style>
</head>
<body>
    <div class="parent">
        <div class="child">child 1</div>
        <div class="child">child 2</div>
        <div class="child">child 3</div>
    </div>
</body>
</html> --}}

<html>
  <head>
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      .container {
        display: flex;
      }
      .column {
        flex: 1;
        padding: 10px;
      }
      .column:first-child {
        background-color: #f7cac9;
      }
      .column:nth-child(2) {
        background-color: #92a8d1;
      }
      .column:last-child {
        background-color: #b5e7a0;
      }
    </style>

</head>
  <body>

    <div class="container">
    <div id="boxes" style="width:800px;margin-left: auto;margin-right: auto;">
    
      <div class="container">
        <div class="column">
          <h2>Column 1</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in sem ut ante suscipit volutpat ut in enim. Phasellus ut velit vitae felis ultricies euismod.</p>
        </div>
        <div class="column">
          <h2>Column 2</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in sem ut ante suscipit volutpat ut in enim. Phasellus ut velit vitae felis ultricies euismod.</p>
        </div>
        <div class="column">
          <h2>Column 3</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in sem ut ante suscipit volutpat ut in enim. Phasellus ut velit vitae felis ultricies euismod.</p>
        </div>
      </div>

    </div>
  </div>

    
  

    {{-- html2pdf script --}}

    {{-- <script type="text/javascript" src="{{ asset('js/html2pdf.bundle.min.js') }}"></script> --}}
    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}


<script>
function closeScript() {
    setTimeout(function () {
        window.open(window.location, '_self').close();
    }, 1000);
}

$(window).on('load', function () {
    var element = document.getElementById('boxes');
    var opt = {
        {{--filename: '{{Utility::customerInvoiceNumberFormat($invoice->invoice_id)}}',--}}
        filename: '{test}',
        image: {type: 'jpeg', quality: 1},
        html2canvas: {scale: 4, dpi: 72, letterRendering: true},
        jsPDF: {unit: 'in', format: 'A4'}
    };
    // html2pdf().set(opt).from(element).save().then(closeScript);
    html2pdf().set(opt).from(element).save();
});

</script>

  </body>
</html>
