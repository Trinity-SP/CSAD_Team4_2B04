<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showtimes</title>
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
            background: #000000;
            height: auto;
            width: 92.5vw;
            padding-bottom: 150px;
        }

        .movie_details {
            position: relative;
            top: 40px;
            margin-left: 40px;
            height: 600px;
            width: 89vw;
            color: #3c8aff;
            font-weight: bold;
            font-size: larger;
        }

        .movie_details td {
            width: 380px;
        }

        .movie_name {
            font-size: 35px;
        }

        .subheader {
            color: #ffffff;
            font-weight: normal;
        }

        .poster {
            width: 350px;
            height: 510px;
            border-radius: 8px;
            object-fit: cover;
        }

        .movie_rating img {
            max-width: 35px;
            max-height: 25px;
        }

        #filter {
            position: relative;
            background-color: transparent;
            margin-top: 100px;
            border-collapse: collapse;
        }

        .dates {
            margin: 0;
            width: 210px;
            height: 50px;
            background-color: #2a2a2a;
            text-align: center;
            color: #ffffff;
            cursor: pointer;
        }

        .dates:hover {
            background-color: #ffffff;
            color: #000000;
        }

        .nav {
            padding: 5px;
            cursor: pointer;
            text-align: center;
            vertical-align: middle;
            background-color: #4b4b4b;
        }

        .nav:hover {
            background-color: #333333;
        }
        .date-clicked {
            background-color: white;
            color: black;
        }

        .dates.disabled { /* Style for disabled dates */
            background-color: #808080; /* Or any other grayed-out color */
            color: #c0c0c0; /* Lighter gray for text */
            cursor: default; /* Make it look unclickable */
            pointer-events: none; /* Disable clicks */
        }
        .dates.disabled:hover{
            background-color: #808080; /* Or any other grayed-out color */
            color: #c0c0c0; /* Lighter gray for text */
        }

        #shows {
            position: relative; 
            top: auto; 
            left: 25px; 
            width: 90vw; 
            border-collapse: collapse;
            margin-top: 40px;
        } 
        #shows tr{
            height: 50px;
            border-bottom: 1px solid #808080;
        }
        
        .show-header{
            color: #808080;
            text-align: left;
        }

        #shows .show-header th:last-child { /* Target the last <th> in the header row (Timing) */
            padding-left: 205px; /* Adjust as needed */
        }

        #shows td.showtime {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        padding: 5px;
        /* Key change: Set a fixed width for the showtime cell */
        width: 1100px; /* Or adjust as needed */
        vertical-align: top; /* Ensure content aligns to the top of the cell */
        padding-left: 200px;
        }

        

        #shows td { /* Add this to prevent horizontal stretching */
            padding: 8px; /* Add some padding */
        }

        #shows td.showtime span {
            background-color: #ffffff;
            color: black;
            height: 34px;
            width: 68px;
            text-align: center;
            border-radius: 7px;
            padding: 8px;
            margin: 5px;
            text-decoration: none;
            display: inline-block;
            white-space: nowrap;
        }

        #shows td.showtime span a {
            text-decoration: none; /* Remove the underline */
            color: black; /* Keep the text color black */
            pointer-events: none;
        }

        #shows td.showtime span {
            cursor: pointer; /* Add this line to make the box clickable */
        }


        #shows td.showtime span.imaxform,  /* Target IMAX showtimes */
        #shows td.showtime span.imax3dform { /* Target IMAX 3D showtimes */
            height: 20px; /* Let height adjust to content */
            padding: 8px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        #legend{
            width: 1000px;
            margin-top: 100px;
            margin-left: 300px;
        }
    </style>
    <link rel="icon" href="Images/SkyCinemaNew.png">
