<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci series</title>
</head>
<body>
    <form action="fib.php" method="POST">
        <label for="numb">Fibonacci Series:</label>
        <input type="number" id="numb" name="fibnumber" placeholder="Enter the number">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>

  
    <?php
    $Num = $_POST['fibnumber'];
    function fibnacci($number){
        if($number==0){
            return 0;
        }
        elseif($number==1){
            return 1;
        }
        else{
            return fibnacci($number-1)+fibnacci($number-2);
        }
    }
    echo "<br><b>The fibonacci series of $Num is :</b>";
    for($i=0;$i<$Num;$i++){
        echo "<br>".fibnacci($i);
    }
   
    
   
?>


</body>
</html>