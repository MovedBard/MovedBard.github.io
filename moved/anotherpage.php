<?php
        if($_POST){ // is a message has been posted

            $fp = fopen('inrg.txt', 'a'); // open the text file and append using the 'a'
            fwrite($fp, $_POST['txt']."\n");
            fclose($fp);
            $message_message_to_user = "Message added to file. Wait a sec and you will be redirected.";
        }

            header("Location: theformpage.php"); // regardless of if there is a post - send the user back to the original page
            exit();
?>