<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - Pet Care Platform</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
  
    <?php include "header.php" ; 
    ?>

    <section class="her">
        <!-- <div class="hero_container">
            <h2>Find a reliable assistant for your pet in your area</h2>

            <form id="search-form">
                <input type="text" id="search-input" placeholder="Enter your city">
                <button type="submit">Find</button>
            </form>
        </div> -->

        <div class="search-box">
            <div class="search-box_header">
                <h2>I'm looking for a service for my:</h2>
                <div class="pet-selection">
                    <label><input type="checkbox" id="dog" checked> Dog</label>
                    <label><input type="checkbox" id="cat"> Cat</label>
                </div>
            </div>

            <div class="service-options_block">
                <div class="service-options_for">
                    <h3>For When You're Away</h3>
                    <div class="service-options">
                        <button class="service-btn active">Boarding</button>
                        <button class="service-btn">House Sitting</button>
                        <button class="service-btn">Drop-In Visits</button>
                    </div>
                </div>

                <div class="service-options_for">
                    <h3>For When You're at Work</h3>
                    <div class="service-options">
                        <button class="service-btn">Doggy Day Care</button>
                        <button class="service-btn">Dog Walking</button>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="block_address">
                    <label>Boarding near</label>
                    <input type="text" placeholder="Postcode or Address">
                </div>

                <div class="block_date">
                    <label>For these days</label>
                    <div class="block_date-input">
                        <input type="date" placeholder="Drop off">
                        <span>→</span>
                        <input type="date" placeholder="Pick up">
                    </div>
                </div>
            </div>

            <h3>My Dog's Size</h3>
            <div class="size-options">
                <button class="size-btn active">Small<br>0 – 7 kg</button>
                <button class="size-btn">Medium<br>7 – 18 kg</button>
                <button class="size-btn">Large<br>18 – 45 kg</button>
                <button class="size-btn">Giant<br>45+ kg</button>
                <button id="searchButton" onclick="submit()" class="search-btn">Search</button>
            </div>

        </div>
    </section>

    <?php include "services.php"?>
    <?php include "aboutus.php"?>
    <?php include "contactus.php"?>

    <?php include "footer.php"?>

    <script src="script.js"></script>
</body>

</html>