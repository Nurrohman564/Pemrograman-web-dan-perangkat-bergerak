<?php
session_start();

if(isset($_SESSION['username'])){
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="style.css">
        
</head>
<body>
    <div class="kotak_login">
    <p class="tulisan_login">Silahkan login</p>

    <form action="index.php" method="POST">
        <label for="username"> Username</label>
        <input name="username" type="text" class="form_login" />
        <br/>
        <label for="password"> Password</label>
        <input name="password" type="password" class="form_login" />
        <br/>
        <input name="submit" type="submit" class="tombol_login" value="login">
</form>
</div>
</body>
</html>