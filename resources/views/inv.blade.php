{{--@php--}}
{{--    dd($logo);--}}
{{--@endphp--}}

<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>

        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap");

        :root {
            --primary: #555;
            --secondary: #3d3d3d;
            --white: #fff;
        }

        /*for pdf page*/
        @page {
            margin: 100px 25px;
        }

        * {
            /*margin: 0;*/
            /*padding: 0;*/
            box-sizing: border-box;
            font-family: "Lato", sans-serif;
        }

        body {
            background: var(--secondary);
            /* padding: 50px; */
            padding-top: 0px;
            padding: 10px;
            color: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        /* HEADER SECTION */
        header {
            position: fixed;
            height: 80px;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 80px;
            background: grey;

            display: flex;
            justify-content: center;
            align-items: center;

        }

        .header{}
        .logo_invoice_wrap{}
        .logo_sec{}

        .logo {
            /* max-width: 100%;
            height: auto; */
            width: 170px;
            height: 170px;
        }

        .title_wrap{}
        .sub_title{}

    </style>
</head>
<body>

{{-- START HEADER SECTION --}}
<header>
<div class="header">
    {{-- START HEADER 1ST ROW SECTION --}}
    <div class="logo_invoice_wrap">
        {{-- START HEADER 1ST ROW LEFT SECTION --}}
        <div class="logo_sec">
            <img src="{{ storage_path('app/public/images/logo2.png') }}" class="logo">
            {{-- START COMPANY DETAIL SECTION --}}
            <div class="title_wrap">
                <p class="sub_title">SA-10-06, PARAGON @ PAN'GAEA,</p>
                <p class="sub_title">Persiaran Bestari,</p>
                <p class="sub_title">
{{--                    @if($settings['company_zipcode']){{$settings['company_zipcode']}}@endif,--}}
{{--                    @if($settings['company_city']){{$settings['company_city']}}, @endif--}}
{{--                    @if($settings['company_state']){{$settings['company_state']}}.@endif--}}
                    company_zipcode
                    company_city
                    company_state
                </p>
                <p class="sub_title">
                    Business Registration No:&nbsp;
{{--                    @if(!empty($settings['registration_number'])){{$settings['registration_number']}} @endif--}}
                </p>
                <p class="sub_title">
                    Phone :&nbsp;
{{--                    @if($settings['company_telephone']){{$settings['company_telephone']}}@endif--}}
                </p>
                <p class="sub_title">
                    Email :&nbsp;
{{--                    @if($settings['company_email']){{$settings['company_email']}}@endif--}}
                </p>
                <p class="sub_title">
                    Website :&nbsp;www.3tds.com.my
                </p>
            </div>
            {{-- END COMPANY DETAIL SECTION --}}
        </div>
        {{-- END HEADER 1ST ROW LEFT SECTION --}}
    </div>
    {{-- END HEADER 1ST ROW SECTION --}}
</div>
</header>
{{-- END HEADER SECTION --}}

<br><br>
<div class="wrapper">
    <div class="invoice_wrapper">

    {{-- START CONTENT SECTION (ITEMS TABLE, TOTAL, SIGNATURE, TNC, PAYMENT) --}}
    <main>
        <p style="page-break-after: always;">
{{--            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
{{--            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,--}}
{{--            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
{{--            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non--}}
{{--            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
        </p>
    </main>
    {{-- END CONTENT SECTION (ITEMS TABLE, TOTAL, SIGNATURE, TNC, PAYMENT) --}}

</div>
</div>



</body>
</html>
