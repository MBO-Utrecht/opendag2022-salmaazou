<?php

$conn = mysqli_connect('localhost', 'root','', 'news_dp');
if (!$conn){echo 'Error ' . mysqli_connect_error(); }

 
$firstName =    $_POST['firstName'];
$lastName =    $_POST['lastName'];
$Email =    $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$textarea = $_POST['textarea'];

if (isset($_POST['submit'])) {
$sql = "INSERT INTO users(firstName, lastName, Email, PhoneNumber, textarea) 
        VALUES  ('$firstName' , '$lastName' , '$Email' , '$PhoneNumber' , '$textarea')";
       
       if(mysqli_query($conn, $sql)){
        header("location: ./index.php?content=contact");
}else{
        echo 'Error ' . mysqli_error($conn);
       }
}

?>