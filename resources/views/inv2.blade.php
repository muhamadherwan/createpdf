<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My PDF</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <!-- Bootstrap CSS -->
        {{-- <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
      /> --}}


      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

      {{-- <style>
        @page { 
            margin: 100px 25px;
        }   
      </style> --}}
      
</head>
<body>

  <div id="boxes" style="width:800px;margin-left: auto;margin-right: auto;">

    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-sm border border-primary">
          One of three columns
        </div>
        <div class="col-5 border border-primary">
          One of three columns
        </div>
        <div class="col-sm">
          One of three columns
        </div>
        <div class="col-sm border border-primary">
          One of three columns
        </div>
        <div class="col-5 border border-primary">
          One of three columns
        </div>
        <div class="col-sm">
          One of three columns
        </div>
        <div class="col-sm border border-primary">
          One of three columns
        </div>
        <div class="col-5 border border-primary">
          One of three columns
        </div>
        <div class="col-sm">
          One of three columns
        </div>
        
      </div>
    </div>
  
  </div>
    
  

        {{-- html2pdf script --}}

    {{-- <script type="text/javascript" src="{{ asset('js/html2pdf.bundle.min.js') }}"></script> --}}
    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}


{{-- <script>

$(window).on('load', function () {
    var element = document.getElementById('boxes');
    var opt = {
        filename: '{test}',
        image: {type: 'jpeg', quality: 1},
        html2canvas: {scale: 4, dpi: 72, letterRendering: true},
        jsPDF: {unit: 'in', format: 'A4'}
    };
    // html2pdf().set(opt).from(element).save().then(closeScript);
    html2pdf().set(opt).from(element).save();
});

</script> --}}

</body>
</html>
