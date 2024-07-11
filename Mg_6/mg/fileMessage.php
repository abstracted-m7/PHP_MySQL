<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Operations Form</title>
</head>
<body>
    <form method="post" action="fileMessage.php">
        <label for="file_name">File Name:</label><br>
        <input type="text" id="file_name" name="file_name" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
        
        <label for="task">Task:</label><br>
        <select id="task" name="task" required>
            <option value="create">Create</option>
            <option value="read">Read</option>
            <option value="append">Append</option>
            <option value="delete">Delete</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Done">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $file_name = $_POST['file_name'];
        $message = $_POST['message'];
        $task = $_POST['task'];
        $data_dir = 'data';
        $file_path = $data_dir . '/' . $file_name;

        // Ensure the data directory exists
        if (!is_dir($data_dir)) {
            mkdir($data_dir, 0777, true);
        }

        switch ($task) {
            case 'create':
                if (!is_file($file_path)) {
                    file_put_contents($file_path, $message);
                    echo "File created and message written.";
                } else {
                    echo "File already exists.";
                }
                break;

            case 'read':
                if (is_file($file_path)) {
                    $file_contents = file_get_contents($file_path);
                    echo "<script>document.getElementById('message').value = " . json_encode($file_contents).";</script>";
                    echo "<br><br>The File Path : ".realpath($file_path);
                } else {
                    echo "<script>document.getElementById('message').value = 'File Doesn\'t exist.';</script>";
                }
                break;

            case 'append':
                if (is_file($file_path)) {
                    file_put_contents($file_path, "\n" . $message, FILE_APPEND);
                    echo "File appended.";
                } else {
                    echo "<script>document.getElementById('message').value = 'File Doesn\'t exist.';</script>";
                }
                break;

            case 'delete':
                if (is_file($file_path)) {
                    unlink($file_path);
                    echo "File deleted.";
                } else {
                    echo "<script>document.getElementById('message').value = 'File Doesn\'t exist.';</script>";
                }
                break;
        }
    }
    ?>
</body>
</html>
