
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP file</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="phpcontainer">
<?php
echo "<pre>";
echo "<h1>Welcome</h1>";
echo "<h2>Mr.$_POST[fname] $_POST[lname]</h2>";
echo "<h2>$_POST[p_number]</h2>";

// -------------------Check Even Odd-------------------------

echo "*****************************";
echo "<br>Check Even Odd :";
$num=$_POST['EO_number'];
if ($num%2==0) {
  echo "<h4>The Number is : <b>Even</b></h4>";
}
else{
    echo "<h4>The Number is : <b>Odd</b></h4>";
}

// -------------------Check Number greater or smaller------------------------- 
echo "<br>************************************";
echo "<br>Find Number is greater or smaller ?";
$num=$_POST['first_number'];
$num2=$_POST['second_number'];
$num3=$_POST['third_number'];
echo "<br>The numbers are :".$num." , ".$num2." and ".$num3;
if ($num>$num2 and $num>$num3) {
  echo "<br>The greater number is : ".$num;
}
elseif($num2>$num and $num2>$num3){
  echo "<br>The greater number is : ".$num2;
}
else{
  echo "<br>The greater number is : ".$num3;
}
echo "<br>************************************";

// Using tarnary operator to find bigger number

echo "<br>************************************";
echo "<br>Using tarnary operator find bigger number ?<br>";

$num=$_POST['first_number'];
$num2=$_POST['second_number'];

echo "<br>The num1 is : ".$num;
echo "<br>The num2 is : ".$num2;
echo "<br>";
echo ($num>$num2) ? "Num1 is bigger" : "Num2 is bigger";
echo "<br>************************************";
// Using only nested if-else find the bigger number
echo "<br>************************************";
echo "<br>Using only nested if-else find the bigger number";

$num=$_POST['first_number'];
$num2=$_POST['second_number'];
$num3=$_POST['third_number'];

echo "<br>The numbers is : $num , $num2 , $num3";
if ($num>$num2) {
  if ($num>$num3) {
    echo "<br>The bigger number is : $num";
  }
  else{
    echo "<br>The bigger number is : $num3";
  }
}
elseif($num2>$num3) {
  echo "<br>The bigger number is : $num2";
}
else{
  echo "<br>The bigger number is : $num3";
}

echo "<br>************************************";

// -------------------Check number prime or not------------------------- 
echo "<br>************************************";
echo "<br>Prime number find ?";

$prime=$_POST['p_num'];
echo "<br>The number is : ".$prime;
if ($prime>1) {
  for ($i=2; $i<=$prime/2; $i++) {
    $flag=0;
    if ($prime%$i==0) {
      $flag=1;
      break;
    }
  }
  if ($flag==0) {
    echo "<br>The number is : Prime";
  }
  else{
    echo "<br>The number is : Not Prime";
  }

}
echo "<br>************************************";

// -------------------Swap variable-------------------------
echo "<br>************************************";
$snum1=$_POST['s_num1'];
$snum2=$_POST['s_num2'];
echo "<br>Using temporary variable : ";
echo "<br>Before swaping numbers is : $snum1, $snum2";
$temp=$snum1; 
$snum1=$snum2;
$snum2=$temp;
echo "<br>After swaping numbers is : $snum1, $snum2";

// using addition and substraction create swap
echo "<br><br>Does not Using temporary variable : ";
$swapnum1=$_POST['s_num1'];
$swapnum2=$_POST['s_num2'];
echo "<br>Before swaping numbers is : $swapnum1, $swapnum2";

$swapnum1=$swapnum1+$swapnum2;
$swapnum2=$swapnum1-$swapnum2;
$swapnum1=$swapnum1-$swapnum2;
echo "<br>After swaping numbers is : $swapnum1, $swapnum2";

echo "<br>************************************";



echo "</pre>";
?>
</div>
</body>
</html>