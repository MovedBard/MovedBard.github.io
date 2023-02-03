<html>
<head>
</head>
<body>
<form method="post" action="anotherpage.php">
    <textarea name = "txt" cols = "25" rows = "5">Place your comment here ...</textarea><br><br>
    <input type = "submit" value="Submit">
    <br>
</form>
<hr />
<?php
    // this reads all of the lines of the file and spits them out on the screen
    $fh = fopen('inrg.txt','r');
    while ($line = fgets($fh)){
        echo nl2br($line); // nl2br() converts new lines to <br>'s
    }
    fclose($fh);

?>
</body>
</html>