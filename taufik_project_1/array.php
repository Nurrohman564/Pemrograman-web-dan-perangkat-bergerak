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
while ($data = mysqli_fetch_array($query, MYSQLI_NUM));{
    print "ID :" . $data[0]."<br>";
    print "Nama_lengkap :" . $data[1]."<br>";
    print "Jurusan :" . $data[2]."<br>";
}

mysqli_close($connection);

