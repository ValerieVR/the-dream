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
    <div id="converter">
        <h1>Currency Converter</h1>
        <form action="" method="post">
            <select name="from" id="from-currency">
            <option value="twndllr">TWD - New Taiwan Dollar</option>
            <option value="usdllr">USD - United States Dollar</option>
            <option value="euro">EUR - Euro</option>
            </select><br><br>
            <select name="to" id="to-currency">
            <option value="usdllr">USD - United States Dollar</option>
            <option value="twndllr">TWD - New Taiwan Dollar</option>
            <option value="euro">EUR - Euro</option>
            </select><br><br>
            <input type="text" name="amount" value="" id="amount"><br><br>
            <input type="submit" name="convert" value="Convert" id="submit-bttn"><br><br>
            <button type="button" id="swap-bttn">Swap</button>
        </form>
    </div>
</body>
</html>