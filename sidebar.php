
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
<div class="sidebar_left">
        <button class="neonbutton">Acryl.</button>
        <button class="neonbutton">Gel.</button>
        <button class="neonbutton">Manicure.</button>
        <button class="neonbutton">Pedicure.</button>
        <button class="neonbutton">Manicure + Pedicure.</button>


        <div class="custom-wrapper">
            <div class="price-input-container">
                <div class="price-input">
                    <div class="price-field">
                        <span>Min prijs:</span>
                        <input type="number" class="min-input" value="20">
                    </div>
                    <div class="price-field">
                        <span>Max prijs:</span>
                        <input type="number" class="max-input" value="100">
                    </div>
                </div>
                <div class="slider-container">
                    <div class="price-slider">
                    </div>
                </div>
            </div>

            <!-- Slider -->
            <div class="range-input">
                <input type="range" class="min-range" min="0" max="10000" value="2500" step="1">
                <input type="range" class="max-range" min="0" max="10000" value="8500" step="1">
            </div>
        </div>
    </div>
    </body>
</html>