<?php
require('functions.php');
// cek tombol submit
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            header("Location: index.php");
            exit;
        }
    }
}



?>

<!DOCTYPE html>
<head>
    <title>Halaman Login</title>
</head>
<body>


    <h1>Halaman Login</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">LOGIN</button>
            </li>
        </ul>
    </form>


    
</body>
</html>