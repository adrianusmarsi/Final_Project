<?php

$server     = "localhost";
$user       = "root";
$pass       = "";
$database   = "lc_login";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal Tersambung Dengan Database.')</script>");
}