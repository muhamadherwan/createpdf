<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

header {
    position: fixed;
    top: -60px;
    left: 0px;
    right: 0px;
    height: 80px;
    font-size: 20px !important;
}

/** Define the margins of your page **/
@page {
    margin: 100px 25px;
    background: red;
}

</style>
</head>
<body>

<header>    
<h2>Three Equal Columns</h2>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
</div>
</header>

<main>
    <p style="page-break-after: always;">
        contents
    </p>
</main>            

</body>
</html>
