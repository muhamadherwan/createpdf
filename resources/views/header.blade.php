{{--@php--}}
{{--dd($date);--}}
{{--@endphp--}}



<html>
<head>
    <style>
      
        /** Define the margins of your page **/
        @page {
                /* margin: 100px 25px; */            
                margin-top: 100px;
            }

            header {
                position: fixed; /* this the part that make header at top every page */
                /* top: -60px; */
                /* set the header start and end padding */
                left: 0px;
                right: 0px;
                /* set the header height. will overlap the content. need to find way to work on this */
                /* height: 50px;  */
                
                top: -115px;
                width: 100%;
                height: 109px;
                
                
                
                font-size: 20px !important;

                /** Extra personal styles **/
                background-color: #008B8B;
                color: white;
                /* text-align: center; */
                line-height: 35px;
            }

            header .container {
                overflow: hidden; /* clear the floats */
            }

            header .column1, header .column2, header .column3 {
                float: left;
                width: 33.33%;
            }

/* Additional styling as desired */



    </style>
</head>
<body>


{{-- start header --}}
<header>
        <div class="container">
          <div class="column1">
            Column 1 content
          </div>
          <div class="column2">
            Column 2 content
          </div>
          <div class="column3">
            Column 3 content
          </div>
        </div>
      </header>
      
</header>
{{-- end header --}}




{{-- start contents --}}
<main>
    <p style="page-break-after: always;">
    {{-- <p style="page-break"> --}}

        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p>second page</p>
</main>
{{-- end contents --}}

</body>
</html>
