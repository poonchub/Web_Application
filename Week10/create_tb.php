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
		
		$sql = "create table record (
			initial char(3) not null, 
			name varchar(100) not null, 
			id char(8) not null primary key, 
			school varchar(100) not null, 
			email varchar(100) not null, 
			time datetime not null)";
		
		mysqli_select_db($conn,"guestbook");

		$result = mysqli_query($conn, $sql) 
			or die ("Can not query");
		echo "Created Table Successfully !!!";
		mysqli_close($conn);
        ?>
    </body>
</html>