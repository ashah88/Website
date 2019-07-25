<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ajay.php">Today's Thought</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="see.php">See What Everyone's Talking About</a>
  </li>
  <?php
  if(!isset($_SESSION['loggedin'])){ ?>
  <li class="nav-item">
    <a class="nav-link" href="login.php">login</a>
  </li>
  <?php
      }else{ ?>
      <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
        <?php
  }
  ?>
    <?php
  if(isset($_SESSION['admin'])){
     if($_SESSION['admin'] == "true") { ?>
        <li class="nav-item">
    <a class="nav-link disabled" href="./admin.php" tabindex="-1" aria-disabled="true">Admin</a>
  </li>
  <?php
     } 
  }
  

  ?>

</ul>