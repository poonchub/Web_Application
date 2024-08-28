<!DOCTYPE html>
<html>
    <head>
        <title></title>
	<meta charset="UTF-8">
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .line1{
                border-top: 3px dotted;
                width: 40%;
            }
            button {
                font-weight: 700;
                padding:8px 14px;
                border-radius: 45px;
                transition: all 0.5;
                background-color: aqua;
            }
            button:hover{
                background-color: rgb(138, 255, 42);
            }
            th {
              background-color: lightgray;
              height: 16px;
            }
            .input{
              width:80%;
            }
        </style>
    </head>
    <body>
	<table width="70%">
		<tr>
			<td>
       			<fieldset width="100%">
				<legend>OUTPUT</legend>
				<table width="80%"><tr><td>
            			<?php
					$initial = $_POST["initial"];
					$fname = $_POST["fname"];
					$lname = $_POST["lname"];
					$dob = $_POST["dob"];
					$formatdob = $dob;
					$address = $_POST["address"];
					echo "Initial: $initial<br>";
					echo "First Name: $fname<br>";
					echo "Last Name: $lname<br>";
					echo "Date Of Birth: $formatdob<br>";
					echo "Address: $address<br>";
				?>
				</td></tr></table>			
			</fieldset>
			</td>
		</tr>
	</table>
        
      
    </body>
</html>