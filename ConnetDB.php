<?php 
    $servername = "localhost";
    $usename = "root";
    $passwork = "";
    $nameDB = "duan1";

    $conn = mysqli_connect($servername,$usename,$passwork,$nameDB);

    if ($conn == true){
        echo "ket noi thanh cong";
    }
?>