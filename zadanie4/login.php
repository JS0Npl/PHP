<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    include "config.php";

    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "s", $_POST['username']);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if(hash('sha512', $_POST['password']) === (hash('sha512',$row['password']))) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['first_name'] = "Jakub";
            $_SESSION['last_name'] = "Urbaniak";
            header("location: index.php");
            exit;
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "Wrong login";
    }
}
?>

<form method="post">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Log in</button>
</form>
