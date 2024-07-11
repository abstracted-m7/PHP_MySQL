<!-- Question 25 :-> WAP in php get array key from given array list -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Key find</title>
</head>
<body>
    <?php
        //WAP in PHP, get array key from given array list.
        $arr = array(12,"a"=>"apple","b"=>"banana","BCA"=>"Manish");
        echo "Index value of apple is : ".array_search("apple",$arr);
        
        //Get specific value by index
        echo "<br><br>";
        echo "An element by index 0 is : ".$arr[0];

        //Get a specific value by string key
        echo "<br><br>";
        echo "An elements by key 'BCA' :".$arr['BCA'];
        
        //Print the key values of array elements
        echo "<br><br>";
        echo "The key values are : <br>";
        print_r(array_keys($arr));

        //Search a value from array
        echo "<br><br>";
        $searchValue = "banana";
        if(in_array($searchValue,$arr)){
            echo "The <b>$searchValue </b> is in the array";
        }else{
            echo "Value not found";
        }



    ?>
</body>
</html>