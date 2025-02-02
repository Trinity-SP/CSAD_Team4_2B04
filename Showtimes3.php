<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showtimes3</title>
    <style>
        /* Styles for Showtimes page */
        body {
            background: linear-gradient(180deg, #3c8aff 0%, #000000 31%);
            height: 100vh;
            color: #ffffff;
            font-family: sans-serif;
            overflow-x: hidden;
            background-attachment: fixed;
        }

        .header {
            margin-top: 20px;
            margin-left: 370px;
            height: 145px;
            width: 1000px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            border-radius: 50px;
            margin-left: 2.5vw;
            background:rgb(0, 0, 0);
            height: auto;
            width: 92.5vw;
            padding-bottom: 150px;
        }

        .movie_details {
            position: relative;
            top: 20px;
            margin-left: 20px;
            height: 10px;
            width: auto;
            color: #3c8aff;
            font-weight: bold;
            font-size: 23px;
            text-align: left; /* Ensure text is aligned to the left */
            table-layout: fixed; /* Use fixed table layout */
            width: 100%; /* Ensure the table takes full width */
        }

        .movie_details td {
            vertical-align: top; /* Align content to the top of the cell */
        }

        /* Fixed width for the poster column */
        .movie_details td:first-child {
            width: 220px; /* Set a fixed width for the poster column */
            padding-right: 20px; /* Add spacing between poster and details */
        }

        /* Ensure the second column (movie details) is aligned to the left */
        .movie_details td:nth-child(2) {
            text-align: left; /* Align content to the left */
        }

        .movie_name {
            font-size: 45px;
            display: inline-block; /* Allow the movie name to align with the rating */
            vertical-align: middle; /* Align the movie name vertically with the rating */
        }

        .subheader {
            color: #ffffff;
        }

        .poster {
            width: 200px; /* Fixed width for the poster */
            border-top-left-radius: 30px;
            object-fit: cover;
        }

        .movie_rating {
            display: inline-block; /* Make the rating align with the movie name */
            vertical-align: middle; /* Align the rating vertically with the movie name */
            margin-right: 15px;
        }

        .movie_rating img {
            max-width: 55px;
            max-height: 45px;
            vertical-align: middle; /* Align the image vertically with the text */
            margin-bottom: -0x; /* Fine-tune vertical alignment */
        }
        .cloud-progress {
            margin-top: 50px;
        }
        .clouds {
            width: 400px;
            padding: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .hr {
            width: 92.5vw;
            opacity: 40%;
        }   

        .promo-select {
            margin-top: 50px;
            margin-left: 20px;
            display: flex; /* Use flexbox for layout */
            align-items: flex-end; /* Align items to the top */
        }

        .promo {
            width: 200px;
            border-radius: 20px;
            align-self: flex-start; /* Align image to top of container */
            margin-bottom: auto;
        }

        .promo-name {
            color: #3c8aff;
            font-size: 30px;
            font-weight: bold;
        }

        .promo-description {
            white-space: pre-wrap; /* Allow text to wrap */
            font-size: 25px;
        }

        .price {
            font-size: 20px;
            align-self: flex-end; /* Align price to bottom */
            margin-bottom: 10px; /* Add some space below the price */
        }

        .select-button {
            width: 200px;
            height: 40px;
            background-color: #3c8aff;
            font-size: 20px;
            font-weight: bold;
            border: none;
            border-radius: 15px;
            align-self: flex-end; /* Align button to top */
            margin-top: 10px;
            cursor: pointer;
        }

        .select-button.selected {
            background-color: white;
            color: black;
        }

        .promo-select td {
            width: auto; /* Let the content determine the width */
            vertical-align: top; /* Important for aligning content within td */
            padding: 10px; /* Remove default padding from table cells */
        }

        .hr1 {
            width: 92.5vw;
            opacity: 40%;
            margin-top: 50px;
        }

        .hr2 {
            width: 92.5vw;
            opacity: 40%;   
        }

        .price-table td{
            padding: 20px;
            font-size: 20px;
        }

        .proceed-button {
            width: 300px;
            height: 70px;
            background-color: #3c8aff;
            font-size: 20px;
            font-weight: bold;
            border: none;
            border-radius: 15px;
            margin-top: 20px;
            margin-left: 1220px;
        }
    </style>
    <link rel="icon" href="Images/SkyCinemaNew.png">
</head>
<body>
    <img src="Images/Header.png" class="header">
    <div class="container">
        <table class="movie_details">
            <tr>
                <td rowspan="4"><img src="" class="poster"></td>
                <td><span class="movie_rating"></span><span class="movie_name"></span></td>
            </tr>
            <tr>
                <td class="subheader cinema-name"></td>
            </tr>
            <tr>
                <td class="subheader selected-date"></td>
            </tr>
            <tr>
                <td class="subheader selected-time"></td>
            </tr>
        </table>
        <div class="cloud-progress">
        <hr class="hr">
        <img src="Images/clouds2.png" class="clouds">
        <hr class="hr">
        <table class="price-table">
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>


        <table class="promo-select" id="promo1">
            <tr>
                <td rowspan="3"><img src="" class="promo"></td>
                <td class="promo-name"></td>
            </tr>
            <tr>
                <td class="promo-description"></td>
            </tr>
            <tr>
                <td>Price: <span class="price"></span></td>
            </tr>
            <td><button class="select-button">SELECT</button></td>
        </table>

        <table class="promo-select" id="promo2">
            <tr>
                <td rowspan="3"><img src="" class="promo"></td>
                <td class="promo-name"></td>
            </tr>
            <tr>
                <td class="promo-description"></td>
            </tr>
            <tr>
                <td>Price: <span class="price"></span></td>
            </tr>
            <td><button class="select-button">SELECT</button></td>
        </table>

        <hr class="hr1">
        
        <table class="price-table">
            <tr>
                <td>Promo Total Amount: </td>
                <td id="total-promo">-</td>
            </tr>
            <tr>    
                <td>Total Amount: </td>
                <td id="total-whole"></td>
            </tr>
        </table>

        <hr class="hr2">

        <button class="proceed-button">PROCEED</button>


        </div>
    </div>
    <script>
        function getParameters() {
            const urlParams = new URLSearchParams(window.location.search);
            showtimes2Total = parseFloat(urlParams.get('total')) || 0; // Get and store showtimes total


            const poster = urlParams.get('poster');
            const movieName = urlParams.get('movie_name');
            const rating = urlParams.get('rating');
            const cinemaName = urlParams.get('cinema');
            const date = urlParams.get('date');
            const time = urlParams.get('time');
            const format = urlParams.get('format');
            const seats = urlParams.get('seats');
            const price = urlParams.get('price');
            const quantity = urlParams.get('quantity');
            const total = urlParams.get('total');


            document.querySelector('.poster').setAttribute('src', decodeURIComponent(poster));
            document.querySelector('.movie_name').textContent = decodeURIComponent(movieName);

            let formattedCinemaName = decodeURIComponent(cinemaName);
            if (format === "imaxform") {
                formattedCinemaName += " IMAX";
            } else if (format === "imax3dform") {
                formattedCinemaName += " IMAX 3D";
            }

            document.querySelector('.cinema-name').textContent = formattedCinemaName;
            document.querySelector('.selected-date').textContent = decodeURIComponent(date);
            document.querySelector('.selected-time').textContent = decodeURIComponent(time);
            document.querySelector('.movie_rating').innerHTML = `<img src="${decodeURIComponent(rating)}" alt="Movie Rating">`;

            // Display other parameters
            console.log("Seats:", decodeURIComponent(seats));
            console.log("Price:", decodeURIComponent(price));
            console.log("Quantity:", decodeURIComponent(quantity));
            console.log("Total:", decodeURIComponent(total));
        }

        function displayPromoDetails() {
            const promo1Image = "Images/sonic_promo2.jpg";
            const promo1Name = "SONIC THE HEDGEHOG 3 Collector Combo";
            const promo1Description = "1x Large Popcorn\n2x Regular Drinks\n1x SONIC THE HEDGEHOG 3 Tumbler\n";
            const promo1Price = "$18"; // Price for promo 1

            const promo2Image = "Images/sonic_promo1.jpg";
            const promo2Name = "Another Awesome Promo";
            const promo2Description = "Description of the second promo.";
            const promo2Price = "$12"; // Price for promo 2


            // Promo 1
            document.querySelector('#promo1 .promo').setAttribute('src', promo1Image);
            document.querySelector('#promo1 .promo-name').textContent = promo1Name;
            document.querySelector('#promo1 .promo-description').textContent = promo1Description;
            document.querySelector('#promo1 .price').textContent = promo1Price; // Set the price for promo 1

            // Promo 2
            document.querySelector('#promo2 .promo').setAttribute('src', promo2Image);
            document.querySelector('#promo2 .promo-name').textContent = promo2Name;
            document.querySelector('#promo2 .promo-description').textContent = promo2Description;
            document.querySelector('#promo2 .price').textContent = promo2Price; // Set the price for promo 2
        }

        let selectedPromo1Price = 0;
        let selectedPromo2Price = 0;
        let showtimes2Total = 0; // Store showtimes total here

        function calculateTotalPromo() {
            let totalPromo = selectedPromo1Price + selectedPromo2Price;
            document.getElementById('total-promo').textContent = "$" + totalPromo.toFixed(2);
            return totalPromo;
        }

        function calculateWholeTotal(totalPromo) {
            const wholeTotal = showtimes2Total + totalPromo; // Use the stored showtimes total
            document.getElementById('total-whole').textContent = "$" + wholeTotal.toFixed(2);
        }


        document.querySelector('#promo1 .select-button').addEventListener('click', (event) => {
            const button = event.target;
            button.classList.toggle('selected'); // Toggle the "selected" class

            if (button.classList.contains('selected')) {
                selectedPromo1Price = 18;
            } else {
                selectedPromo1Price = 0; // Deselect
            }


            const totalPromo = calculateTotalPromo();
            calculateWholeTotal(totalPromo);
        });

        document.querySelector('#promo2 .select-button').addEventListener('click', (event) => {
            const button = event.target;
            button.classList.toggle('selected'); // Toggle the "selected" class

            if (button.classList.contains('selected')) {
                selectedPromo2Price = 12;
            } else {
                selectedPromo2Price = 0; // Deselect
            }

            const totalPromo = calculateTotalPromo();
            calculateWholeTotal(totalPromo);
        });



        window.addEventListener('DOMContentLoaded', () => {
            getParameters();
            displayPromoDetails();

            // Calculate and display totals initially (when no promos are selected)
            const totalPromo = calculateTotalPromo(); // Will be 0 initially
            calculateWholeTotal(totalPromo);
        });


    </script>
</body>
</html>