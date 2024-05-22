<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Homepage</title>
</head>

<body class="container">
  <?php include "header.php" ?>
  <div class="productenkolom">
    <section class="container">
      <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      include "products.php";

      foreach ($array['products'] as $product) {
        echo "<div class='card'>";
        echo "<img class='card-image' src='{$product['photos'][0]}' alt='{}'/>";
        echo "<h3>{$product['title']}</h3>";
        echo "<div>{$product['id']}</div>";
        echo "<div>{$product['omschrijving']}</div>";
        echo "<div>{$product['price']}</div>";
        echo "<a href='detail.php?id={$product['id']}' class='neon'>
           Maak een afspraak
         </a>";
        echo "</div>"; 
      }
      ?>
    </section>
  </div>
  <?php include "sidebar.php" ?>
</div>
 <?php include "footer.php" ?>
  <script src="assets/js/app.js">
  </script>
</body>
</php>