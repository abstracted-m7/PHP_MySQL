<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Creation & detection</title>
</head>
<body>
    <!-- Create a form of four field as name, address, age and password. Input name, address, age, password through form.  -->

    <form action="FileCreate.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <br>
        <br>
        <input type="text" name="address" placeholder="Enter your address">
        <br>
        <br>
        <input type="number" name="age" placeholder="Enter your age">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter your password">
        <br>
        <br>
        <input type="submit" name="submit" value="submit">
        <br>
        <br>
    </form>

    <!-- Then create a file with name and write the name, address, age and password in that file. is_file() function check the existance of file in "data" directory. -->

<?php

function write_user_info($file_name, $name, $address, $age, $password) {
    // Define the directory and create it if it doesn't exist
    $data_dir = 'data';
    if (!is_dir($data_dir)) {
        mkdir($data_dir, true);
    }

    // Create the full file path
    $file_path = $data_dir . '/' . $file_name;

    // Write the user's information to the file
    $file_contents = "Name: $name\n";
    $file_contents .= "Address: $address\n";
    $file_contents .= "Age: $age\n";
    $file_contents .= "Password: $password\n";

    file_put_contents($file_path, $file_contents);
}

// Function to check if the file exists
function check_file_existence($file_name) {
    // Define the directory
    $data_dir = 'data';

    // Create the full file path
    $file_path = $data_dir . '/' . $file_name;

    // Check if the file exists
    return is_file($file_path);
}

// Function to read and display the contents of the file
function display_file_contents($file_name) {
    // Define the directory
    $data_dir = 'data';

    // Create the full file path
    $file_path = $data_dir . '/' . $file_name;

    // Check if the file exists and read its contents
    if (is_file($file_path)) {
        $file_contents = file_get_contents($file_path);
        echo nl2br($file_contents); // nl2br() to convert newlines to HTML line breaks
    } else {
        echo "The file '$file_name' does not exist in the 'data' directory.";
    }
}

if (isset($_POST['submit'])) {

$file_name = 'user_info.txt';
$name = $_POST['name'];
$address = $_POST['address'];
$age = $_POST['age'];
$password = $_POST['password'];

// Write the data
write_user_info($file_name, $name, $address, $age, $password);

// Check if the file exists
if (check_file_existence($file_name)) {
    echo "The file '$file_name' exists in the 'data' directory.";
    echo "<br><br>The details of the file:<br>";
    display_file_contents($file_name);
} else {
    echo "The file '$file_name' does not exist in the 'data' directory.";
}
}
?>


</body>
</html>