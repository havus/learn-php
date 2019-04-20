<?php
session_start();
require('functions.php');
// cek tombol submit

if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($key === hash('fnv1a64', $row['username'])) {
        $_SESSION["login"] = true;
    }
    // echo("<pre>.print_r($id,1).</pre>");
    // echo("<pre>.print_r($key,1).</pre>");
    // echo("<pre>.print_r($result,1).</pre>");
    // id = 7, key = e5cde7fdda328454
}

if (isset($_SESSION["login"]) === true) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if( mysqli_num_rows($result) === 1 ) {
        // cek password
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if( password_verify($password, $row["password"]) ) {
            $_SESSION["login"] = true;
            // echo "<pre>".print_r($row,1)."</pre>";
            if (isset($_POST['remember'])) {
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('fnv1a64', $row['username']), time() + 60);
            }
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<head>
    <title>Halaman Login</title>
</head>
<body>

    <h1>Halaman Login</h1>

<?php if( isset($error) ) :?>
    <p style="color: red; font-style: italic;">Username / Password salah</p>
<?php endif ?>    


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
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </li>
            <li>
                <button type="submit" name="submit">LOGIN</button>
            </li>
        </ul>
    </form>


    
</body>
</html>