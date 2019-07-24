<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="home.php">Today's Thought</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="see.php">See What Everyone's Talking About</a>
  </li>
  <?php
  if(isset($_SESSION['loggedin'])){
     if($_SESSION['loggedin'] == "true") { ?>
  <li class="nav-item">
    <a class="nav-link" href="login.php">login</a>
  </li>
  <?php

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