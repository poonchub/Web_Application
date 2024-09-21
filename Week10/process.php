<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="refresh" content="10;url=guestbook.html">
    </head>
    <body>
        <?php

            $initial = $_POST["initial"];
            $name = $_POST["name"];
            $id = $_POST["id"];
            $school = $_POST["school"];
            $email = $_POST["email"];
            $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

            $date = date('H:i, jS F');

            $outputString = $initial."\t".$name."\t".$id."\t".$school."\t".$email."\t".$date."\n";

            // open file
            $fp = fopen("$DOCUMENT_ROOT/Poonchub/Web_Application/Week07/gbook.txt", 'a');
            flock($fp, LOCK_EX);
            if (!$fp){
                echo '<p>Error</p>';
                exit;
            }
            fwrite($fp, $outputString);
            flock($fp, LOCK_UN);
            fclose($fp);

            echo "<h1>Guestbook Record</h1>";
            echo "<p>Guestbook Record: Timeprocess at $date<br>";
            echo "Guestbook Record has been processed.<br>";
            echo "It will take you back to Guestbook form in 10 seconds</p>";
        ?>
    </body>
</html>