<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <tittle>Sesi 5 - Checking</tittle>
</head>
<body>
    <?php
    if(isset($_SESSION['alamat'])){
        echo "Alamat Saya  " . $_SESSION['alamat']
    }else{
        echo "Variable session alamat tidak ada / sudah dihapus";
    }
    
    ?>
    </body>
    </html>