</head>
<body>
    <img src="Images/Header.png" class="header">
    <div class="container">
        <table class="movie_details">
            <tr>
                <td colspan="3" style="padding-bottom: 70px ;" class="movie_name"></td>
            </tr>
            <tr>
                <td rowspan="10"><img src="" class="poster"></td>
                <td colspan="2">CAST</td>
            </tr>
            <tr class="subheader">
                <td colspan="2">Cast Members, Cast Members, Cast Members, Cast Members, Cast Members, Cast Members, Cast Members, Cast Members, Cast Members, </td>
            </tr>
            <tr>
                <td colspan="2">SYNOPSIS</td>
            </tr>
            <tr class="subheader">
                <td colspan="2">Movie Synopsis, Movie Synopsis, Movie Synopsis, Movie Synopsis, Movie Synopsis, Movie Synopsis, Movie Synopsis, Movie Synopsis, </td>
            </tr>
            <tr>
                <td>DIRECTOR</td>
                <td>RATING</td>
            </tr>
            <tr class="subheader">
                <td>Director</td>
                <td class="movie_rating"></td>
            </tr>
            <tr>
                <td>GENRE</td>
                <td>RUNTIME</td>
            </tr>
            <tr class="subheader">
                <td>Genre</td>
                <td class="movie_time"></td>
            </tr>
            <tr>
                <td>LANGUAGE</td>
                <td>RELEASE</td>
            </tr>
            <tr class="subheader">
                <td>Language</td>
                <td>Release</td>
            </tr>
        </table>
    <table id="filter">
        <tr>
            <td id="previous" class="nav">◀</td>
            <!-- Date cells will be dynamically filled by JavaScript -->
            <td class="dates"></td>
            <td class="dates"></td>
            <td class="dates"></td>
            <td class="dates"></td>
            <td class="dates"></td>
            <td class="dates"></td>
            <td class="dates"></td>
            <td id="next" class="nav">▶</td>
        </tr>
    </table>
    <table id="shows">
        <tr class="show-header">
            <th colspan="5">Theatre</th> 
            <th>Timing</th> 
        </tr>
        <tr>
          <td colspan="5">Sky Cinemas Lido</td>
          <td class="showtime"></td> 
        </tr>
        <tr>
          <td colspan="5">Sky Cinemas Balestier</td>
          <td class="showtime"></td> 
        </tr>
        <tr>
          <td colspan="5">Sky Cinemas Waterway Point</td>
          <td class="showtime"></td> 
        </tr>
        <tr>
          <td colspan="5">Sky Cinemas Nex</td>
          <td class="showtime"></td> 
        </tr>
        <tr>
          <td colspan="5">Sky Cinemas Northpoint City</td>
          <td class="showtime"></td> 
        </tr>
      </table>
      <img src="Images/legend.png" id="legend">
    </div>

      

    <!-- Scripts embedded directly within the HTML -->
    <script>
// Define the maximum date for navigation
const maxDate = new Date(2025, 1, 25); // February 14, 2025

function updateDates() {
    const currentDate = new Date();
    const weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    for (let i = 1; i <= 7; i++) {
        const dateCell = document.getElementsByClassName('dates')[i - 1];
        const date = new Date(currentDate);
        date.setDate(currentDate.getDate() + i - 1);

        if (date > maxDate) {
            dateCell.textContent = "";
            dateCell.id = `date${i}`;
            dateCell.classList.add('disabled'); // Add the disabled class
            dateCell.removeEventListener('click', handleDateClick);
        } else {
            const formattedDate = formatDate(date);
            const weekday = weekdays[date.getDay()];
            dateCell.textContent = `${formattedDate} (${weekday})`;
            dateCell.id = `date${i}`;
            dateCell.classList.remove('disabled'); // Remove disabled class if it was previously added
            dateCell.addEventListener('click', handleDateClick);

                // Highlight the first valid date
                if (i === 1) {
                dateCell.classList.add('date-clicked');
            }
        }
    }
}

// Helper function to handle date clicks
function handleDateClick() {
    const allDateCells = document.querySelectorAll('.dates');
    allDateCells.forEach(cell => cell.classList.remove('date-clicked'));
    this.classList.add('date-clicked');
    getParameters();
}

