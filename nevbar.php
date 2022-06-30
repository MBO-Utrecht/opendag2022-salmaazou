

<?php

if (isset($_GET["content"])){
  $active = $_GET["content"];
}else {
  $active = "";
}

?>
<header>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?content=home">MBO Utrecht</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">

      <li class="nav-item">
          <a class="nav-link <?php if ($active == "home") {echo "active";} ?>" href="./index.php?content=home">𝑯𝑶𝑴𝑬</a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "archief") {echo "active";} ?>" href="./index.php?content=archief">𝑨𝑹𝑪𝑯𝑰𝑬𝑭</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "contact") {echo "active";} ?>" href="./index.php?content=contact">𝑪𝑶𝑵𝑻𝑨𝑪𝑻</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "lezen") {echo "active";} ?>" href="./index.php?content=lezen">Enquete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "read") {echo "active";} ?>" href="./index.php?content=read">Enquete lezen</a>
        </li>
       
        </ul>
        
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php
  if (isset($_SESSION["id"])) {
    switch($_SESSION["userrole"]){
      case 'admin':


  echo '<li class="nav-item">
  <a class="nav-link ml-auto';
   echo ($active == "a-home") ? "active" : "";
   echo '" href="./index.php?content=a-home">Dashboard</a>
</li>';

echo '<li class="nav-item">
<a class="nav-link ml-auto';
 echo ($active == "admin_page") ? "active" : "";
 echo '" href="./index.php?content=admin_page">admin page</a>
</li>';


        break;
        case 'root':

          echo '<li class="nav-item">
          <a class="nav-link ml-auto';
           echo ($active == "r-root") ? "active" : "";
           echo '" href="./index.php?content=r-root">𝑹𝑬𝑺𝑻</a>
        </li>';
    

          break;
          case 'moderator':

            break;
            case 'customer':

              break;

              default:

              break;
    }
    echo '<li class="nav-item">
    <a class="nav-link ml-auto';
     echo ($active == "logout") ? "active" : "";
     echo '" href="./index.php?content=logout">𝑼𝑰𝑻𝑳𝑶𝑮𝑮𝑬𝑵</a>
  </li>';
  }else {
    echo '<li class="nav-item">
          <a class="nav-link ml-auto';
          echo ($active == "register") ? "active" : "";
          echo  '"href="./index.php?content=register">𝑹𝑬𝑮𝑰𝑺𝑻𝑹𝑬𝑬𝑹</a>
        </li>';

        echo '<li class="nav-item">
          <a class="nav-link ml-auto'; 
         echo ($active == "login") ? "active"  : "";
         echo '" href="./index.php?content=login">𝑰𝑵𝑳𝑶𝑮𝑮𝑬𝑵</a>
        </li>';
  }
  
   ?>
        
    

        </ul>
      

    </div>
    
  </div>
</nav>
</header>