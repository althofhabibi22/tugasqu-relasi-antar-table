<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "unugiri";

    $koneksi = mysqli_connect($host, $user, $pass, $db);

    if (!$koneksi) {
        die("koneksi eror :" . mysqli_connect_error());
    }


?>