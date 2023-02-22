{{-- @php
    // $items = [1,2,3,4,5];
    $items = [1,2];
@endphp --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <style>
        
        /* set the page margin for pdf or print */
        @page {
            /* margin: 150px 50px 80px 50px; */
            margin: 150px 50px 100px 50px; 
        }

        /* header section */
        header {
            /* no need to set height */
            position: fixed;
            top: -100px;
            width: 100%;
            /* font-size: 12pt; */
            /* font-size: 11pt; */
            font: 11pt Georgia, "Times New Roman", Times, serif;
            /* line-height: 1.3; */
            background: #fff !important;
            color: #000;
        }

        /* header table */
        table {
            border-collapse: collapse;
            width: 100%;
            /* background: #f6f8ff; */
        }

        td {
            /* padding: 16px; */
            /* border:1px solid #777; */
        }

        .header_logo {
            width:15%;
            padding-bottom: 20px;
            /* background: palegreen; */
        }

        .logo {
            width: 167px;
            height: 135px;  
        }

        .header_company {
            width:30%;
            text-align: left;
            vertical-align: top;
            padding-top: 10px;
            padding-left: 10px; 
            padding-bottom: 20px;
            font-size: 11pt;
            /* background: plum; */
        }

        .header_title {
            width:25%;
            text-align: right;
            vertical-align: bottom;
            font-weight: 900;
            text-decoration: underline;
            /* font-size: 18pt; */
            font-size: 25pt;
            padding-bottom: 20px;
            /* background: peachpuff; */
            font: Georgia, "Times New Roman", Times, serif;
        }

        .header2 {
            border-collapse: collapse;
            width: 100%;
            /* background: #f6f8ff; */
            /* border: solid 1px #000; */
        }

        .header_billing {
            text-align: left;
            vertical-align: top;
            /* border: solid 1px #000; */
            width: 100%;
            /* background: red; */
        }

        .header_info  {
            vertical-align: top;
            width: 34%; 
        }

        .header_info_label {
            vertical-align: top;
            text-align: right;
            /* padding-left:14px; */
        }

        .header_info_data {
            vertical-align: top;
            text-align: left;
            padding-left:10px;
        }

        .bold {
            font-weight: bold;
        }

        .underline {
            border-bottom: 1pt solid #000;
            width: 65%;
        }

        /* footer section */
        footer {
            position: fixed;
            bottom: -50px;
            width: 100%;
            font: 11pt Georgia, "Times New Roman", Times, serif;
            background: #fff !important;
            color: #000;
            border-top: 1px solid #000;
            /* background: #f6f8ff; */
        }

        footer .payment { 
           font: 12pt Georgia, "Times New Roman", Times, serif;
           font-weight: bold;
           padding-top: 3px;
        }

        ol {
            padding-left: 20px;
        }

        /* main section */
        body {
            /* for set the margin(space break) from header and content  */
            /* margin-top: 250px; */
            margin-top: 210px;
            font: 12pt Georgia, "Times New Roman", Times, serif;
            line-height: 1.3;
            background: #fff !important;
            color: #000;
        }

        .subject_label {
            font-weight: bold;
            vertical-align: top;
            padding-bottom: 10px;
        }

        .subject_data {
            text-transform: uppercase;
            font-weight: bold;
            padding-bottom: 10px;
        }

        .items_section {
            /* height: 30%;
            background: rgb(245, 218, 210); */
        }

        /* items table section */
        table.tb { 
            width:100%; 
            border-collapse: collapse; 
        }

        .tb th, .tb td {
            border: solid 1px #000;
            padding: 5px;
            font-weight: unset;  
        }
        
        .tb th { 
            text-align:left;
         }

        .tcell {
             /* background: #f6f8ff;  */
        }

        #contents {

        }

        .page-break {
            page-break-after: always;
        }

         .grandtotal{
            padding-bottom:500px;
         }

    
    </style>

</head>
<body>

    <header>
        <table>
            <tr>
              <td class='header_logo'>
                <img src="{{ storage_path('app/public/images/3tds_logo_3.png') }}" class="logo">
              </td>
              <td class='header_company'>
                <div class="">SA-10-06, PARAGON @ PAN'GAEA,</div>
                <div class="">Persiaran Bestari,</div>
                <div class="">63000,Cyberjaya, Selangor.</div>
                <div class="">Business Registration No:&nbsp;1182596-P</div>
                <div class="">Phone :&nbsp;03-8685 0465</div>
                <div class="">Email :&nbsp;sales@3tds.com.my</div>
                <div class="">Website :&nbsp;www.3tds.com.my</div>
            </td>
            <td class='header_title'>TAX INVOICE</td>
            </tr>
          </table>

          <table class="header2">
             <tr>
                <td class='header_billing' colspan='2'>
                <span class="bold">Billing Address:</span><br>
                <div class="underline bold">Lembaga Peperiksaan</div>
                <div class="underline">Jln Tunku Abdul Halim,</div>
                <div class="underline">Kompleks Kerajaan, 540480 Kuala Lumpur,</div>
                <div class="underline">Wilayah Persekutuan Kuala Lumpur</div>
              </td>
              <td class='header_info'>
                <table>
                    <tr>
                        <td>
                            <div class="header_info_label">Invoice No :</div>
                            <div class="header_info_label">P.O No :</div>
                            <div class="header_info_label">Date :</div>
                            <div class="header_info_label">Due :</div>
                            <div class="header_info_label">SST :</div>
                            <div class="header_info_label">Page :</div>
                        </td>
                        <td>
                            <div class="header_info_data">INV-230101-001</div>
                            <div class="header_info_data">PO-200101-001</div>
                            <div class="header_info_data">13-02-2023</div>
                            <div class="header_info_data">30 Days</div>
                            <div class="header_info_data">W24-2010-32000007</div>
                            <div class="header_info_data">1 of 1</div>
                            {{-- <div class="header_info_data">{PAGE_NUM} of {PAGE_COUNT}</div> --}}
                          </td>        
                    </tr>
                </table>
              </td>
            </tr>
          </table>
    </header>

    <footer>
        <div class="tnc">
            Terms and Condition:
            <ol type="a">
                <li>Goods sold are not returnable or refundable. Otherwise a cancellation fee of 30% on <br>purchase price will be imposed.</li>
                <li>Interest of 2% per month will be added to overdue accounts.</li>
                <li>All TT charges incur within customers countries will be bored by applicant.</li>
                <li>Goods sold or delivered are not returnable or exchangeable.</li>
              </ol>

            <div class="payment">
                <span class="underline">Payment Informations:</span>
            </div>    
            <div class="payment">ACCOUNT HOLDER: "3TD SOLUTIONS SDN BHD"</div>
            <div class="payment">CIMB BANK: 8602538985</div>  
        </div>
        
    </footer>

    <main>
        <div id="contents">
        
            @php
                $items = [1];
                $items = [1, 2];
                $items = [1, 2, 3];
                $items = [1, 2, 3, 4];
                // $items = [1, 2, 3, 4, 5];
                // $items = [1, 2, 3, 4, 5, 6];
                // $items = [1, 2, 3, 4, 5, 6, 7];
                // $items = [1, 2, 3, 4, 5, 6, 7, 8];
                // $items = [1, 2, 3, 4, 5, 6, 7, 8, 9];

                // set row limit
                $limit = 3;
            @endphp

            @php $check=0 @endphp
            
            @foreach($items as $key=> $item)

                @php $check++ @endphp

                @if( $check % $limit == 0 ) 
                    @php echo '<div class="page-break"></div>'; @endphp 
                @endif
                <!-- your code or something like divs -->
                <div class="">{{ $key+1 }}&nbsp;{{ $check }}</div>    

                {{-- if check row have been iterated equal to limit value, break to new page. --}}
                {{-- @if( $check % 5 == 0 )  --}}
                {{-- @if( $check % $limit == 0 ) 
                    @php echo '<div class="page-break"></div>'; @endphp 
                @endif --}}
            
             @endforeach

             <div class="underline"></div>
             <div class="">total</div>
             <div class="">sst</div>
             <div class="grandtotal">grand total</div>
            
             <div class="">sign</div>
        
        </div> {{-- end content div --}}
        
    </main>

</body>
</html>