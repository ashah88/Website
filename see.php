<?php
include "sess.php";
include "conn.php";
// Handle Submitting the comment to the database
if (isset($_POST['submitcomment'])) {
$userid = $_POST['id'];
$comment = $_POST['comment'];
$sql = "INSERT INTO comments (userid, comment) VALUES ($userid, '$comment')";
$conn->exec($sql);
}

//Show comments
try{
$sql = 'SELECT comments.*, users.username FROM comments JOIN users ON (comments.userid = users.id)';
    $s = $conn->prepare($sql);
    $s->execute();
    $result = $s->fetchALL();
  } catch (PDOException $error) {
    echo $sql.'<br />'.$error->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class= bg-dark>
  <div class="container">
  <?php include "nav.php"; ?>
    <h1 class="text-danger">See What Everyone is Saying</h1>
   
    <div class="row">
  <div class="col"><h2 class="text-primary">Please Leave a Comment About my Site and How I Can Improve. Also, Feel Free to Add Comments About Thoughts You Think Are Good.</h2></div>
</div>

<div class="row pt-3">
  <div class="col">
  <form action="" method="post">
<div class="form-group">
  <label for="comment" class="text-secondary">Comment:</label>
  <textarea name="comment" id="comment" cols="30" rows="10" class="bg-primary"></textarea>
</div> 
<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
<button type="submit" name="submitcomment" class="btn btn-success">Post Comment</button>

  </form>
  </div>
</div>
<?php
//This sectrion displays the data 
if ($result && $s->rowCount() > 0) {
// The foreach takes all the data and splits it into each row as whatever variable name it 
    foreach ($result as $row) { ?>
    <div class="row text-light">
      <div class="col-2">
       <?php echo $row['username']; ?>
       <br>
       <?php echo $row['created_at']; ?>
      </div>
<div class="col">
<?php echo $row['comment']; ?>  
</div>

</div>
<?php

    }
}
?>
</div>
</body>

</html>