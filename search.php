<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* ******** search block ********* */

        .search-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 680px;
            margin: auto;
        }

        .search-box h2,
        h3 {
            font-size: 16px;
            color: rgb(74, 74, 74);
        }

        .search-box_header {
            display: flex;
            align-items: baseline;
        }

        .pet-selection label {
            margin: 0 10px;
            font-size: 16px;
        }

        .service-options_block {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .service-options_for {
            display: block;
        }

        .service-options {
            display: flex;
            margin: 10px 0;
            gap: 12px;
        }

        .service-btn {
            width: 126px;
            height: 70px;
            border: 2px solid #ccc;
            background: white;
            color: rgb(105, 105, 105);
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        /* .service-btn.active {
            border: 2px solid #373737;
            color: #373737;
            font-weight: 600;
        } */

        .block {
            display: flex;
            gap: 12px;
        }

        .block label {
            font-size: 16px;
            font-weight: 600;
            color: rgb(74, 74, 74);
            margin-bottom: 6px;
        }

        .block_address,
        .block_date {
            margin: 10px 0;
            display: grid;
        }

        .block_address input,
        .block_date input {
            width: 196px;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .size-options {
            display: flex;
            margin: 10px 0;
            gap: 16px;
        }

        .size-options .size-btn {
            color: rgb(105, 105, 105);
        }

        .size-btn {
            width: 100px;
            height: 70px;
            background: white;
            border: 2px solid #ccc;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .search-btn {
            width: 210px;
            height: 70px;
            background: #0073e6;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
        }
    </style>
</head>

<body>
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

        <h3>My Dog’s Size</h3>
        <div class="size-options">
            <button class="size-btn active">Small<br>0 – 7 kg</button>
            <button class="size-btn">Medium<br>7 – 18 kg</button>
            <button class="size-btn">Large<br>18 – 45 kg</button>
            <button class="size-btn">Giant<br>45+ kg</button>
            <button id="searchButton" onclick="submit()" class="search-btn">Search</button>
        </div>

    </div>
    <script src="script.js"></script>

</body>

</html>