<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>ADD Customer</title>
    </head>

    <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header mb-4">
                    <h2>Tambah Customer Baru</h2>
                </div>
        <a href="index.php">Go to Home</a>
        <br></br>

        <form action = "add_process.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