document.getElementById('next').addEventListener('click', function () {
            const dateCells = document.querySelectorAll('.dates');
            let canNavigate = true;

            // Check if navigating to the next week exceeds the maximum date + 1 row
            for (let i = 0; i < dateCells.length; i++) {
                const currentIdNumber = parseInt(dateCells[i].id.replace('date', ''));
                const nextDate = new Date();
                nextDate.setDate(nextDate.getDate() + (currentIdNumber + 6));

                // Allow one extra row beyond maxDate
                if (nextDate > maxDate && nextDate <= new Date(maxDate.getFullYear(), maxDate.getMonth(), maxDate.getDate() + 7)) {
                    continue; // Skip this check for the extra row
                }

                if (nextDate > maxDate) {
                    canNavigate = false;
                    break;
                }
            }

            if (canNavigate) {
                for (let i = 0; i < dateCells.length; i++) {
                    const currentIdNumber = parseInt(dateCells[i].id.replace('date', ''));
                    dateCells[i].id = `date${currentIdNumber + 6}`;
                    const currentDate = new Date();
                    currentDate.setDate(currentDate.getDate() + (currentIdNumber + 6));

                    if (currentDate > maxDate && currentDate <= new Date(maxDate.getFullYear(), maxDate.getMonth(), maxDate.getDate() + 7)) {
                        // Only display the maxDate within the extra row
                        if (currentDate.toDateString() === maxDate.toDateString()) {
                            dateCells[i].textContent = `${formatDate(currentDate)} (${getWeekday(currentDate)})`;
                            dateCells[i].classList.remove('disabled'); // Enable the max date cell
                            dateCells[i].addEventListener('click', handleDateClick);
                        } else {
                            dateCells[i].textContent = "";
                            dateCells[i].classList.add('disabled'); // Disable other cells in the extra row
                            dateCells[i].removeEventListener('click', handleDateClick);
                        }
                    } else {
                        const formattedDate = formatDate(currentDate);
                        const weekday = getWeekday(currentDate);
                        dateCells[i].textContent = `${formattedDate} (${weekday})`;
                        dateCells[i].classList.remove('disabled');
                        dateCells[i].addEventListener('click', handleDateClick);
                    }
                }
                getParameters();
            }
        });


        document.getElementById('previous').addEventListener('click', function () {
            const dateCells = document.querySelectorAll('.dates');
            let canNavigate = true;

            for (let i = 0; i < dateCells.length; i++) {
                const currentIdNumber = parseInt(dateCells[i].id.replace('date', ''));
                const previousDate = new Date();
                previousDate.setDate(previousDate.getDate() + (currentIdNumber - 6));

                if (previousDate < new Date()) {
                    canNavigate = false;
                    break;
                }
            }

            if (canNavigate) {
                for (let i = 0; i < dateCells.length; i++) {
                    const currentIdNumber = parseInt(dateCells[i].id.replace('date', ''));
                    dateCells[i].id = `date${currentIdNumber - 6}`;
                    const currentDate = new Date();
                    currentDate.setDate(currentDate.getDate() + (currentIdNumber - 7));
                    const formattedDate = formatDate(currentDate);
                    const weekday = getWeekday(currentDate);
                    dateCells[i].textContent = `${formattedDate} (${weekday})`;
                    dateCells[i].classList.remove('disabled'); // Ensure they're not disabled
                    dateCells[i].addEventListener('click', handleDateClick);
                }
                getParameters();
            } else {
                console.log('Cannot navigate before today\'s date');
            }
        });


function getParameters() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    const poster = urlParams.get('poster');
    const movie_name = urlParams.get('movie_name');
    const movie_rating = urlParams.get('movie_rating');
    const movie_time = urlParams.get('movie_time');

    document.querySelector('.poster').setAttribute('src', poster);
    document.querySelector('.movie_name').textContent = movie_name;
    document.querySelector('.movie_rating').innerHTML = `<img src="${movie_rating}" alt="Movie Rating">`;
    document.querySelector('.movie_time').textContent = movie_time;
}

function formatDate(date) {
    const day = date.getDate();
    const month = date.toLocaleString('en-US', { month: 'short' });
    const year = date.getFullYear();
    return `${day} ${month} ${year}`;
}

function getWeekday(date) {
    const weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    return weekdays[date.getDay()];
}

window.onload = function () {
    getParameters();
    updateDates();
};

