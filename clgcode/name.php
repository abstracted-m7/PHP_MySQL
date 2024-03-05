
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
// --------------------Assignment- 1 & 2-----------------
echo "<h1>Welcome</h1>";
echo "<h2>Mr.$_POST[fname] $_POST[lname]</h2>";
// --------------------Assignment-3-----------------
echo "<h2>Phone Number :$_POST[p_number]</h2>";

// ------------------- asst-4 Check Even Odd-------------------------

echo "<br>************************************";
echo "<br>Check Even Odd";
$num=$_POST['EO_number'];
if ($num%2==0) {
  echo "The Number is : Even";
}
else{
    echo "The Number is : Odd";
}
echo "<br>************************************";
echo "<br>";
// ------------------- asst-5 Check Number greater or smaller-------------------------
echo "<br>************************************";
echo "<br>Find Number is greater or smaller ?";
$num=$_POST['first_number'];
$num2=$_POST['second_number'];
$num3=$_POST['third_number'];
echo "<br>The numbers are :".$num." , ".$num2." and ".$num3;
if ($num>$num2 and $num > $num3) {
  echo "<br>The greater number is : ".$num;
}
elseif ($num2>$num and $num2 > $num3) {
    echo "<br>The greater number is : ".$num2;
}
else{
   echo "<br>The greater number is : ".$num3;
}
echo "<br>************************************";
echo "<br>";
// ------------------- asst-6 Swap two numbers-------------------------
echo "<br>************************************";
echo "<br>Swapping the two Numbers : ";
$x = $_POST["swapNum1"];
$y = $_POST["swapNum2"];
echo "<br>Before swapping: x= $x , y= $y ";
echo "<br />";
$z = $x;
$x = $y;
$y = $z;
echo "After swapping: x= $x , y= $y ";
echo "<br>************************************";
echo "<br>";
// ------------------- asst-7 Multiplication Table-------------------------
echo "<br>************************************";
echo "<br>Multiplication Table for Number :".$_POST['multiplyNumber']."<br>" ;
for($i=1;$i<=10;$i++){
	$result=$_POST['multiplyNumber']*$i;
	echo $_POST['multiplyNumber']." * ".$i." = ". $result;
	echo "<br>";
}
echo "<br>************************************";
echo "<br>";

// ------------------- asst-8 Mathematical calculator-------------------------
echo "<br>************************************";
echo "<br>Methematical Calculator : ";
$operand1=$_POST['operand1'];
$operator=$_POST['operator'];
$operand2=$_POST['operand2'];

echo "<br>The operand1: $operand1 and operand2: $operand2";
echo "<br>The operator is : $operator";

switch ($operator){
  case "+":
     $result=$operand1+$operand2;
    break;
  case "-":
     $result=$operand1-$operand2;
    break;
   case "*":    
      $result=$operand1*$operand2;
    break;
    case "/":    
        $result=$operand1/$operand2;
      break;
   default:
     $result="Invalid Operator! Please use +, - or *.";
}
echo "<br>The result of the operation is:".$result;
echo "<br>************************************";
echo "<br>";

// ------------------- asst-9 Display Current Date -------------------------
echo "<br>************************************<br>";
echo "Today's Date : ".date("Y-m-d"); // this will display current date in YYYY
// MM (Month) & DD (Day)
echo "<br>Current Month: ".date("F")."<br>Current Day:".date("d");
echo "<br>Today's Weekday: ".date("l");
echo "<br>Weekday Number: ".date("w"); 
echo "<br>************************************";


echo "</pre>";
?>
</div>
</body>
</html>