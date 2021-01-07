<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    if (isset($_POST["swap"])) {
        $from_curr = $_POST["from"];
        $to_curr = $_POST["to"];
        $amount = $_POST["amount"]; 
    }           
?>