// Sample showtime data (modified to include format)
const showtimesData = {
    "Sky Cinemas Lido": [
        { time: "10:00 AM", format: "imaxform" },
        { time: "1:20 PM", format: "imaxform" },
        { time: "4:05 PM", format: "standform" },
        { time: "9:15 PM", format: "standform" }     
    ],
    "Sky Cinemas Balestier": [
        { time: "12:30 PM", format: "imaxform" },
        { time: "2:00 PM", format: "standform" },
        { time: "5:45 PM", format: "imax3dform" },
        { time: "7:00 PM", format: "standform" },
        { time: "9:10 PM", format: "standform" },
        { time: "11:50 PM", format: "standform" }
    ],
    "Sky Cinemas Waterway Point": [
        { time: "10:05 AM", format: "standform" },
        { time: "11:20 AM", format: "imaxform" },
        { time: "12:45 PM", format: "imax3dform" },
        { time: "3:25 PM", format: "standform" },
        { time: "5:20 PM", format: "standform" },
        { time: "6:05 PM", format: "imaxform" },
        { time: "8:45 PM", format: "standform" },
        { time: "11:25 PM", format: "standform" }
    ],
    "Sky Cinemas Nex": [
        { time: "10:00 AM", format: "standform" },
        { time: "1:20 PM", format: "standform" },
        { time: "3:20 PM", format: "imax3dform" },
        { time: "6:00 PM", format: "standform" },
        { time: "7:00 PM", format: "imaxform" },
        { time: "9:40 PM", format: "standform" },
        { time: "11:40 PM", format: "standform" },
        { time: "12:15 AM", format: "standform" }
    ],
    "Sky Cinemas Northpoint City": [
        { time: "10:30 AM", format: "standform" },
        { time: "1:10 PM", format: "standform" },
        { time: "3:50 PM", format: "standform" },
        { time: "6:30 PM", format: "imax3dform" },
        { time: "9:10 PM", format: "standform" },
        { time: "11:50 PM", format: "standform" }
    ],

};

function createShowtimeElements(showtimes, cinemaName) {
                const rows = document.querySelectorAll('#shows tr');
                const cinemaRow = Array.from(rows).find(row => row.children[0].textContent === cinemaName);

                if (cinemaRow) {
                    const showtimeCell = cinemaRow.querySelector('td.showtime');
                    showtimeCell.innerHTML = ""; // Clear existing showtimes

                    showtimes.forEach((showtime) => {
                const showtimeLink = document.createElement('a');
                showtimeLink.href = "Showtimes2.php";
                showtimeLink.textContent = showtime.time;  // Use showtime.time

                const showtimeSpan = document.createElement('span');
                showtimeSpan.appendChild(showtimeLink);

                // Add click event to the entire span (box)
            showtimeSpan.addEventListener('click', function () {
                // Get the movie details from the current page
                const poster = document.querySelector('.poster').src;
                const rating = document.querySelector('.movie_rating img').src;
                const movieName = document.querySelector('.movie_name').textContent;
                const date = document.querySelector('.date-clicked').textContent;
                const time = showtime.time;
                const format = showtime.format;

                // Construct the URL with query parameters
                const url = `showtimes2.php?poster=${encodeURIComponent(poster)}&movie_name=${encodeURIComponent(movieName)}&rating=${encodeURIComponent(rating)}&cinema=${encodeURIComponent(cinemaName)}&date=${encodeURIComponent(date)}&time=${encodeURIComponent(time)}&format=${encodeURIComponent(format)}`

                // Redirect to showtimes2.php with the parameters
                window.location.href = url;
            });

                
                // Add the appropriate class
                showtimeSpan.classList.add(showtime.format);

    // Add the image if needed
    if (showtime.format === "imaxform" || showtime.format === "imax3dform") { // Combined condition
        const imageSrc = showtime.format === "imaxform" ? "Images/imax.png" : "Images/imax3d.png";
        const imageAlt = showtime.format === "imaxform" ? "IMAX" : "IMAX 3D";

        const image = document.createElement('img');
        image.src = imageSrc;
        image.alt = imageAlt;
        image.style.width = "60px";
        image.style.height = "10px";

        showtimeSpan.appendChild(image); // Append image *after* the link

        // Key change: Set flex-direction to column
        showtimeSpan.style.display = "flex";
        showtimeSpan.style.flexDirection = "column"; // Stack elements vertically
        showtimeSpan.style.alignItems = "center"; // Center horizontally
        showtimeSpan.style.justifyContent = "center"; // Center vertically
        showtimeSpan.style.gap = "5px"; // Add gap between elements
    }

        showtimeCell.appendChild(showtimeSpan);
    });
        }}
// Populate showtimes for each cinema
for (const cinema in showtimesData) {
  const showtimes = showtimesData[cinema];
  createShowtimeElements(showtimes, cinema); 
}
    </script>
</body>
</html>