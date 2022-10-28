<?php

include_once("config.php");

$query = "SELECT * FROM customers ORDER BY id DESC";
$result = mysqli_query($conn_db, $query);

?>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <title>Homepage</title>
</head>

<body>
<div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="float-start mb-4">
                    <h2>Customers List</h2>
                </div>
                <div class="float-end">
                <a href="add.php" class="btn btn-success">Add new Customers</a><br></br>
                </div>
    <table width='80%' border=1>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Join Date</th>
                <th>Last Updated</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($result->num_rows > 0): ?>
                <?php while($customer_data = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <td> <?php echo $customer_data['name']?></td>
                        <td> <?php echo $customer_data['phone']?></td>
                        <td> <?php echo $customer_data['email']?></td>
                        <td> <?= $customer_data['created']?></td>
                        <td> <?= $customer_data['updated']?></td>
                        <td>
                            <a href='edit.php?id=<?=$customer_data["id"]?>'>Edit</a> | <a href ='delete.php?id=<?=$customer_data["id"]?>'>Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" rowspan="1" headers="" align="center">Data customer tidak ditemukan!</td>
                        </tr>
                        <?php endif; ?>

                        <?php mysqli_free_result($result);?>
                    </tbody>
                    </table>

                    <?php if(isset($_GET["message"])){
                        $message = $_GET["message"];
                        echo "<script type='text/javascript'>alert('$message');";
                        echo "window.location='index.php'</script>";
                    }
                    ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
                </body>
                </html>