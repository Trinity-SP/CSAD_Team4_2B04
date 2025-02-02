<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showtimes2</title>
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
        .screen-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px; /* Space between screen and button */
            margin-top: 20px;
            margin-bottom: 70px;
        }

        .reset-button {
            background-color: #3c8aff;
            color: white;
            border: none;
            margin-right: 30px;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .reset-button:hover {
            background-color: rgb(32, 84, 162); /* Darker shade on hover */
        }

        .screen {
            width: 1200px;
            display: block;
            margin-left: 185px;
            margin-right: auto;
        }
        .seats-table{
            width: fit-content;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-spacing: 15px;
        }
        .seats-table td {
            width: 20px;
            height: 20px;
            background: rgb(200, 200, 200);
            border: 4px solid black; /* Outer black border */
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-top: none;
            outline: 2px solid rgb(200, 200, 200); /* Inner gray border */
            cursor: pointer;
            
        }

        .seats-table th {
            color: white; /* Text color */
            font-size: 16px; /* Font size */
            font-weight: bold; /* Bold text */
            padding-right: 10px; /* Space between row letter and seats */
            vertical-align: middle; /* Align text vertically with seats */
        }
        
        .seats-display{
            background-color:rgb(61, 61, 61);
            margin-top: 50px;
        }
        
        .legend-text{
            font-weight: bold;
            padding: 20px;
            font-size: 20px;
        }

        .legend-items { /* Style the container */
            padding: 20px;
            display: flex; /* or inline-flex if you want it to take only as much width as its content */
            align-items: center; /* Vertically align items */
            gap: 10px; /* Add some space between items (optional) */
            margin-top: 10px; /* Add spacing between the legend text and the items */
            gap: 40px;
            font-weight: bold;
            
        }
        
        #available{
            width: 20px;
            height: 20px;
            background-color:rgb(200, 200, 200);
            border: 4px solid black; /* Outer black border */
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-top: none;
            outline: 2px solid rgb(200, 200, 200); /* Inner gray border */
        }

        #selected{
            width: 20px;
            height: 20px;
            background-color: #3c8aff;
            border: 4px solid black; /* Outer black border */
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-top: none;
            outline: 2px solid #3c8aff; /* Inner gray border */
        }

        #unavailable{
            width: 20px;
            height: 20px;
            background-color: rgb(31, 47, 70);
            border: 4px solid black; /* Outer black border */
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-top: none;
            outline: 2px solid rgb(31, 47, 70);; /* Inner gray border */
        }

        .info-table{
            width: 92.5vw;
            text-align: center;
            padding: 20px;
            table-layout: fixed;
            background-color:rgb(27, 27, 27);   
        }

        .info-table td{
            padding: 4%;
            color: rgb(148, 148, 148);
        }

        .confirm-button {
            width: 92.5vw;
            height: 70px;
            background-color: #3c8aff;
            font-size: 30px;
            font-weight: bold;
            border: none;
            border-radius: 20px;
            display: block;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;

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
        <img src="Images/clouds1.png" class="clouds">
        <hr class="hr">
        </div>
        <div class="screen-container">
            <img src="Images/screen.png" class="screen">
            <button class="reset-button">Reset Seats</button>
        </div>
        <table class="seats-table">
            <tr>
                <th>A</th>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <th>A</th>
            </tr>
            <tr>
                <th>B</th>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <th>B</th>
            </tr>
            <tr>
                <th>C</th>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <th>C</th>
            </tr>
            <tr>
                <th>D</th>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <th>D</th>
            </tr>
            <tr>
                <th>E</th>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <th>E</th>
            </tr>
            <tr>
                <th>F</th>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <th>F</th>
            </tr>
            <tr>
                <th>G</th>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <th>G</th>
            </tr>
            <tr>
                <th>H</th>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <th>H</th>
            </tr>
            <tr>
                <th>I</th>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                <th>I</th>
            </tr>
        </table>
        <div class="seats-display">
            <div class="legend-text">LEGEND</div>
            <div class="legend-items">
                <div id="available"></div>Available Seat
                <div id="selected"></div>Selected Seat
                <div id="unavailable"></div>Unavailable Seat
            </div>
            <table class="info-table">
                <tr>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Seats: <span id="seats">-</span></td>
                    <td><span id="price"></span></td>
                    <td><span id="quantity"></span></td>
                    <td><span id="total"></span></td>
                </tr>
            </table>
        </div>
        <button class="confirm-button">Confirm Seats</button>
    </div>


      

    <!-- Scripts embedded directly within the HTML -->
    <script>
function getParameters() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    // Extract all parameters from the URL
    const poster = urlParams.get('poster');
    const movieName = urlParams.get('movie_name');
    const cinemaName = urlParams.get('cinema');
    const date = urlParams.get('date');
    const time = urlParams.get('time');
    const format = urlParams.get('format');
    const rating = urlParams.get('rating'); // Extract the rating parameter

    // Populate the movie poster and name
    document.querySelector('.poster').setAttribute('src', poster);
    document.querySelector('.movie_name').textContent = movieName;

    // Format the cinema name based on the format parameter
    let formattedCinemaName = cinemaName;
    if (format === "imaxform") {
        formattedCinemaName += " IMAX";
    } else if (format === "imax3dform") {
        formattedCinemaName += " IMAX 3D";
    }
    // If format is "standform" or undefined, no suffix is added

    // Populate cinema, date, time, and rating
    document.querySelector('.cinema-name').textContent = formattedCinemaName;
    document.querySelector('.selected-date').textContent = date;
    document.querySelector('.selected-time').textContent = time;
    document.querySelector('.movie_rating').innerHTML = `<img src="${rating}" alt="Movie Rating">`; // Display the rating
}

