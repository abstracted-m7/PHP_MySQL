<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array modification</title>
</head>
<body>
    <?php
    $arr = array("manish","avik","avik","manish");
    // display using foreach loop
    foreach($arr as $value ){
        echo $value."<br>";
    }

    echo "<br><br>";

    //count elements of an array 
    $no_elements = count($arr);
    echo "<b>Total no of elements in array is : </b>".$no_elements;

    echo "<br><br>";


    // Sort this array
    echo "<br><b>The sorted array is : -</b><br>";
    sort($arr);
    print_r($arr);

    echo "<br><br>";

    // Reverse this array
    echo "<br><b>The reverse array is : -</b><br>";
    rsort($arr);
    print_r($arr);

    echo "<br><br>";

    //display without duplicates elements
    echo "<br><b>The array without duplicates is : -</b><br>";
    $arr = array_unique($arr);
    print_r($arr);
    $count_elements = count($arr);
    echo "<br><br><b>Total elements after remove duplicates are : </b>".$count_elements;

    echo "<br><br>";

    //remove last element from array
    echo "<br><b>The array after removing last element is : -</b><br>";
    array_pop($arr);
    print_r($arr);

    //insert a specific position in array
    echo "<br><br>";
    echo "<br><b>The array after inserting an element at position 2 is : -</b><br>";
    array_splice($arr, 1,0, "avik"); #array_splice(array, start, length, array)
    print_r($arr);

    echo "<br><br>";

    //search and find the element position
    echo "<br><b>The position of avik is : </b>".array_search("avik", $arr);

    ?>
</body>
</html>