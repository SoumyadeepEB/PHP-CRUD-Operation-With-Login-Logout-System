<?php 
    session_start();
    date_default_timezone_set("Asia/Kolkata");
    session_destroy();

    $log = getHostByName($_SERVER['HTTP_HOST']).' - '.date("F j, Y, g:i a").PHP_EOL.
    "Logout_".time().PHP_EOL.
    "---------------------------------------".PHP_EOL;
    file_put_contents('logs/log_'.date("j-n-Y").'.log', $log, FILE_APPEND);

    header('location:login.php');
?>
