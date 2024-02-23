<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP by Manish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Besic Strings</a></li>
            <li><a class="dropdown-item" href="#conditional">Conditional Statements</a></li>
            <li><a class="dropdown-item" href="#function">Functions</a></li>
            <li><hr class="dropdown-divider" herf="#"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- ----main container---- -->
<div class="container my-5">
  <h1>Intro PHP....!</h1>
<!-- ------PHP code------  -->
        <?php
        echo "<pre>";
        echo "************************************<br>";
            echo "Hlw world";
        echo "<br>************************************";
        echo "</pre>";
        ?>
<!-- ------PHP code end------  -->
</div>
<!-- ----main container end---- -->
<div class="container my-5" id="conditional">
  <h1>--------------------------------------------------------------------------</h1>
  <h1>Conditional Statements</h1>
  <?php
  echo "<pre>";
    echo "<br>************************************";
    echo "<br>Find a number odd and even using if-else ?";
    $num=6;
    if ($num%2==0) {
      echo "<br>That number is : Even";
    }
    else {
      echo "<br>That number is : Odd";
    }
    echo "<br>************************************";
    echo "<br>Find Number is greater or smaller ?";
    $num=6;
    $num2=7;
    echo "<br>The numbers are :".$num."and".$num2;
    if ($num>$num2) {
      echo "<br>The greater number is :".$num;
    }
    else{
      echo "<br>The smaller number is :".$num2;
    }
    echo "<br>************************************";
  echo "</pre>";

  ?>
<!-- ------PHP code------  -->
</div>
<!-- ------Conditional statements end------- -->
<!-- ------Function start------- -->
<div class="container" id="function">
<h1>--------------------------------------------------------------------------</h1>
  <h1>Functions in PHP</h1>
  <?php
  echo "<pre>";
  echo "<br>Find the factorial of the number of 5 ?<br><b>Using Recursion :</b>";
  function fact($num){
    if ($num==1) {
      return $num;
    }
    return $num*fact($num-1);
  }
  echo "<br>The factorial is : ".fact(5);
  echo "<br>************************************";
  echo "<br>Find the area of a circle?";
  function areaCircle($r){
    return 3.14*$r*$r;
  }
  echo "<br>The area of the circle is : ".areaCircle(5);
  echo "<br>************************************";
  echo "<br>Find the area of a rectangle?";
  function areaRectangle($length,$width){
    return $length*$width;
  }
  echo "<br>The area of the rectangle is : ".areaRectangle(5,6);
  echo "<br>************************************";
  echo "<br>Find the area of a triangle?";
  function areaTriangle($length,$width){
    return ($length*$width)/2;
  }
  echo "<br>The area of the triangle is : ".areaTriangle(5,6,4);
  echo "<br>************************************";
  echo "<br>Find the area of a Square?";
  function areaSquare($length){
    return $length*$length;
  }
  echo "<br>The area of the square is : ".areaSquare(5);
  echo "<br>************************************";
  echo "<br>Find power of a number?";
  function power($num,$pow){
    return pow($num,$pow);
  }
  echo "<br>The power of 5 is : ".power(5,2);
  echo "<br>************************************";
  echo "<br>Find a number odd and even using function ?";
  function oddEven($num){
    if ($num%2==0) {
      return "Even";
    }
    else {
      return "Odd";
    }
  } 
  echo "<br>The number is : ".oddEven(5);
  echo "<br>************************************";
  echo "</pre>";
  ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>