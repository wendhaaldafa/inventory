<?php
// koneksi ke database 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'inventory';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        echo 'Error : ' .mysqli_connect_error($conn);
    }

?>