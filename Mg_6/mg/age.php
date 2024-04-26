<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Age Calculator in PHP</title>
</head>
<body>
            <form method="POST">
                <label><b>Birthday:</b></label>
                <input type="date" name="birthday">
                <br>
                <br>
                <button type="submit" name="calculate">Calculate</button>
            </form>
 
            <?php
                if(isset($_POST['calculate'])){
                    $bday = $_POST['birthday'];
                    $today = date('Y-m-d');
                    $diff = date_diff(date_create($bday), date_create($today));
        
                    echo '<br><br>Age is <b>'.$diff->format('%y')." Year ".$diff->format('%m')." Month ".$diff->format('%d').' Day </b>';
                    
                }
                ?>
           
</body>
</html>