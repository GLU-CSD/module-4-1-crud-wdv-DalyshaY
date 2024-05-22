<?php
 $connect = mysqli_connect("localhost", "root", "", "shopping_cart");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>winkelwagen</title>
    <link rel="stylesheet" href="./assets/css/winkelwagen.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php include "header.php" ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Shopping cart date</h2>

                    <?php
                     
                </div>
                <div class="col-md-6">
                    <h2>Item selected</h2>
                </div>
            </div>
        </div>
    </div>`





    <?php include "footer.php" ?>
</body>

</html>