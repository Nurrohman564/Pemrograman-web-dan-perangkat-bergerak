<?php
$connection = mysqli_connect("localhost","root","","project_1");
if(!$connection) {
    die("connection failed :". mysqli_connect_error());
} echo "Connection successfully to project_1 <br>";
$query = mysqli_query($connection,"SELECT * FROM table_guru");
if (!$query) {
    $num_of_rec = mysqli_num_rows($query);
    echo "Number of Records =". $num_of_rec;
}
mysqli_close($connection);