
<?php 
include "cn.php";


$sql = "SELECT * FROM register";


$result = $conn->query($sql);


?>

    


  <section class="a-home-bg">
    <div class="container">
        <h1>users</h1>
      
<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Wachtwoord</th>
  

                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {

                      while ($row = $result->fetch_assoc()) {
                          ?>
                            <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                   
                   	<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?> ">Bewerk</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Verwijderen</a></td>


              


                </tr>
               
                   <?php     
              
                      }
                  
                    
                    }
                ?>
           
            </tbody>
        </table>
    </div>

    </section>
    

