<?php

$conn = mysqli_connect('localhost', 'root','', 'news_dp');
if (!$conn){echo 'Error ' . mysqli_connect_error(); }

 
$eerste =    $_POST['eerste'];
$tweede =    $_POST['tweede'];
$deerde =    $_POST['deerde'];
$vierde =    $_POST['vierde'];
$cienco =    $_POST['cienco'];
$naam   =    $_POST['naam']; 

if (isset($_POST['submit'])) {
$sql = "INSERT INTO form( eerste, tweede, deerde, vierde, cienco, naam ) 
        VALUES  ('$eerste' , '$tweede' , '$deerde' , '$vierde' , '$cienco' , '$naam')";

       if(mysqli_query($conn, $sql)){
        header("location: ./index.php?content=contact");
}else{
        echo 'Error ' . mysqli_error($conn);
       }
}

?>