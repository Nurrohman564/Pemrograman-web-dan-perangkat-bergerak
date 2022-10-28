<?php
$cookie_name = "user";
$cookie_value = "Samudra";
setcookie($cookie_name, $cookie_value, time()+3600, "/");

if(isset($_COOKIE[$cookie_name])){
    echo "Cookie ". $cookie_name . " telah diatur!<br/>";
    echo "Nilainya Adalah " . $_COOKIE[$cookie_name];
}else{
    echo "Nama Cookie " . $cookie_name. "Tidak Diatur";
}