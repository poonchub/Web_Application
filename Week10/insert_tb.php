<!DOCTYPE html>
<html>
    <head>
	<title>Guesbook</title>
	<meta name="Genarator" content="Notepad">
	<meta name="Author" content="Poonchub">
	<meta name="Keywords" content="Web Development">
	<meta name="Description" content="Web Design Animation">
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
                    <a class="nav-link-onclick" href="guestbook.html">Guestbook</a>
                    <span>::|::</span>
					<a class="nav-link" href="view_guestbook_table.php">View Guestbook</a>
                    <span>::|::</span>
                </div>
            </navbar>
            <hr size="3" noshade>
        </center>
	<center>
        <?php
            	$initial = $_POST["initial"];
            	$name = $_POST["name"];
            	$id = $_POST["id"];
            	$school = $_POST["school"];
            	$email = $_POST["email"];
            	$date = date("Y-m-d H:i:s");

		$initial = addslashes($initial);
            	$name = addslashes($name);
            	$id = addslashes($id);
            	$school = addslashes($school);
            	$email = addslashes($email);
            	$date = addslashes($date);

		$host = "localhost";
		$user = "root";
		$password = "";
		$conn = mysqli_connect($host, $user, $password)
			or die ("Can not connect to Database");
		
		mysqli_select_db($conn,"guestbook");

		$sql = "insert into record values
			('".$initial."', '".$name."', '".$id."', '".$school."', '".$email."', '".$date."')";
		$result = mysqli_query($conn, $sql) 
			or die ("Can not query");
		echo "Inserted Successfully !!!";
		mysqli_close($conn);
        ?>
	</center>
    </body>

</html>