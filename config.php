<?php
    $servername = "localhost";
    $username = "root";
    $passsword = "";
    $dbname = "popeyes-lab";

    $conn = new mysqli($servername, $username, $passsword, $dbname);

    if ($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }
?>