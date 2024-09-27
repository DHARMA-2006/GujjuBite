<?php
    include_once'../header/login/conn.php';
    $sql="SELECT * from categories";
    $result = mysqli_query($db, $sql);
    // if(!$result){
    //     die("Query failed: " . mysqli_error($db));
    // }
    // while($data=mysqli_fetch_array($result)){
    //     echo $data['category_id']."<br>";
    //     echo $data['name']."<br>";
    // }
?>