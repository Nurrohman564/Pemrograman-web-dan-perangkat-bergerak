<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <tittle>Sesi 2</tittle>
</head>
<body>
    <?php
    echo "Hallo, Nama Saya " . $_SESSION['nama'] . "<br>";
    echo "Nomoer Absen Saya " . $_SESSION['absen'];
    ?>
    </body>
    </html>