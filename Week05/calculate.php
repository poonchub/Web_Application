<!DOCTYPE html>
<html>
    <head>
        <title></title>
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
        </style>
    </head>
    <body>
        <?php
            $do = $_POST["do"];
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            $result = 0;
            $text = "null";

            if ($number1>=$number2){
                switch ($do) {
                    case "+" :
                        $result = $number1+$number2;
                        break;
                    case "-" :
                        $result = $number1-$number2;
                        break;
                    case "*" :
                        $result = $number1*$number2;
                        break;
                    case "/" :
                        if ($number2==0) {
                            $text = "Error Divide By Zero!";
                            break;
                        }
                        $result = $number1/$number2;
                        break;      
                }

                if ($text=="null"){
                    echo "<h1>The answer of  $number1 $do $number2 = $result</h1>";
                }
                else {
                    echo "<h1>$text</h1>";
                }
            }
            else {
                echo "<h1>Invalid Input!</h1>";
            }
        ?>
        <hr class="line1">
        <br>
        <a href="calculate.html">
            <button>Go back to Calculate Program</button>
        </a>
        <br>
        <hr size="2px" width="70%" noshade>
    </body>
</html>