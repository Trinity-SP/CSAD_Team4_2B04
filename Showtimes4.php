<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showtimes4</title>
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

        .add-on-select {
            margin-top: 50px;
            margin-left: 20px;
            display: flex; /* Use flexbox for layout */
            align-items: flex-end; /* Align items to the top */
        }

        .add-on {
            width: 200px;
            border-radius: 20px;
            align-self: flex-start; /* Align image to top of container */
            margin-bottom: auto;
        }

        .add-on-name {
            color: #3c8aff;
            font-size: 30px;
            font-weight: bold;
        }

        .add-on-description {
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

        .add-on-select td {
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
        <img src="Images/clouds3.png" class="clouds">
        <hr class="hr">
        <table class="price-table">
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>


        <table class="add-on-select" id="add-on1">
            <tr>
                <td rowspan="3"><img src="" class="add-on"></td>
                <td class="add-on-name"></td>
            </tr>
            <tr>
                <td class="add-on-description"></td>
            </tr>
            <tr>
                <td>Price: <span class="price"></span></td>
            </tr>
            <td><button class="select-button">SELECT</button></td>
        </table>

        <table class="add-on-select" id="add-on2">
            <tr>
                <td rowspan="3"><img src="" class="add-on"></td>
                <td class="add-on-name"></td>
            </tr>
            <tr>
                <td class="add-on-description"></td>
            </tr>
            <tr>
                <td>Price: <span class="price"></span></td>
            </tr>
            <td><button class="select-button">SELECT</button></td>
        </table>

        <hr class="hr1">
        
        <table class="price-table">
            <tr>
                <td>Add-On Total Amount: </td>
                <td id="total-add-on">-</td>
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

    function displayAddOnDetails() {
        const addOn1Image = "Images/regular_popcorn.png";
        const addOn1Name = "Regular Popcorn Combo";
        const addOn1Description = "1x Regular Popcorn\n1x Regular Drink";
        const addOn1Price = "$8.50"; // Price for add-on 1

        const addOn2Image = "Images/large_popcorn.png";
        const addOn2Name = "Large Popcorn Combo";
        const addOn2Description = "1x Large Popcorn\n1x Regular Drink";
        const addOn2Price = "$10.90"; // Price for add-on 2


        // Add-on 1
        document.querySelector('#add-on1 .add-on').setAttribute('src', addOn1Image);
        document.querySelector('#add-on1 .add-on-name').textContent = addOn1Name;
        document.querySelector('#add-on1 .add-on-description').textContent = addOn1Description;
        document.querySelector('#add-on1 .price').textContent = addOn1Price; // Set the price for add-on 1

        // Add-on 2
        document.querySelector('#add-on2 .add-on').setAttribute('src', addOn2Image);
        document.querySelector('#add-on2 .add-on-name').textContent = addOn2Name;
        document.querySelector('#add-on2 .add-on-description').textContent = addOn2Description;
        document.querySelector('#add-on2 .price').textContent = addOn2Price; // Set the price for add-on 2
    }

    let selectedAddOn1Price = 0;
    let selectedAddOn2Price = 0;
    let showtimes2Total = 0; // Store showtimes total here

    function calculateTotalAddOn() {
        let totalAddOn = selectedAddOn1Price + selectedAddOn2Price;
        document.getElementById('total-add-on').textContent = "$" + totalAddOn.toFixed(2);
        return totalAddOn;
    }

    function calculateWholeTotal(totalAddOn) {
        const wholeTotal = showtimes2Total + totalAddOn; // Use the stored showtimes total
        document.getElementById('total-whole').textContent = "$" + wholeTotal.toFixed(2);
    }


    document.querySelector('#add-on1 .select-button').addEventListener('click', (event) => {
        const button = event.target;
        button.classList.toggle('selected'); // Toggle the "selected" class

        if (button.classList.contains('selected')) {
            selectedAddOn1Price = 8.50;
        } else {
            selectedAddOn1Price = 0; // Deselect
        }


        const totalAddOn = calculateTotalAddOn();
        calculateWholeTotal(totalAddOn);
    });

    document.querySelector('#add-on2 .select-button').addEventListener('click', (event) => {
        const button = event.target;
        button.classList.toggle('selected'); // Toggle the "selected" class

        if (button.classList.contains('selected')) {
            selectedAddOn2Price = 10.90;
        } else {
            selectedAddOn2Price = 0; // Deselect
        }

        const totalAddOn = calculateTotalAddOn();
        calculateWholeTotal(totalAddOn);
    });



    document.querySelector('.proceed-button').addEventListener('click', () => {
        const poster = document.querySelector('.poster').getAttribute('src');
        const movieName = document.querySelector('.movie_name').textContent;
        const rating = document.querySelector('.movie_rating img').getAttribute('src'); // Get image source
        const cinemaName = document.querySelector('.cinema-name').textContent;
        const date = document.querySelector('.selected-date').textContent;
        const time = document.querySelector('.selected-time').textContent;
        const format = new URLSearchParams(window.location.search).get('format'); // Get format from URL
        const seats = new URLSearchParams(window.location.search).get('seats');
        const price = new URLSearchParams(window.location.search).get('price');
        const quantity = new URLSearchParams(window.location.search).get('quantity');
        const total = document.getElementById('total-whole').textContent.replace('$', ''); // Get calculated total

        const addOn1Name = document.querySelector('#add-on1 .add-on-name').textContent;
        const addOn1Description = document.querySelector('#add-on1 .add-on-description').textContent;
        const addOn2Name = document.querySelector('#add-on2 .add-on-name').textContent;
        const addOn2Description = document.querySelector('#add-on2 .add-on-description').textContent;
        const totalAddOn = document.getElementById('total-add-on').textContent.replace('$', '');

        let queryString = `Showtimes5.php?poster=${encodeURIComponent(poster)}&movie_name=${encodeURIComponent(movieName)}&rating=${encodeURIComponent(rating)}&cinema=${encodeURIComponent(cinemaName)}&date=${encodeURIComponent(date)}&time=${encodeURIComponent(time)}&format=${encodeURIComponent(format)}`;

        queryString += `&seats=${encodeURIComponent(seats)}`;
        queryString += `&price=${encodeURIComponent(price)}`;
        queryString += `&quantity=${encodeURIComponent(quantity)}`;
        queryString += `&total=${encodeURIComponent(total)}`;

        queryString += `&add-on1_name=${encodeURIComponent(addOn1Name)}`;
        queryString += `&add-on1_description=${encodeURIComponent(addOn1Description)}`;
        queryString += `&add-on2_name=${encodeURIComponent(addOn2Name)}`;
        queryString += `&add-on2_description=${encodeURIComponent(addOn2Description)}`;
        queryString += `&total_add-on=${encodeURIComponent(totalAddOn)}`;


        window.location.href = queryString;
    });


    window.addEventListener('DOMContentLoaded', () => {
        getParameters();
        displayAddOnDetails();

        const totalAddOn = calculateTotalAddOn();
        calculateWholeTotal(totalAddOn);
    });

    </script>
</body>
</html>