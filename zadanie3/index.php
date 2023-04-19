<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zadanie 2</title>
</head>
<body>
    <form method="POST" action="">
      <p> Username: </p> <input type="text" value="admin" name="username" id=""> <br>
       <p> Password: </p> <input type="password" value="test" name="password" id=""> <br>
        <input type="submit" name="submit" value="Log in">
    </form>
</body>
</html>

<?php
/*
$base = new mysqli("localhost", "root", "", "base");

if($base->connect_error){
    die('Connection error: '.$base->connect_error);
}else{
    echo "connection successful";
}

if (isset($_POST['submit'])) {

    $select = "SELECT * FROM users WHERE username ='". $_POST['username']."' and password = '".$_POST['password']."'";

    if (mysqli_num_rows(mysqli_query($base, $select)) > 0) {
        echo "Welcome, ".$_POST['username'];
    }
    else {
        echo "<p>Incorrect password or login.</p>";
    }
}
*/
?>

<?php
$db = new mysqli("localhost", "root", "", "base");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = ? AND password = ?";

    $stmt = $db->prepare($query);

    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();

    $stmt->store_result();


    if($stmt->num_rows == 1) {
        echo "Welcome".$_POST['username']."!";
    } else {
        echo "Wrong username or password";
    }
}
?>