// Call the function when the page loads
window.onload = function () {
    getParameters();
};

function assignSeatIds() {
    const rows = document.querySelectorAll('.seats-table tr'); // Get all rows
    const rowLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I']; // Row letters from bottom to top

    // Loop through each row
    rows.forEach((row, rowIndex) => {
        const cells = row.querySelectorAll('td'); // Get all cells in the current row

        // Loop through each cell in the row
        cells.forEach((cell, cellIndex) => {
            const seatId = rowLetters[rowIndex] + (cellIndex + 1); // Generate seat ID (e.g., A1, B2, etc.)
            cell.setAttribute('id', seatId); // Assign the ID to the cell
        });
    });
}

        // Constants (no changes needed)
        const PRICE_PER_SEAT = 22;

        // Function to update the info table (modified)
        function updateInfoTable() {
            const selectedSeats = document.querySelectorAll('.seats-table td.selected');
            const seatsElement = document.getElementById('seats');
            const priceElement = document.getElementById('price');
            const quantityElement = document.getElementById('quantity');
            const totalElement = document.getElementById('total');

            const selectedSeatIds = Array.from(selectedSeats).map(seat => seat.id).join(', ');
            seatsElement.textContent = selectedSeatIds || '-';

            const quantity = selectedSeats.length;
            quantityElement.textContent = quantity || '0'; // Default to 0

            priceElement.textContent = `$${PRICE_PER_SEAT.toFixed(2)}`; // Default to $22.00

            const totalPrice = quantity * PRICE_PER_SEAT;
            totalElement.textContent = totalPrice ? `$${totalPrice.toFixed(2)}` : '$0.00'; // Default to $0.00
        }


// Modify the handleSeatSelection function to call updateInfoTable
function handleSeatSelection() {
    const seats = document.querySelectorAll('.seats-table td'); // Get all seats

    seats.forEach(seat => {
        seat.addEventListener('click', () => {
            // Toggle the selected state
            if (seat.classList.contains('selected')) {
                // If already selected, unselect it
                seat.classList.remove('selected');
                seat.style.background = 'rgb(200, 200, 200)'; // Revert background color
                seat.style.outlineColor = 'rgb(200, 200, 200)'; // Revert outline color
            } else {
                // If not selected, select it
                seat.classList.add('selected');
                seat.style.background = '#3c8aff'; // Change background color
                seat.style.outlineColor = '#3c8aff'; // Change outline color
            }

            // Update the info table
            updateInfoTable();
        });
    });
}

// Modify the resetSeats function to call updateInfoTable
function resetSeats() {
    const selectedSeats = document.querySelectorAll('.seats-table td.selected'); // Get all selected seats

    selectedSeats.forEach(seat => {
        seat.classList.remove('selected'); // Remove the selected class
        seat.style.background = 'rgb(200, 200, 200)'; // Revert background color
        seat.style.outlineColor = 'rgb(200, 200, 200)'; // Revert outline color
    });

    // Update the info table
    updateInfoTable();
}

const confirmButton = document.querySelector('.confirm-button');

confirmButton.addEventListener('click', () => {
    const selectedSeats = document.querySelectorAll('.seats-table td.selected');
    const quantity = selectedSeats.length;
    const totalPrice = quantity * PRICE_PER_SEAT;

    // Get URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const poster = urlParams.get('poster');
    const movieName = urlParams.get('movie_name');
    const rating = urlParams.get('rating');
    const cinemaName = urlParams.get('cinema');
    const date = urlParams.get('date');
    const time = urlParams.get('time');
    const format = urlParams.get('format');

    // Build the query string
    let queryString = `Showtimes3.php?poster=${encodeURIComponent(poster)}&movie_name=${encodeURIComponent(movieName)}&rating=${encodeURIComponent(rating)}&cinema=${encodeURIComponent(cinemaName)}&date=${encodeURIComponent(date)}&time=${encodeURIComponent(time)}&format=${encodeURIComponent(format)}`;

    // Add seat, price, quantity, and total parameters
    const selectedSeatIds = Array.from(selectedSeats).map(seat => seat.id).join(',');
    queryString += `&seats=${encodeURIComponent(selectedSeatIds)}`;
    queryString += `&price=${encodeURIComponent(PRICE_PER_SEAT)}`;
    queryString += `&quantity=${encodeURIComponent(quantity)}`;
    queryString += `&total=${encodeURIComponent(totalPrice)}`;

    // Redirect to Showtimes3.php
    window.location.href = queryString;
});

        window.onload = function () {
            getParameters();
            assignSeatIds();
            handleSeatSelection();
            document.querySelector('.reset-button').addEventListener('click', resetSeats);

            // Call updateInfoTable ONCE when the page loads to set default values
            updateInfoTable(); // This is the important addition!
        };
    </script>
</body>
</html>
