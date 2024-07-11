<!-- Question :-> WAP in php to manipulate a string by various operations. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String menipulation</title>
</head>
<body>
    <?php
        $string = "php program : the complete the SOLUTION for WEB development";

        //Convert lowercase string to uppercase
        echo "<b>In uppercase : </b><br>";
        echo strtoupper($string);

        //Convert uppercase string to lowercase
        echo "<br><br>";
        echo "<b>In lowercase : </b><br>";
        echo strtolower($string);

        //convert first character uppercase
        echo "<br><br>";
        echo "<b>First character uppercase : </b><br>";
        echo ucfirst($string);

        //Convert first character of all the words uppercase
        echo "<br><br>";
        echo "<b>All word's first character in uppercase : </b><br>";
        echo ucwords($string);

        //Get the last 11 characters of this string.
        echo "<br><br>";
        echo "<b>Last 11 characters of this string : </b><br>";
        echo substr($string, -11);
    
        //Replace the first 'the' of the following string with 'best'.
        echo "<br><br>";
        echo "<b>Replace first 'the' to 'best' </b><br>";
        // echo str_replace("/the/","best",$string , 1);
        echo preg_replace("/the/", 'best', $string, 1);

        // Get the second word of a sentence
        echo "<br><br>";
        echo "<b>Second word of a sentence is : </b><br>";
        $words = explode(" ", $string);
        echo $words[1];

        //Insert a string at the specified position in a given string.
        echo "<br><br>";
        // echo "<b>Insert a string at the specified position in a given string : </b><br>";
        echo "<b>Insert the word 'BWU' : </b><br>";
        // substr_replace("String","Value","Starting index","Ending index");
        echo substr_replace($string, "BWU ", 4,0);

    ?>
</body>
</html>