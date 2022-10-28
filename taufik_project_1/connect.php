<?php
$connection = mysqli_connect("localhost","root","","project_1");
if(!$connection){
    die ("connection Failed : ". mysqli_connect_error());
}  echo "Connection Successfully";
mysqli_close($connection);
