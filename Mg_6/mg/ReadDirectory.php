<!-- Write a program in php to read an directory-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory read</title>
</head>
<body>
<?php

$array = array();
$use = opendir("C:\\xampp\\htdocs\\PHP LAB");


while($file = readdir($use)){
    if($file == '.' || $file == '..'){
        continue;
    }
    array_push($array, $file);
}

$serialNumber = 1;
foreach($array as $file){
    echo "<b>".$serialNumber."</b> . ". $file . "<br><br>";
    $serialNumber++;
}
?> 
</body>
</html>


