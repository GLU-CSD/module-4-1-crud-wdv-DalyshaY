<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/detail.css">
    <title>Detail page</title>
</head>

<body>
    <?php include "header.php" ?>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
    <div class="card-wrapper">
        <div class="card">
            <?php
            include "products.php";
            $id = $_GET['id'];
            foreach ($array['products'] as $product) {
                if ($id == $product['id']) {
                    ?>
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase">
                              <?php  
                                 foreach ($product['photos'] as $nummer => $photoUrl) {
                                    ?>
                                    <img src="<?php echo $photoUrl; ?>" alt="img_<?php echo $nummer + 1; ?>">
                                <?php
                                }

                                ?>
                            </div>
                        </div>



                        <div class="img-select">

                            <?php
                            foreach ($product['photos'] as $nummer => $photoUrl) {
                                ?>
                                <div class="img-item">
                                    <a href="#" data-id="<?php echo $nummer + 1; ?>">
                                        <img src="<?php echo $photoUrl?>" alt="img_<?php echo $nummer + 1; ?>">
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="product-content">
                        <h2 class="product-title">
                            <?php echo $product['title'] ?>
                        </h2>
                        <div class="product-price">
                            <p class="last-price">Alleen:<span>
                                    <?php echo $product['price'] ?>
                                </span></p>
                            <p class="new-price">Met een vriendin: <span> 25% korting op beide behandelingen.</span></p>
                        </div>

                        <div class="product-detail">
                            <h2>Meer info:</h2>
                            <p>
                                <?php echo $product['info'] ?>
                            </p>

                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>

                            <div class="purchase-info">
                                <form action="winkelwagen.php" method="post">

                                <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                                <input type="number" min="0" value="1" name="aantal">
                                <button type="submit" class="btn">
                                    In winkelwagen. <i class="fas fa-shopping-cart"></i>
                                </button>
                                <button type="button" class="btn">Contact</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
            ?>
    </div>
    </div>
    </div>

    <div class="footer">
        <div> Plaats.
            <p>
                <a>Ik ben gevestigt in Utrecht. De exacte locatie krijgt u nadat u heeft geboekt.</a>
            </p>
        </div>
        <div>Aanmelden
            <p>Meld u aan voor de nieuwsbrief en ontvang 10% korting.</p>
        </div>
        <div>Klantenservice
            <p>Voor vragen bel naar 050 500 567 777 of mail naar random@hotmail.com</p>
        </div>
    </div>
    <div class="copyright"> © Dalysha Jonis 2024.</div>
    <script src="assets/js/detail.js"></script>
</body>
<html>