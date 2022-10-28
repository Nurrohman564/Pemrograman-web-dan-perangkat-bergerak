<?php
// $cookie_name = "user";
// $cookie_value = "Angkasa";
setcookie("user", "", time()+3600, "/");

if(isset($_COOKIE['user'])){
    echo "Cookie ". 'user' . " telah diatur!<br/>";
    echo "Nilainya Adalah " . $_COOKIE['user'];
}else{
    echo "Nama Cookie " . 'user'. "Tidak Diatur";
}