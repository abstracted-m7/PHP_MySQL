<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Number</title>
</head>
<body>
    <form action="fact.php" method="POST">
        <input type="number" name="factnumber" placeholder="Enter the number">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
    <?php
    $Num = $_POST['factnumber'];

    function factorial($factNum){
        
        if ($factNum == 0) {
            return 1;
        }
        else{
            return $factNum * factorial($factNum - 1);
        }
    }
    echo "<br><br>The factorial of $Num is: " . factorial($Num);
?>

</body>
</html>