<!--Question 29 :-> Write a php program to detect remote device is mobile device or not. and show the which os has in mobile.
 -->
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device Ditection</title>
 </head>
 <body>

 <?php
function isMobileDevice() 
{
    $Agent = $_SERVER['HTTP_USER_AGENT'];
        $Keywords = array(
        'Mobile', 'Android', 'Silk/', 'Kindle', 'BlackBerry', 'Opera Mini', 'Opera Mobi',
        'Blazer', 'Dolfin', 'Dolphin', 'Skyfire', 'ZuneWP7', 'Symbian', 'Palm', 'webOS',
        'IEMobile', 'Motorola', 'Nokia', 'Samsung', 'SonyEricsson', 'LG', 'NEC', 'Philips',
        'Alcatel', 'BenQ', 'HTC', 'Huawei', 'Palm', 'Pantech', 'Panasonic', 'Fly', 'MiuiBrowser',
        'Teleca', 'PlayStation', 'Nintendo', 'Wii', 'Xbox', 'Vita', 'mobile'
    );
    foreach ($Keywords as $keyword) {
        if (stripos($Agent, $keyword) !== false) 
{
            return true;
        }
    }
    return false;
}
if (isMobileDevice()) 
{
    echo "The device is a mobile device.<br>";
} else 
{
    echo "The device is not a mobile device.<br>";
}

// Get localhost IP address
$localhostIP = $_SERVER['SERVER_ADDR'];

echo "Device's IP : ".$localhostIP;
?>

 </body>
 </html>