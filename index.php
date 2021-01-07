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
            <input type="submit" name="swap" value="Swap" id="swap-bttn">
        </form>
        <div id="display-conversion">
            <h6>Conversion:</h6>
            <?php require_once "convert.php";?>
            <?php require_once "swap.php";?>
        </div>
    </div>
</body>
</html>