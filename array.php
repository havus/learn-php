<?php 
$conn = mysqli_connect("localhost", "root", "php123", "phpdasar");


$username = 'havus';
$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

var_dump(mysqli_fetch_assoc($result));

// kalo null berarti array(data) belum ada di database;