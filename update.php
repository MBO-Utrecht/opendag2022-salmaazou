<?php

$id = $_GET["id"];

include("./connect_dp.php");

$sql = "SELECT * FROM `register` WHERE `id` = $id";

$result = mysqli_query($conn, $sql);

$record =  mysqli_fetch_assoc($result);


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<section class="archief_bg">

<div class="container">

  <div class="row ">

    <div class="col-6" id="formid">
    <form id="contact-form" action="update_script.php" method="POST">
      <div class="contact-text">
      <h1 class="say-text">Update</h1>
      </div>
        <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php echo $record["email"] ?>">
        <br>
        <input type="text" class="form-control" name="password" id="password" placeholder="password" value="<?php echo $record["password"] ?>"> 
        <br>
        <input type="hidden"  value="<?php echo $id; ?>" name="id">
        <br>
        <input type="submit" class="form-control submit" name="submit" value="Aanpassen">
    </form>
</div>





  </div>
  </div>
  </div>




  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="./js/app.js"></script>
  </section>

</body>

</html>