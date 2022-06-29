<?php

include("./connect_dp.php");


$id =           $_POST['id'];
$email =    $_POST['email'];
$password =    $_POST['password'];


$sql = "UPDATE `register`
        SET `email` = '$email',
        `password` = '$password'
        WHERE `id` = $id;";

        mysqli_query($conn, $sql);

        header("location: ./index.php?content=a-home");

?>