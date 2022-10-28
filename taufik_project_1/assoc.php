<?php 
$connection = mysqli_connect("localhost","root","","project_1");
if(!$connection) {
    die("connection failed :". mysqli_connect_error());
} echo "Connection successfully to project_1 <br>";

$query = mysqli_query($connection, "SELECT ID, Nama_lengkap, Jurusan FROM table_guru");

if (!$query) {
    echo ("Error query". mysqli_error($connection));
}
echo "<br> Hasil numerik <br>";
while ($row = mysqli_fetch_array($query, MYSQLI_NUM));{
    print "ID :" . $row["ID"]."<br>";
    print "Nama_lengkap :" . $row["Nama_lengkap"]."<br>";
    print "Jurusan :" . $row["Jurusan"]."<br>";
}

mysqli_close($connection);