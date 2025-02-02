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
        </div>
    </div>
    <script>
        function getParameters() {
            const urlParams = new URLSearchParams(window.location.search);

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

        window.addEventListener('DOMContentLoaded', getParameters); // Call getParameters when the DOM is fully loaded
    </script>
</body>
</html>