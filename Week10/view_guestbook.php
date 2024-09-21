<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="CSS/style_sheet.css">
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

            $countData = -1;

            $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
            $handle = fopen("$DOCUMENT_ROOT/Web_Application/Week07/gbook.txt", 'rt');
            while (!feof($handle)){
                ++$countData;
                $buffer = fgets($handle, 999);
                echo $buffer."<br>";
            }
            fclose($handle);

            echo "<hr size=3 noshade>";
            echo "<p>Total number of record is $countData</p>"
        ?>

    </body>
</html>