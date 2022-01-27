<?php
    require '../core/init.php';

    //echo 'dsadsaddddadsdsadsaddddd';
    

    if(isset($_POST['method']) === true && empty($_POST['method']) === false) {
        $chat = new Chat();
        $method = trim($_POST['method']);

        if($method === 'fetch') {
            // fetch messages and output

            $messages = $chat->fetchMessages();

            if(empty($messages) === true) {
                echo 'There are no messages in the chat';
            } else {
                foreach($messages as $message) {
                ?>
                    <div class="message">
                        <a href="#"></a><?php echo $message['username']; ?> says:
                        <p><?php echo $message['message']; ?></p>
                    </div>
                <?php
                }
            }
        } else if ($method === 'throw') {

        }
    }
    
?>