<?php
@include 'config.php';


if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>

<section class="archief_bg">
   
<div class="container">


   <?php

   $select = mysqli_query($conn, "SELECT * FROM products");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
         <th>Afbeelding</th>
            <th>MOB Utrecht</th>
            <th>Datum</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="300" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
        
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

</section>