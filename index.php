<?php
session_start();
$_SESSION['user'] = (isset($_GET['user'])) ? (int)$_GET['user'] : 0;
require 'core/init.php';

//$chat = new Chat();
//echo '<pre>',print_r($chat->fetchMessages()),'</pre>';
//$chat->throwMessage(1,'dsadsadsadsa');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX chat</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="chat">
        <div class="messages">
            <div class="message">
                <a href=""></a>
                <p></p>
            </div>
        </div>
        <textarea class="entry" placeholder="Type here...."></textarea>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/chat.js"></script>
</body>
</html>