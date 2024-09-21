<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="refresh">
    </head>
    <body>
        <?php
		$host = "localhost";
		$user = "root";
		$password = "";
		$conn = mysqli_connect($host, $user, $password)
			or die ("Can not connect to Database");
		
		$sql = "create database guestbook";
		$result = mysqli_query($conn, $sql) 
			or die ("Can not query");
		echo "Created Database Successfully !!!";
		mysqli_close($conn);
        ?>
    </body>
</html>