<?php 
    date_default_timezone_set("Asia/Kolkata");
    if(empty($_SESSION['id'])){
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $log = "User".rand().'_'.time().": ".getHostByName($_SERVER['HTTP_HOST']).' - '.date("F j, Y, g:i a").PHP_EOL.
        "Page trying to access: ".$url.PHP_EOL.
        "---------------------------------------".PHP_EOL;
        file_put_contents('logs/unauth_log_'.date("j-n-Y").'.log', $log, FILE_APPEND);
        header('location:login.php');
    }
    if($_SESSION['timeout'] <= time()){
        session_destroy();
        header('location:login.php');
    }
?>