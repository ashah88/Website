<?php
include "conn.php";
if (!isset($_SESSION['loggedin'])) {
  if (empty($_SESSION['loggedin'])) {
    session_start();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thoughts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
      <?php include "nav.php"; ?>
<h1 class="text-danger">Thoughts</h1>
<div class="row">
<div class="col"> <h3 class="text-danger">Explanation:</h3>
<p class="text-danger">This website was made to talk about different theorys that I created. Everyday there will be a new fact or thought. On Friday's I will ask for suggestions to talk about.</p>
</div>
<div class="col"> <img width="200px" src="https://images.emojiterra.com/google/android-pie/512px/1f914.png" alt=""></div>
</div>


<h3 class="text-danger">Register</h3>
<p class="text-danger">If you click register then I will be able to send you today's thought daily. (:</p>
<div class="" style="width: 5.5rem;">
  <div class="">
    <h5 class="card-title"></h5>
    <p class="card-text">
    <a href="register.php" class="btn btn-success">Register</a>
  </div>
</div>

<br>
<div class="row mb-3">
        <div class="col-sm-3">
          <div class="card">
            <div class="bg-danger">
              <h5 class="card-title">Spotify Premium</h5>
              <p class="card-text">Try Spotify Preium Free for 30 Days</p>
              <a href="spotify.php" class="btn btn-success">Try Now!</a>
            </div>
          </div>
        </div>
</div>
       
        <div class="row mb-3">
        <div class="col-sm-7">
          <div class="card">
            <div class="bg-success">
              <h5 class="card-title">A.A. Shah Presents: The Shah Game</h5>
              <a href="game.php" class="btn btn-primary">Play Now!</a>
            </div>
          </div>
        </div>
</div>

        <div class="row mb-3">
          <div class="col">
        <div class="col-sm-10">
          <div class="card">
            <div class="bg-primary">
              <h5 class="card-title">Play Snake! Beat 50!</h5>
              <a href="https://www.google.com/search?q=snake" class="btn btn-danger">Play Now!</a>
            </div>
          </div>
        </div>
        </div>
</div>
</div>

</body>
</html>