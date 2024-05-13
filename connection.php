<?php
    $user = 'root';
    $password = '';
    $db = 'banking_db';
    $host = 'localhost';

    $link = mysqli_connect("$host","$user","$password");
    mysqli_select_db($link, $db);
    // $success = mysqli_real_connect(
    //    $link,
    //    $host,
    //    $user,
    //    $password,
    //    $db
    // );
?>