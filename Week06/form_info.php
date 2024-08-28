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
            			<legend>Your Information</legend>
				<form method="post" action="display_form_info.php">
					<table width="100%" boder=1>
						<tr>
							<td colspan="2">
								<hr noshade>
							</td>
						</tr>
						<tr>	
							<td align="right">Initial:</td>
							<td>
								<input type="radio" name="initial" value="mr." checked>Mr.
								<input type="radio" name="initial" value="ms.">Ms.
							</td>
						</tr>
						<tr>	
							<td align="right">First Name:</td>
							<td>
								<input class="input" type="text" name="fname" required>									</td>
						</tr>
						<tr>	
							<td align="right">Last Name:</td>
							<td>
								<input class="input" type="text" name="lname" required>									</td>
						</tr>
						<tr>	
							<td align="right">Date Of Birth:</td>
							<td>
								<input type="date" name="dob" required>											</td>
						</tr>
						<tr>	
							<td align="right">Address:</td>
							<td>
								<textarea name="address" required></textarea>										</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr noshade>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" name="submit" value="Submit">
								<input type="reset" name="reset" value="Reset">
							</td>
						</tr>
					</table>
				</form>
			</fieldset>
			</td>
		</tr>
	</table>
        
      
    </body>
</html>