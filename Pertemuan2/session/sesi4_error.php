<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <tittle>Sesi 4 - Error</tittle>
</head>
<body>
    <?php
    echo "Isi dari variable session alamat adalah" . $_SESSION['alamat'];
    ?>
    </body>
    </html>