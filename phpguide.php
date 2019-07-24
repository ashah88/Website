<?php
// We include this code in each page that needs toconnect to the database
//Change password, username, ands dbname to correct info
$host = 'localhost';
$username = 'username';
$pass = 'password';
$dbname = 'dbname';
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);
$conn = new PDO($dsn, $username, $pass, $options);




//Take info from POST form and insert into db
//Remember to use '' around varables that contain characters
//Also remember top use back ticks around SQL keywords
$username = $_POST['username'];
$sql = "INSERT INTO users (username, `pass`) VALUES ('$username', '$pass')";
$conn->exec($sql);





//This just gets the last id of something that has been inserted into the db
$last_id = $conn->lastInsertId();




// This updates information in the database that already exists

$sql = "UPDATE users SET username = '$username', `pass` = $pass WHERE id = $userid";
$conn->exec($sql);



//This deletes the db row where id matches the id

$sql = "DELETE FROM users WHERE id = $id";
$conn->exec($sql);




//This select gets only one row of data from db

$sql = "SELECT * FROM badges WHERE badges WHERE id = $badgeid";
$s = $conn->prepare($sql);
$s->execute();
$result = $s->fetch(PDO::FETCH_ASSOC);
//This is how to show the data that we grabbed
echo $result['bname'];



//This selects all of the rows that match the query

    $sql = 'SELECT * FROM users';
    $s = $conn->prepare($sql);
    $s->execute();
    $result = $s->fetchALL();
//This sectrion displays the data 
if ($result && $s->rowCount() > 0) {
// The foreach takes all the data and splits it into each row as whatever variable name it 
    foreach ($result as $row) {
        echo $row['fname'];
    }
}




//This code shows us better errors when dealing with the db

try {
    
} catch (PDOException $error) {
    echo $sql.'<br />'.$error->getMessage();
}
