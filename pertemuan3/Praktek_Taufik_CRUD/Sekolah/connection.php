<?php

$connection = mysqli_connect("localhost","root","","taufik_sekolah");
if(!$connection){
    echo mysqli_connect_error();
}