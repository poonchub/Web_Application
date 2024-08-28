<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="CSS/style_sheet.css">
        <style>
            table {
                width: 70%;

                & th{
                    background-color: yellow;
                }
                & td {
                    background-color: lightblue;
                }
            }
        </style>
    </head>
    <body>
        <center>
            <hr width="80%" size="3" noshade>
            <header>
                <h1>Poonchub Nanawan</h1>
                <p><b>Suranaree University of technology, THAILAND</b></p>
            </header>
            <hr size="3" noshade>
            <navbar>
                <div>
                    <span>::|::</span>
                    <a class="nav-link" href="home.html">Home</a>
                    <span>::|::</span>
                    <a class="nav-link" href="office_hour.html">Office Hour</a>
                    <span>::|::</span>
                    <a class="nav-link" href="like_dislike.html">Like/Dislike</a>
                    <span>::|::</span>
                    <a class="nav-link" href="images.html">Images</a>
                    <span>::|::</span>
                    <a class="nav-link" href="links.html">Links</a>
                    <span>::|::</span>
                    <a class="nav-link" href="guestbook.html">Guestbook</a>
                    <span>::|::</span>
                    <a class="nav-link-onclick" href="#">View Guestbook</a>
                    <span>::|::</span>
                </div>
            </navbar>
            <hr size="3" noshade>
        </center>
        <?php
            echo "<p><b>Guestbook Record</b></p>";
            echo "<hr size=3 noshade>";

            $countData = 0;

            $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
            @ $handle = fopen("$DOCUMENT_ROOT/Web_Application/Week07/gbook.txt", 'rt');
            if (!$handle){
                echo "<p><strong>Don't have Record</strong></p>";
                exit;
            }

            while (!feof($handle)){
                $buffer = fgets($handle, 999);
                if (trim($buffer) != ""){
                    ++$countData;
                    echo $buffer."<br>";
                }
            }
            fclose($handle);

            echo "<hr size=3 noshade>";
            echo "<p>Total number of record is $countData</p>";
            echo "<hr size=3 noshade>"; 



            $records = file("$DOCUMENT_ROOT/Web_Application/Week07/gbook.txt");

            $number_of_order = count($records);
            echo "<center><p><b>Putting Guestbook Records into a Table</b></p>";
            echo "<table border=1>";
            echo "<tr><th>NO</th><th>INITIAL</th><th>NAME</th><th>ID</th><th>SCHOOL</th><th>EMAIL</th><th>TIME</th></tr>";
            for ($i=0 ; $i<$countData ; $i++){
                $line = explode("\t", $records[$i]);
                $no = $i+1;
                echo "<tr valign=top><td align=center>$no</td><td>$line[0]</td><td>$line[1]</td><td>$line[2]</td><td>$line[3]</td><td>$line[4]</td><td>$line[5]</td></tr>";
            }
            echo "</table></center>";
        ?>
    </body>
</html>