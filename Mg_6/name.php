
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
// --------------------Assignment-1-----------------
echo "<h1>Welcome</h1>";
echo "<h2>Mr.$_POST[fname] $_POST[lname]</h2>";
echo "<h2>$_POST[p_number]</h2>";

// ------------------- asst-2 Check Even Odd-------------------------

echo "*****************************";
echo "<h2>Check Even Odd</h2>";
$num=$_POST['EO_number'];
if ($num%2==0) {
  echo "<h4>The Number is : <b>Even</b></h4>";
}
else{
    echo "<h4>The Number is : <b>Odd</b></h4>";
}

// ------------------- asst-3 Check Number greater or smaller-------------------------
echo "<br>************************************";
echo "<br>Find Number is greater or smaller ?";
$num=$_POST['first_number'];
$num2=$_POST['second_number'];
echo "<br>The numbers are :".$num." and ".$num2;
if ($num>$num2) {
  echo "<br>The greater number is : ".$num;
}
else{
  echo "<br>The greater number is : ".$num2;
}
echo "<br>************************************";
echo "</pre>";
?>
</div>
</body>
</html>
