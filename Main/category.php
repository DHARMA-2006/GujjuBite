<?php
    include_once'../header/login/conn.php';
    $sql="SELECT name from categories";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    foreach ($row as $value) {
        echo $value . "<br>";
    }
?>