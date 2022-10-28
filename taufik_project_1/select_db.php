<?php
$connection = mysqli_connect("localhost","root","","project_1");
if(!$connection) {
    die("connection failed :". mysqli_connect_error());
} echo "Connection successfully to project_1 <br>";

$connection_2 = mysqli_select_db($connection, "project_2");
if(!$connection) {
    die("connection failed :". mysqli_connect_error());
} echo "Connection successfully to project_2 <br>";