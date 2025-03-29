<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIT Hotel</title>
        <?php
            include "inc/head.inc.php";
        ?>
    <link rel="stylesheet" href="assets/css/product.css"> 
</head>
<body>
        <?php
            include "inc/nav.inc.php";
        ?>
        <main>
            <section>
            <h1 class="room-introtitle">Dining</h1>

            <p class="room-intro">Elevate your meal to greater heights at these rooftop restaurants in Singapore. 
                Toast to the spectacular view with a handcrafted cocktail in hand, or dine al fresco from the top of the world.</p>
            <div class="dining-container">
                <ul class="dining-list">
                    <li class="dining-card">
                        <img src="assets/images/dining/spago.webp" alt="Sands Premier Room" class="room-image" />
                        <div class="dining-info">
                            <h2 class="room-title">GASTRONOMY ADVENTURE</h2>
                            <p class="room-subtitle"><strong>GARDENS BY THE BAY VIEW</strong> | <span class="light">CITY VIEW</span></p>
                            <p class="room-desc">
                                Unwind in your elegant room and savour the generous curation of treasures in the bespoke Armoire. Expect beautifully appointed in-room amenities and two-person bathtub, along with separate vanities.
                            </p>
                            <a href="singleroom.php" aria-label="View details" class="button-container">
                                <span>View details</span>
                            </a>
                        </div>
                    </li>
    
                    <li class="dining-card">
                        <img src="assets/images/dining/alfresco.jpg" alt="Sands Premier Room" class="room-image" />
                        <div class="dining-info">
                            <h2 class="room-title">ALFRESCO DINING</h2>
                            <p class="room-subtitle"><strong>GARDENS BY THE BAY VIEW</strong> | <span class="light">CITY VIEW</span></p>
                            <p class="room-desc">
                                Unwind in your elegant room and savour the generous curation of treasures in the bespoke Armoire. Expect beautifully appointed in-room amenities and two-person bathtub, along with separate vanities.
                            </p>
                            <a href="singleroom.php" aria-label="View details" class="button-container">
                                <span>View details</span>
                            </a>
                        </div>
                    </li>
    
                    <li class="dining-card">
                        <img src="assets/images/dining/bar.webp" alt="Sands Premier Room" class="room-image" />
                        <div class="dining-info">
                            <h2 class="room-title">BAR</h2>
                            <p class="room-subtitle"><strong>GARDENS BY THE BAY VIEW</strong> | <span class="light">CITY VIEW</span></p>
                            <p class="room-desc">
                                Unwind in your elegant room and savour the generous curation of treasures in the bespoke Armoire. Expect beautifully appointed in-room amenities and two-person bathtub, along with separate vanities.
                            </p>
                            <a href="singleroom.php" aria-label="View details" class="button-container">
                                <span>View details</span>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>

        </section>
    </main>
    <?php
            include "inc/footer.inc.php";
    ?>
</body>
</html>