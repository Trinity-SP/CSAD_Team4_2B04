<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showtimes5</title>
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

        .price-table{
            width: 92.5vw;
            margin-top: 50px;
        }

        .price-table td{
            padding: 20px;
            font-size: 20px;
            text-align: center;
            color: rgb(148, 148, 148);
        }

        .price-table th{
            text-align: left;
        }
        
        .main-header th{
            text-align: center;
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
        <img src="Images/clouds4.png" class="clouds">
        <hr class="hr">
        <table class="price-table">
            <tr class="main-header">
                <th></th>
                <th>Selected</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <tr>
                <th>Seats</th>
                <td class="seats"></td>
                <td class="seat-price"></td>
                <td class="seat-quantity"></td>
                <td class="seat-total-price"></td>
            </tr>
            <tr>
                <th>Promos</th>
                <td class="promos">No Promotions were selected</td>
                <td class="promo-price">-</td>
                <td class="promo-quantity">-</td>
                <td class="promo-total-price">-</td>
            </tr>
            <tr>
                <th>Add-Ons</th>
                <td class="add-ons">No Add-Ons were selected</td>
                <td class="add-on-price">-</td>
                <td class="add-on-quantity">-</td>
                <td class="add-on-total-price">-</td>
            </tr>
            <tr>
                <th colspan="3">Booking Fees: </th>
                <td class="booking-fees"></td>
            </tr>
            <tr>
                <th colspan="3">Grand Total: </th>
                <th class="grand-total"></td>
            </tr>
        </table>


    <script>
         function getParameters() {
    const urlParams = new URLSearchParams(window.location.search);

    const poster = urlParams.get('poster');
    const movieName = urlParams.get('movie_name');
    const rating = urlParams.get('rating');
    const cinema = urlParams.get('cinema');
    const date = urlParams.get('date');
    const time = urlParams.get('time');
    const format = urlParams.get('format');
    const seats = urlParams.get('seats');
    const price = urlParams.get('price');
    const quantity = urlParams.get('quantity');
    const total = urlParams.get('total');
    const addOn1Name = urlParams.get('add-on1_name');
    const addOn1Description = urlParams.get('add-on1_description');
    const addOn2Name = urlParams.get('add-on2_name');
    const addOn2Description = urlParams.get('add-on2_description');
    const totalAddOn = urlParams.get('total_add-on');
    const promo1Name = urlParams.get('promo1_name');
    const promo1Description = urlParams.get('promo1_description');
    const promo2Name = urlParams.get('promo2_name');
    const promo2Description = urlParams.get('promo2_description');
    const totalPromo = urlParams.get('total_promo');

        // Get promo parameters
        this.promoName = urlParams.get('promo_name'); // Get the *single* selected promo name
        this.promoDescription = urlParams.get('promo_description');
        this.totalPromo = urlParams.get('total_promo');

        // Log to console for verification
        console.log("Selected Promo Name (Showtimes4):", decodeURIComponent(this.promoName));
        console.log("Selected Promo Description:", decodeURIComponent(this.promoDescription));
        console.log("Total Promo:", decodeURIComponent(this.totalPromo));




    // Log the retrieved values for debugging
    console.log("Poster:", decodeURIComponent(poster));
    console.log("Movie Name:", decodeURIComponent(movieName));
    console.log("Rating:", decodeURIComponent(rating));
    console.log("Cinema:", decodeURIComponent(cinema));
    console.log("Date:", decodeURIComponent(date));
    console.log("Time:", decodeURIComponent(time));
    console.log("Format:", decodeURIComponent(format));
    console.log("Seats:", decodeURIComponent(seats));
    console.log("Price:", decodeURIComponent(price));
    console.log("Quantity:", decodeURIComponent(quantity));
    console.log("Total:", decodeURIComponent(total));
    console.log("Add-on 1 Name:", decodeURIComponent(addOn1Name));
    console.log("Add-on 1 Description:", decodeURIComponent(addOn1Description));
    console.log("Add-on 2 Name:", decodeURIComponent(addOn2Name));
    console.log("Add-on 2 Description:", decodeURIComponent(addOn2Description));
    console.log("Total Add-on:", decodeURIComponent(totalAddOn));
    
    let seatPrice = parseFloat(decodeURIComponent(price));
            let seatQuantity = parseInt(decodeURIComponent(quantity));
            let seatTotal = seatPrice * seatQuantity;

    let promosText = "No Promotions were selected";
        let promoPrice = "-";
        let promoQuantity = "-";

        if (urlParams.has('promo1_name') && parseFloat(urlParams.get('total_promo')) > 0) {
            promosText = decodeURIComponent(urlParams.get('promo1_name'));
            promoPrice = decodeURIComponent(urlParams.get('total_promo'));
            promoQuantity = "1";
        } else if (urlParams.has('promo2_name') && parseFloat(urlParams.get('total_promo')) > 0) {
            promosText = decodeURIComponent(urlParams.get('promo2_name'));
            promoPrice = decodeURIComponent(urlParams.get('total_promo'));
            promoQuantity = "1";
        }

        // Update the promo details in the table
        document.querySelector('.promos').textContent = promosText;
        document.querySelector('.promo-price').textContent = promoPrice;
        document.querySelector('.promo-quantity').textContent = promoQuantity;
        document.querySelector('.promo-total-price').textContent = promoPrice; // Make sure total promo price is displayed

    // Update the page content (example)
    document.querySelector('.poster').src = decodeURIComponent(poster);
    document.querySelector('.movie_name').textContent = decodeURIComponent(movieName);
    document.querySelector('.movie_rating').innerHTML = `<img src="${decodeURIComponent(rating)}" alt="Movie Rating">`;
    document.querySelector('.cinema-name').textContent = decodeURIComponent(cinema);
    document.querySelector('.selected-date').textContent = decodeURIComponent(date);
    document.querySelector('.selected-time').textContent = decodeURIComponent(time);

    document.querySelector('.seats').textContent = decodeURIComponent(seats);
    document.querySelector('.seat-price').textContent = "$" + seatPrice.toFixed(2); // Format price
    document.querySelector('.seat-quantity').textContent = seatQuantity;
    document.querySelector('.seat-total-price').textContent = "$" + seatTotal.toFixed(2); // Format price


    document.querySelector('.add-ons').textContent = decodeURIComponent(addOn1Name) + ", " + decodeURIComponent(addOn2Name);
    document.querySelector('.add-on-price').textContent = (parseFloat(decodeURIComponent(totalAddOn)) > 0) ? decodeURIComponent(totalAddOn) : "-"; // Example
    document.querySelector('.add-on-quantity').textContent = (parseFloat(decodeURIComponent(totalAddOn)) > 0) ? "1" : "-"; // Example
    document.querySelector('.add-on-total-price').textContent = decodeURIComponent(totalAddOn); // Example

    let grandTotal = seatTotal + parseFloat(decodeURIComponent(totalAddOn) || 0) + parseFloat(decodeURIComponent(totalPromo) || 0) + parseFloat(document.querySelector('.booking-fees').textContent.replace('$', '') || 0); // Parse numbers and handle potential NaN
    document.querySelector('.grand-total').textContent = "$" + grandTotal.toFixed(2); // Example


}


window.addEventListener('DOMContentLoaded', getParameters);
    </script>
</body>
</html>