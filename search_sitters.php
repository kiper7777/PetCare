<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include "header.php"?> 

<section class="search_sitters">
    <div class="search_block">
        <div class="search_service">
            <label>Service type</label>
            <select name="" id="">
                <option value="Boarding">Boarding<span>in the sitter's home</span></option>
                <option value="House Sitting">House Sitting<span> in your home</span></option>
                <option value="Drop-In Visits">Drop-In Visits</option>
                <option value="Doggy Day Care">Doggy Day Care</option>
                <option value="Dog Walking">Dog Walking</option>
            </select>
        </div>

        <div class="block_address">
            <label>Boarding near</label>
            <input type="text" placeholder="Postcode or Address">
        </div>

        <div class="block_date">
            <label>Dates</label>
            <div class="block_date-input">
                <input type="date" placeholder="Start">
                <span>→</span>
                <input type="date" placeholder="End">
            </div>
        </div>

        <div class="search_pet">
            <h2>Pet type(s)</h2>
            <div class="pet-selection">
                <label><input type="checkbox" id="dog" checked> Dog</label>
                <label><input type="checkbox" id="cat"> Cat</label>
            </div>
        </div>
   
    </div>
    
    <div class="search_block2">
        <img src="image/sitters.png" alt="">
    </div>
    <div class="search_block3">
    <img src="image/map.png" alt="">
    </div>

</section>

<?php include "footer.php"?>
</body>
</html>