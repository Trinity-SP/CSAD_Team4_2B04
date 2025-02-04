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
            margin-left: 14vw;
            background:rgb(0, 0, 0);
            height: auto;
            width: 70vw;
            padding-bottom: 150px;
        }


        .hr1 {
            width: inherit;
            opacity: 40%;
            margin-top: 10px;
        }

        .confirmation {
            padding: 30px;
            font-size: 20px;
        }

        .confirmation tr {
            height: 50px;
        }

        .confirmation th {
            font-size: 35px;
            color: white;
        }

        .movie_details {
            padding: 15px;
        }

        .movie_details tr {
            text-align: left;
            height: 40px;
        }

        #movie_rating {
            width: 60px;
        }

        #backToHome {
            width: 400px;
            height: 50px;
            background-color: #3c8aff;
            font-size: 20px;
            font-weight: bold;
            border: none;
            border-radius: 15px;
            margin-top: 20px;
            margin-left: 400px;
            cursor: pointer;
        }


    </style>
    <link rel="icon" href="Images/SkyCinemaNew.png">
</head>
<body>
    <img src="Images/Header.png" class="header">
    <div class="container">
        <table class="confirmation">
            <tr>
                <th class="title">Confirmation</th>
            </tr>
            <tr>
                <td>Booking ID: <span id="bookingID">12</span></td>
            </tr>
        </table>
        <hr class="hr1">
        <table class="movie_details">
            <tr>
                <th>Movie:</th>
                <td id="movie_name">Alien: Romulus</td>
            </tr>
            <tr>
                <th>Ratings:</th>
                <td><img src="Images/nc16.png" id="movie_rating"></td>
            </tr>
            <tr>
                <th>Date:</th>
                <td id="booking_date">Thursday, 16 Jan 2025</td>
            </tr>
            <tr>
                <th>Time:</th>
                <td id="booking_time">10:30AM</td>
            </tr>
            <tr>
                <th>Format: </th>
                <td id="booking_format">IMAX</td>
            </tr>
            <tr>
                <th>Cinemas:</th>
                <td id="booking_cinema">Sky Cinemas Lido</td>
            </tr>
            <tr>
                <th>Hall Number: </th>
                <td id="hall_number">9</td>
            </tr>
            <tr>
                <th>Seats: </th>
                <td id="seats">E20, E19</td>
            </tr>
            <tr>
                <th>Total Amount: </th>
                <td id="total_amount">$46.00</td>
            </tr>
        </table>
        <hr class="hr1">
        <button id="backToHome">BACK TO HOME</button>
    </div>

    <script>
        const backToHomeBtn = document.getElementById('backToHome');

        backToHomeBtn.addEventListener('click', () => {
            window.location.href = 'Homepage.php'; // Redirect to Homepage.php
        });
    </script>
</body>
</html>