<?php

//connect to data base
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if (!$connection) {
    die("Database connection failed");
}
?>