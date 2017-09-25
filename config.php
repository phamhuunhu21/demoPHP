<?php
    $local = "localhost";
    $uname = "root";
    $password = "";
    $dbName = "webbanhangcongnghe";
    $con = mysqli_connect($local, $uname, $password);
	mysqli_set_charset($con,"utf8");
	mysqli_select_db($con, $dbName);
?>