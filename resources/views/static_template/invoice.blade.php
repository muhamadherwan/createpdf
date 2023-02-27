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


        /* main section */
        body {
            /* for set the margin(space break) from header and content  */
            /* margin-top: 250px; */
            /* margin-top: 210px; */
            margin-top: 170px;
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
            /* text-transform: uppercase; */
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
            color: #000;
            font-size: 9pt;
            /* font-size: 12px; */
        }

        .tb th, .tb td {
            border: solid 1px #000;
            /* padding: 10px 7px 10px 7px; */
            padding: 5px 5px 5px 5px;
            /* font-weight: unset;   */
            font-weight: normal;
            vertical-align: top;
        }

        /* .tb th {
            text-align:center;
         } */

        .tcell {
             /* background: #f6f8ff;  */
        }

        .aleft {
            text-align: left;
        }

        .acenter {
            text-align: center;
        }

        .aright {
            text-align: right;
            float: right;
        }

        .fleft {
            float: left;
            width: 2%;
        }

        .fright {
            float: right;
            width: 75%;
        }

        .fcontainer {
            width: 100%;
            height: 5%;
        }

        .page-break {
            page-break-after: always;
        }

        .subtotal {
            background: greenyellow;
            height: 100px;
        }



        /* footer section */
        /* footer {
            position: fixed;
            bottom: -50px;
            width: 100%;
            font: 11pt Georgia, "Times New Roman", Times, serif;
            background: #fff !important;
            color: #000;
            border-top: 1px solid #000;
        }

         */

        .footer {
            position: fixed;
            height: 240px;
            /* height: 20px; */
            bottom: 70px;
            /* bottom: 0; */
            width:100%;
        }

        .subtotal {
            background: greenyellow;
            height: 1%;
        }

        /* .contents {
        margin-bottom: 240px;
        } */


        ol {
            padding-left: 20px;
            margin-top:0;
        }

        .payment {
           font: 11pt Georgia, "Times New Roman", Times, serif;
           font-weight: bold;
           padding-top: 3px;
        }

        .footer-a {
            width:100%;
            border-collapse: collapse;
            color: #000;
            font-size: 9pt;
            padding: 0;
            margin: 0;
            border-top: solid 1px #000;
        }

        .footer-a td {
            /* border: solid 1px #000; */
            padding: 5px 0 0 0;
            /* font-weight: unset;   */
            font-weight: normal;
            vertical-align: top;
        }

        .total {
            width:100%;
            border-collapse: collapse;
            color: #000;
            font-size: 11pt;
            padding: 0;
            margin: 0;
            /* border: solid 1px #000; */
        }

        .total td {
            /* border: solid 1px #000; */
            padding: 10px 7px 10px 7px;
            /* font-weight: normal; */
            vertical-align: top;
        }

        .boxTotal1 {
            border: 1px solid #000;
        }

        .boxTotal2 {
            border: 1px solid #000;
            border-bottom: 3px double #000000;
        }

        .footer-b {
            width:100%;
            border-collapse: collapse;
            color: #000;
            /* font-size: 9pt; */
            padding: 0;
            margin: 0;
        }

        .footer-b td {
            padding: 5px 0 0 0;
            vertical-align: top;
            font-size: 10pt;
            /* border: solid 1px #000; */
        }

        .sign {
            border-bottom: 1px double #000;
            height:90px;
            /* text-decoration: underline; */
        }

        #pageNo { text-align: center;border-top: 1px solid black;}
        #pageNo .page:after { content: counter(page, decimal); }

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
{{--                            <div class="header_info_label">Page :</div>--}}

                        </td>
                        <td>
                            <div class="header_info_data">INV-230101-001</div>
                            <div class="header_info_data">PO-200101-001</div>
                            <div class="header_info_data">13-02-2023</div>
                            <div class="header_info_data">30 Days</div>
                            <div class="header_info_data">W24-2010-32000007</div>
{{--                            <div class="header_info_data">1 of 1</div>--}}

                            {{-- {PAGE_NUM} / {PAGE_COUNT}
                            <div class="header_info_data">{PAGE_NUM} of {PAGE_COUNT}</div> --}}
                          </td>
                    </tr>
                </table>
              </td>
            </tr>
          </table>
    </header>

    <main>

        <div id="contents">

            <table>
                <tr>
                    <td class="subject_label">Subject:</td>
                    <td class="subject_data">{{ $title }}</td>
                </tr>
            </table>
            {{-- <div class="bold">Subject:&nbsp;<span class="subject">{{ $title }}</span></div> --}}


            @php
                // $items = [1];
                // $items = [1, 2];
                $items = [1, 2, 3];
                // $items = [1, 2, 3, 4];
                // $items = [1, 2, 3, 4, 5];
                // $items = [1, 2, 3, 4, 5, 6];
                // $items = [1, 2, 3, 4, 5, 6, 7];
                // $items = [1, 2, 3, 4, 5, 6, 7, 8];
                // $items = [1, 2, 3, 4, 5, 6, 7, 8, 9];
                // $items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            @endphp

            {{-- start items section --}}
            <div class="items_section">

                {{-- start items table --}}
                <table class="tb">
                    <tr>
                        <th>No</th>
                        <th class="aleft">Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>SST 6%</th>
                        <th>Total Amount</th>
                    </tr>

                    @php
                        $limit = 4;
                        $counter = 0;
                    @endphp

                    @foreach($items as $key=> $item)

                        @if( $counter >= $limit )
                            @php $counter = 0 @endphp
                            <table class="tb">
                                <tr>
                                    <th>No</th>
                                    <th class="aleft">Description</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>SST 6%</th>
                                    <th>Total Amount</th>
                                </tr>
                        @endif

                        <!-- itterates cell rows -->
                        <tr>
                            <td class="tcell acenter" style="width:5%">
                                {{ $key + 1 }}
                            </td>
                            <td class="tcell" style="width:0%">
                                <div class="name">CAT6 Cabling with PVC Conduit Including Faceplate.</div>
                                <div class="desc">Labelling New Port</div>

                            </td>
                            <td class="tcell acenter" style="width:8%">
                                100,000
                            </td>
                            <td class="tcell" style="width:15%">
                                <div class="fcontainer">
                                    <div class="fleft aleft">RM</div>
                                    <div class="fright aright">1,000,000.00</div>
                                </div>
                            </td>
                            <td class="tcell" style="width:15%">
                                <div class="fcontainer">
                                    <div class="fleft aleft">RM</div>
                                    <div class="fright aright">1,000,000.00</div>
                                </div>
                            </td>
                            <td class="tcell" style="width:15%">
                                <div class="fcontainer2">
                                    <div class="fleft aleft">RM</div>
                                    <div class="fright aright">1,000,000.00</div>
                                </div>
                            </td>
                        </tr>
                        @php $counter++ @endphp
                        @if( $counter >= $limit )
                            </table>
                            <div class="page-break"></div>
                        @endif

                    @endforeach
                </table>
                {{-- end items table --}}
        </div>
        {{-- end content section --}}

       {{-- start footer section --}}
        <div class="footer">

            <table class="footer-a">
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    Terms and Condition:
                                    <ol type="a">
                                        <li>Goods sold are not returnable or refundable. Otherwise a cancellation fee  <br> of 30% on purchase price will be imposed.</li>
                                        <li>Interest of 2% per month will be added to overdue accounts.</li>
                                        <li>All TT charges incur within customers countries will be bored by applicant.</li>
                                        <li>Goods sold or delivered are not returnable or exchangeable.</li>
                                    </ol>
                                    <div class="payment">
                                        <span class="underline">Payment Informations:</span>
                                    </div>
                                    <div class="payment">ACCOUNT HOLDER: "3TD SOLUTIONS SDN BHD"</div>
                                    <div class="payment">CIMB BANK: 8602538985</div>
                                </td>
                        </tr>
                        </table>
                    </td>
                    <td style="width:40%">
                        <table class="total">
                            <tr>
                                <td class="aright">Subtotal</td>
                                <td class=" boxTotal1">
                                    <div class="fcontainer2">
                                        <div class="fleft aleft">RM</div>
                                        <div class="fright aright">1,000,000.00</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="aright">Total 6% SST</td>
                                <td class=" boxTotal1">
                                    <div class="fcontainer2">
                                        <div class="fleft aleft">RM</div>
                                        <div class="fright aright">1,000,000.00</div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="aright">
                                    <div class="bold">GRAND TOTAL</div></td>
                                    <td class=" boxTotal2">
                                    <div class="fcontainer2">
                                        <div class="fleft aleft bold">RM</div>
                                        <div class="fright aright bold">1,000,000.00</div>
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
            <br>

            {{-- start signature section --}}

            @php
                // $sign = 1;
                $sign = 2;
                // $sign = 3;
            @endphp

            @switch( $sign )
                @case( $sign == 1 )
                    <table class="footer-b">
                        <tr>
                            <td style="width:30%">3TD SOLUTIONS SDN BHD</td>
                            <td style="width:30%"></td>
                            <td style="width:30%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="sign">&nbsp;</td>
                            <td class="sign1">&nbsp;</td>
                            <td class="sign1">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="">Ahmad Munzir Bin Kamalul Sahar</div>
                                <div class=""><i>Pengurus Projek</i></div>
                            </td>
                            <td></td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    @break

                @case( $sign == 2 )
                    <table class="footer-b">
                        <tr>
                            <td style="width:30%">3TD SOLUTIONS SDN BHD</td>
                            <td style="width:30%"></td>
                            <td style="width:30%">LEMBAGA PEPERIKSAAN</td>
                        </tr>
                        <tr>
                            <td class="sign">&nbsp;</td>
                            <td class="sign1">&nbsp;</td>
                            <td class="sign">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="">Ahmad Munzir Bin Kamalul Sahar</div>
                                <div class=""><i>Pengurus Projek</i></div>
                            </td>
                            <td></td>
                            <td>Signature and Stamp</td>
                        </tr>
                        </table>
                    @break

                @default
                <table class="footer-b">
                    <tr>
                        <td style="width:30%; font-size:11pt; font-style:bold">This is a computer-generated document. No signature is required.</td>
                    </tr>
                </table>
            @endswitch
            {{-- end signature section --}}

        </div>
       {{-- end footer section --}}


    </main>

    <script type="text/php">
        if (isset($pdf)) {
            $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
            $size = 10;
            $font = $fontMetrics->getFont("Verdana");
            $width = $fontMetrics->get_text_width($text, $font, $size) / 2;
            $x = ($pdf->get_width() - $width) / 2;
            $y = $pdf->get_height() - 35;
            $pdf->page_text($x, $y, $text, $font, $size);
        }
    </script>

</body>
</html>
