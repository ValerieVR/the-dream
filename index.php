<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="stylesheet" href="style.css">
    <title>Currency Converter</title>
</head>
<body>
    <div id="taiwan-flag">
        <img src="img/flag.png" alt="taiwanese flag">
    </div>
    <div id="converter">
        <h1>Currency Converter</h1>
        <form action="" method="post">
            <select name="from" id="from-currency">
            <option value="text">Select Currency</option>
            <option value="twndllr">TWD - New Taiwan Dollar</option>
            <option value="usdllr">USD - United States Dollar</option>
            <option value="euro">EUR - Euro</option>
            </select><br><br>
            <select name="to" id="to-currency">
            <option value="text">Select Currency</option>
            <option value="twndllr">TWD - New Taiwan Dollar</option>
            <option value="usdllr">USD - United States Dollar</option>
            <option value="euro">EUR - Euro</option>
            </select><br><br>
            <input type="text" name="amount" value="" id="amount" placeholder="Enter amount ..." autocomplete="off"><br><br>
            <input type="submit" name="convert" value="Convert" id="convert-bttn">
            <button type="button" id="swap-bttn">Swap</button>
        </form>
        <div id="display-conversion">
            <h6>Conversion:</h6>
            <?php
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);
                
                if (isset($_POST["convert"])) {
                    $from_curr = $_POST["from"];
                    $to_curr = $_POST["to"];
                    $amount = $_POST["amount"];
                    
                    switch(true) {
                        case ($amount==""):
                            echo "<p class='colorMsg'>No amount to convert!</p>";
                            break;
                        case ($from_curr=="text" && $to_curr=="text"):
                            echo "<p class='colorMsg'>Choose a currency!</p>";
                            break;
                        case ($from_curr=="text" && $to_curr=="twndllr"):
                            echo "<p class='colorMsg'>Choose a currency!</p>";
                            break;
                        case ($from_curr=="text" && $to_curr=="usdllr"):
                            echo "<p class='colorMsg'>Choose a currency!</p>";
                            break;
                        case ($from_curr=="text" && $to_curr=="euro"):
                            echo "<p class='colorMsg'>Choose a currency!</p>";
                            break;
                        case ($from_curr=="twndllr" && $to_curr=="text"):
                            echo "<p class='colorMsg'>Choose a currency!</p>";
                            break;
                        case ($from_curr=="twndllr" && $to_curr=="twndllr"):
                            echo "<p>$amount TWD = $amount TWD</p>";
                            break;
                        case ($from_curr=="twndllr" && $to_curr=="usdllr"):
                            $result = $amount*0.036;
                            echo "<p>$amount TWD = $result USD</p>";
                            break;
                        case ($from_curr=="twndllr" && $to_curr=="euro"):
                            $result = $amount*0.029;
                            echo "<p>$amount TWD = $result EUR</p>";
                            break;
                        case ($from_curr=="usdllr" && $to_curr=="text"):
                            echo "<p class='colorMsg'>Choose a currency!</p>";
                            break;
                        case ($from_curr=="usdllr" && $to_curr=="twndllr"):
                            $result = $amount*27.98;
                            echo "<p>$amount USD = $result TWD</p>";
                            break;
                        case ($from_curr=="usdllr" && $to_curr=="usdllr"):
                            echo "<p>$amount USD = $amount USD</p>";
                            break;
                        case ($from_curr=="usdllr" && $to_curr=="euro"):
                            $result = $amount*0.81;
                            echo "<p>$amount USD = $result EUR</p>";
                            break;
                        case ($from_curr=="euro" && $to_curr=="text"):
                            echo "<p class='colorMsg'>Choose a currency!</p>";
                            break;
                        case ($from_curr=="euro" && $to_curr=="twndllr"):
                            $result = $amount*34.48;
                            echo "<p>$amount EUR = $result TWD</p>";
                            break;
                        case ($from_curr=="euro" && $to_curr=="usdllr"):
                            $result = $amount*1.23;
                            echo "<p>$amount EUR = $result USD</p>";
                            break;
                        default:
                            echo "<p>$amount EUR = $amount EUR</p>";
                            break;   
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>