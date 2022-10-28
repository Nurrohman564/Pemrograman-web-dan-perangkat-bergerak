<?php
$connection = mysqli_connect("localhost","root","","project_1");
if(!$connection) {
    die("connection failed :". mysqli_connect_error());
} echo "Connection successfully to project_1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, Nama_lengkap, Alamat, TTL, NIP, Jurusan) VALUES('','Nurrohman','Jl.Sungai Merah No.44','2001','K315167','Psikologi')");
if(!$query_insert) {
    echo("Error query ". mysqli_error($connection));
}
mysqli_close($connection);