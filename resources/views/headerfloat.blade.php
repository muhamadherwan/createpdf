<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

@page {
                margin: 100px 25px;            
                /* margin-top: 100px; */
            }

header {
                position: fixed; /* this the part that make header at top every page */
                top: -60px;
                /* set the header start and end padding */
                left: 0px;
                right: 0px;
                 /* set the header height. will overlap the content. need to find way to work on this */
                height: 200px;
                font-size: 20px !important;
                /* color: white; */
                /* line-height: 35px; */
                
            }

            
            /*header .column1, header .column2, header .column3 {
                float: left;
                width: 33.33%;
                border: solid 1px black;
            } */

            /* * {
  box-sizing: border-box;
} */

        /* Create three equal columns that floats next to each other */
            .column {
            float: left;
            width: 33.33%;
            /* padding: 10px; */
            height: 200px; /* Should be removed. Only for demonstration */
            }


 
/* Additional styling as desired */
        

    </style>
</head>
<body>
    <header>
        {{-- <div class="container">
          <div class="column1">
            Column 1 content
          </div>
          <div class="column2">
            Column 2 content
          </div>
          <div class="column3">
            Column 3 content
          </div>
        </div> --}}

        {{-- <div class="row"> --}}
         <div class="container">
            <div class="column" style="background-color:#aaa;">
              <h2>Column 1</h2>
            </div>
            <div class="column" style="background-color:#bbb;">
              <h2>Column 2</h2>
            </div>
            <div class="column" style="background-color:#ccc;">
              <h2>Column 3</h2>

            </div>
          </div>
    </header> 
    
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