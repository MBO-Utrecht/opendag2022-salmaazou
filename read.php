<?php



$conn = mysqli_connect('localhost','root','','news_dp'); 
$sql = "SELECT * FROM `form`";
$result = mysqli_query($conn, $sql);

while($record = mysqli_fetch_assoc($result)) {
    echo $record["id"] . " " . $record["eerste"] . " " . $record["tweede"] . " " . $record ["deerde"] . " " . $record["vierde"] ." ".  $record["cienco"]."<br>";
}
?>

   

