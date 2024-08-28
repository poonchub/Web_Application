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
            .input1, .input2{
              margin-right: 15px;
              width:30px;
            }
        </style>
    </head>
    <body>
	<table width="70%">
		<tr>
			<td>
       			<fieldset width="100%">
            			<legend>แสดงวัน-เวลา ภาษาไทย</legend>
				<?php	
					date_default_timezone_set('Asia/Bangkok');
					echo "<hr width=\"100%\" noshade>";
					echo "Today is ".date("j\-F\-Y.")."<br>";
					echo "Now It Is ".date("h:i:s A");
					echo "<hr width=\"100%\" noshade>";
					
					function thaiDate($timestamp) {
    						$thaiDays = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];
   	 					$thaiMonths = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];

    						$dayOfWeek = date('w', $timestamp);
    						$day = date('j', $timestamp);
    						$month = date('n', $timestamp) - 1;
    						$year = date('Y', $timestamp) + 543; // เพิ่ม 543 ปีสำหรับปีไทย

    						return 'วันนี้ คือ '.$thaiDays[$dayOfWeek] . ' ที่ ' . $day . ' เดือน ' . $thaiMonths[$month] . ' พ.ศ. ' . $year.'<br>';
					}
					$datetime = new DateTime();
					echo thaiDate($datetime->getTimestamp());
					echo "เวลา ".date("h")." นาฬิกา ".date("i")." นาที ".date("s")." วินาที"
				?>
        		</fieldset>
			</td>
		</tr>
	</table>
        
      
    </body>
</html>