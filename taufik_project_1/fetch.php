<?php 
$connection = mysqli_connect("localhost","root","","project_1");
if(!$connection) {
    die("connection failed :". mysqli_connect_error());
} echo "Connection successfully to project_1 <br>";

$query = mysqli_query($connection, "SELECT ID, Nama_lengkap, Jurusan FROM table_guru");

if (!$query) {
    echo ("Error query". mysqli_error($connection));
}
$data = mysqli_fetch_row($query);
print_r($data);

mysqli_close($connection);