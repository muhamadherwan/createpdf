{{--@php--}}
{{--dd($date);--}}
{{--@endphp--}}

echo asset('storage/file.jpg');

<html>
<head>
    <style>
      
        /** Define the margins of your page **/
        @page {
                margin: 100px 25px;
            }

            header {
                position: fixed; /* this the part that make header at top every page */
                top: -60px;
                /* set the header start and end padding */
                left: 0px;
                right: 0px;
                height: 50px; /* set the header height. will overlap the content. need to find way to work on this */
                font-size: 20px !important;

                /** Extra personal styles **/
                background-color: #008B8B;
                color: white;
                /* text-align: center; */
                line-height: 35px;
            }


    </style>
</head>
<body>


{{-- start header --}}
<header>
This is the header
</header>
{{-- end header --}}




{{-- start contents --}}
<main>
    <p style="page-break-after: always;">

        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</main>
{{-- end contents --}}

</body>
</html>
