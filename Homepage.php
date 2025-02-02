<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Cinemas Homepage</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            background: linear-gradient(180deg, #3c8aff 0%, #000000 31%);
            height: 100vh;
            color: #ffffff;
            font-family: sans-serif;
            overflow-x: hidden;
            background-attachment: fixed;
        }

        /* Table Styles */
        #header {
            width: 92vw;
            margin: 0 auto;
            margin-top: 20px;
            border-collapse: collapse; /* Ensure table borders collapse */
            table-layout: fixed; /* Fixed table layout */
        }

        /* Table Cell Styles */
        #header td {
            text-align: center;
            vertical-align: middle; /* Align content vertically in the middle */
            position: relative; /* Ensure relative positioning for nested elements */
            border-bottom: 1.7px solid;
        }

        /* Last Row Cell Styles */
        #header tr:last-child {
            border-bottom: 1.7px solid #ffffff; /* Remove bottom border for last row */
        }

        /* Select Styles */
        #header select,
        input[type="submit"],
        input[type="button"] {
            background-color: transparent; /* Example background color */
            color: #ffffff;
            border: none;
            width: calc(100% - 20px); /* Fill the entire width of the table cell, minus padding */
            height: 100%; /* Fill the entire height of the table cell */
            padding: 10px; /* Adjust padding for better appearance */
            box-sizing: border-box; /* Ensure padding and border are included in width */
            text-align: center;
            font-size: medium;
            font-weight: bold;
            height: 45px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        #header option {
            color: black;
            font-size: small;
        }

        #header input[type="submit"] {
            background-color: #ffffff;
            border-radius: 100px;
            color: rgba(60, 138, 255, 1);
        }

        #header input[type="button"] {
            background-color: #bce3fd;
            color: #000000;
            width: 150px;
            height: 40px;
        }

        #filter {
            background-color: transparent;
            margin-left: 3.5vw;
            margin-top: 60px;
            border-collapse: collapse;
        }

        #filter tr {
            border-bottom: 0;
        }

        #filter td {
            margin: 0;
            width: 170px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background-color: transparent;
            text-align: center;
            border-bottom: 1.7px solid;
        }

        .movie-block {
            margin-bottom: 100px;
        }

        .movies {
            margin-left: 2.5vw;
            overflow-x: hidden; /* Enable horizontal scrolling */
            scroll-snap-type: x mandatory;
            display: flex; /* Use flexbox for layout */
            height: 500px;
            width: 92.5vw; /* Set a fixed height for the movie section */
            justify-content: flex-start;
            margin-top: 25px;
            
        }

        .movies:active {
            cursor: grabbing;
        }

        .movie {
            cursor: pointer;
            margin-right: 1px; /* Adjust spacing between posters */
            margin-top: 0px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.2s ease; /* Optional: Add hover effect */
            width: 262px; /* Adjust width to accommodate poster and spacing */
            padding-left: 0.5em;
            padding-right: 0.5em;
            height: 100%;
        }

        .movie.dragging {
            pointer-events: none; /* Disable pointer events when dragging */
        }

        .movie:hover{
            transform: scale(0.95); /* Optional: Scale up slightly on hover */
        }

        .poster {
            width: 250px; /* Fixed width */
            height: 370px; /* Fixed height */
            border-radius: 8px; /* Optional: Add rounded corners */
            object-fit: cover; /* Ensure posters maintain their aspect ratio */
        }

        .imax_banner{
            margin-top: -441px; /* Adjust top positioning as needed */
            margin-left: 0px; /* Adjust left positioning as needed */
            display: flex;
            align-items: center;
        }

        .imax_banner img{
            width: 250px;
            height: 370px;
            border-radius: 8px; /* Optional: Add rounded corners */
            object-fit: cover; /* Ensure posters maintain their aspect ratio */
        }

        .description {
            margin-top: 10px;
            height: 60px;
            width: 240px;
        }

        .movie_name {
            text-align: left;
            max-width: 170px;
            width: 190px;
            font-size: large;
            font-family: 'Gill Sans MT';
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;    
        }

        .movie_rating {
            text-align: right;
        }
        .movie_rating img{
            max-width: 35px;
            max-height: 25px;
        }

        .movie_time {
            text-align: right;
            color: #8b8b8b;
        }
  
        .expand input {
            position: absolute;
            margin-left: 6px;
            top: 283px;
            background-color: rgba(255, 255, 255, 0.65);
            width: 30px;
            height: 370px;
            padding: 0;
            color: #000000;
            text-align: center;
        }

        .expanded {
            flex-wrap:wrap;  
            overflow: visible;     
          
        }

        .movie_link {
            color: inherit;
            text-decoration: none;
            -webkit-user-drag: none;
        }

        .promoHeader {  
            margin-left: 3.5vw;
            font-size: 30px;
            text-align: left;
        }

        hr {
            background-image: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
            position: relative;
            top: 15px;
            margin-left: 3.5vw;
            border: 0;
            height: 1px;
            width: 1000px;
        }
        
        .promo-block {
            position: relative;
            margin-top: 100px;

        }


        .promos {
            margin-left: 2.5vw;
            overflow-x: hidden; /* Enable horizontal scrolling */
            scroll-snap-type: x mandatory;
            display: flex; /* Use flexbox for layout */
            height: 500px;
            width: 92.5vw; /* Set a fixed height for the movie section */
            justify-content: flex-start;
            margin-top: 25px;
            overflow-y: hidden;
            
        }

        .promos:active {
            cursor: grabbing;
        }

        .promo {
            margin-right: 1px; /* Adjust spacing between posters */
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.2s ease; /* Optional: Add hover effect */
            width: 262px; /* Adjust width to accommodate poster and spacing */
            margin-bottom: 10px;
            padding-left: 0.5em;
            padding-right: 0.5em;
            height: 100%;
            cursor: pointer;
        }

        .promo.dragging {
            pointer-events: none; /* Disable pointer events when dragging */
        }

        .promo:hover{
            transform: scale(0.95); /* Optional: Scale up slightly on hover */
        }

        .promo_name {
            text-align: left;
            max-width: 170px;
            width: 190px;
            font-size: large;
            font-family: 'Gill Sans MT';
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .expand2 input {
            position: absolute;
            margin-left: 6px;
            top: 283px;
            background-color: rgba(255, 255, 255, 0.65);
            width: 30px;
            height: 370px;
            padding: 0;
            margin-top: -200px;
            color: #000000;
            text-align: center;
        }

        .expanded2 {
            flex-wrap:wrap;  
            overflow: visible;     
          
        }


        
    </style>
    <link rel="icon" href="Images/SkyCinemaNew.png">
</head>

<body>
    <!-- Aspect Ratio of Laptop is 1061x898 -->
    <table id="header">
        <tr>
            <td colspan="4" style="text-align: left;">
                <h1>Welcome to Sky Cinemas</h1>
            </td>
            <td rowspan="3">
                <img src="Images/SkyCinemaNEw.png" width="150px">
            </td>
            <td rowspan="2">
                <div style="font-size: 25px; font-family:'Arial';">Staff Portal</div><br>
                <form><input type="button" value="Login" name="Login Button" /></form>
            </td>
        </tr>
        <tr>
            <td>
                <select name="date">
                    <option value="16/25" selected>Today, 16 Jan 2025</option>
                    <option value="17/25">Tomorrow, 17 Jan 2025</option>
                    <option value="18/25">Saturday, 18 Jan 2025</option>
                    <option value="19/25">Sunday, 19 Jan 2025</option>
                    <option value="20/25">Monday, 20 Jan 2025</option>
                    <option value="21/25">Tuesday, 21 Jan 2025</option>
                    <option value="22/25">Wednesday, 22 Jan 2025</option>
                </select>
            </td>
            <td>
                <select name="movie">
                    <option value="All Movies" selected>All Movies</option>
                    <option value="Alien: Romulus">Alien: Romulus</option>
                    <option value="Wicked">Wicked</option>
                    <option value="Superman">Superman</option>
                    <option value="Flow">Flow</option>
                    <option value="Dune: Part Two">Dune: Part Two</option>
                    <option value="Sonic the Hedgehog 3">Sonic the Hedgehog 3</option>
                    <option value="Ballerina">Ballerina</option>
                    <option value="Captain America: Brave New World">Captain America: Brave New World</option>
                    <option value="Moana 2">Moana 2</option>
                </select>
            </td>
            <td>
                <select name="theater">
                    <option value="All Theaters" selected>All Theaters</option>
                    <option value="Lido">Sky Cinemas Lido</option>
                    <option value="Balestier">Sky Cinemas Balestier</option>
                    <option value="Waterway Point">Sky Cinemas Waterway Point</option>
                    <option value="Nex">Sky Cinemas Nex</option>
                    <option value="Northpoint City">Sky Cinemas Northpoint City</option>
                </select>
            </td>
            <td>
                <form><input type="submit" value="Showtimes" /></form>
            </td>
        </tr>
    </table>
    <table id="filter">
        <tr>
            <td id="nowShowing" style="background-color: #0066FF;" onclick="changeBackground('nowShowing')">
                <form><input type="button" value="Now Showing" /></form>
            </td>
            <td id="advanceSales" onclick="changeBackground('advanceSales')"> <!-- Added id for targeting -->
                <form><input type="button" value="Advance Sales" /></form>
            </td>
            <td id="comingSoon" onclick="changeBackground('comingSoon')"> <!-- Added id for targeting -->
                <form><input type="button" value="Coming Soon" /></form>
            </td>
        </tr>
    </table>
    <table class="movie-block">
    <tr>
        <td colspan="9">
            <div class="movies">
                
                <div onclick="goToShowtimes(event);" class="movie" id="movie1">
                    <img src="Images/alien_romulus.jpg" alt="alien_romulus" class="poster">               
                    <table class="description">
                        <tr>
                            <td class="movie_name">Alien: Romulus</td>
                            <td class="movie_rating"><img src="Images/nc16.png"></td>
                        </tr>
                        <tr class="movie_time">
                            <td colspan="2"><span id="time">119</span>mins</td>
                        </tr>
                    </table> 
                    <div class="imax_banner"><img src="Images/imax_banner.png"></div>                
                </div>
                

                
                <div onclick="goToShowtimes(event);" class="movie" id="movie2">
                    <img src="Images/wicked.jpg" alt="wicked" class="poster">               
                    <table class="description">
                        <tr>
                            <td class="movie_name">Wicked</td>
                            <td class="movie_rating"><img src="Images/pg.png"></td>
                        </tr>
                        <tr class="movie_time">
                            <td colspan="2"><span id="time">159</span>mins</td>
                        </tr>
                    </table>
                    <div class="imax_banner"></div>                 
                </div>
                

                
                <div onclick="goToShowtimes(event);" class="movie" id="movie3">
                    <img src="Images/superman.jpg" alt="superman" class="poster">              
                    <table class="description">
                        <tr>
                            <td class="movie_name">Superman</td>
                            <td class="movie_rating"><img src="Images/pg13.png"></td>
                        </tr>
                        <tr class="movie_time">
                            <td colspan="2"><span id="time">128</span>mins</td>
                        </tr>
                    </table>
                    <div class="imax_banner"></div>                   
                </div>
                

                
                <div onclick="goToShowtimes(event);" class="movie" id="movie8">
                    <img src="Images/captain.jpg" alt="captain" class="poster">  
                    <table class="description">
                        <tr>
                            <td class="movie_name">Captain America: Brave New World</td>
                            <td class="movie_rating"><img src="Images/pg13.png"></td>
                        </tr>
                        <tr class="movie_time">
                            <td colspan="2"><span id="time">118</span>mins</td>
                        </tr>
                    </table>
                    <div class="imax_banner"><img src="Images/imax3d_banner.png"></div>               
                </div>


                
                <div onclick="goToShowtimes(event);" class="movie" id="movie5">
                    <img src="Images/dune.jpg" alt="dune" class="poster">      
                    <table class="description">
                        <tr>
                            <td class="movie_name">Dune: Part Two</td>
                            <td class="movie_rating"><img src="Images/pg13.png"></td>
                        </tr>
                        <tr class="movie_time">
                            <td colspan="2"><span id="time">166</span>mins</td>
                        </tr>
                    </table>     
                    <div class="imax_banner"></div>                      
                </div>
                

                
                <div onclick="goToShowtimes(event);" class="movie" id="movie6">
                    <img src="Images/sonic.jpg" alt="sonic" class="poster">               
                    <table class="description">
                        <tr>
                            <td class="movie_name">Sonic the Hedgehog 3</td>
                            <td class="movie_rating"><img src="Images/pg.png"></td>
                        </tr>
                        <tr class="movie_time">
                            <td colspan="2"><span id="time">110</span>mins</td>
                        </tr>
                    </table> 
                    <div class="imax_banner"></div>                         
                </div>
                

                
                <div onclick="goToShowtimes(event);" class="movie" id="movie7">
                    <img src="Images/smile.jpg" alt="smile" class="poster">  
                    <table class="description">
                        <tr>
                            <td class="movie_name">Smile 2</td>
                            <td class="movie_rating"><img src="Images/m18.png"></td>
                        </tr>
                        <tr class="movie_time">
                            <td colspan="2"><span id="time">132</span>mins</td>
                        </tr>
                    </table>
                    <div class="imax_banner"></div>               
                </div>
                

                
                <div onclick="goToShowtimes(event);" class="movie" id="movie4">
                    <img src="Images/flow.jpg" alt="flow" class="poster">                          
                    <table class="description">
                        <tr>
                            <td class="movie_name">Flow</td>
                            <td class="movie_rating"><img src="Images/pg.png"></td>
                        </tr>
                        <tr class="movie_time">
                            <td colspan="2"><span id="time">84</span>mins</td>
                        </tr>
                    </table>              
                    <div class="imax_banner"></div>   
                </div>
                

                
                <div onclick="goToShowtimes(event);" class="movie" id="movie9">
                    <img src="Images/moana.jpg" alt="moana" class="poster">  
                    <table class="description">
                        <tr>
                            <td class="movie_name">Moana 2</td>
                            <td class="movie_rating"><img src="Images/pg.png"></td>
                        </tr>
                        <tr class="movie_time">
                            <td colspan="2"><span id="time">100</span>mins</td>
                        </tr>
                    </table>
                    <div class="imax_banner"></div>               
                </div>
                
            </section>
        </td>
        <td class="expand">
            <input type="button" value="▼" onclick="expandMovies()" />
        </td>
    </tr>
</table>
<table class="promo-block">
    <caption class="promoHeader">Promotions</caption>
    <tr><td><hr></td></tr>
    <tr>
        <td colspan="9">
            <section class="promos">
                
                <div onclick="window.location.href = 'Showtimes1.php';" class="promo" id="promo1">
                    <img src="Images/captain_promo.jpg" alt="captain_promo" class="poster">               
                    <table class="description">
                        <tr>
                            <td class="promo_name">Win CAPTAIN AMERICA: BRAVE NEW WORLD IMAX Posters </td>
                        </tr>
                    </table>              
                </div>

                <div onclick="window.location.href = 'Showtimes1.php';" class="promo" id="promo2">
                    <img src="Images/sonic_promo1.jpg" alt="alien_romulus" class="poster">               
                    <table class="description">
                        <tr>
                            <td class="promo_name">Win SONIC THE HEDGEHOG 3 Night Light</td>
                        </tr>
                    </table>              
                </div>
                <div onclick="window.location.href = 'Showtimes1.php';" class="promo" id="promo3">
                    <img src="Images/sonic_promo2.jpg" alt="alien_romulus" class="poster">               
                    <table class="description">
                        <tr>
                            <td class="promo_name">SONIC THE HEDGEHOG 3 Collector Combo</td>
                        </tr>
                    </table>              
                </div>
            </section>
        </td>
        <td class="expand2">
            <input type="button" value="▼" onclick="expandPromos()" />
        </td>
    </tr>
</table>


    <script>
        function goToShowtimes(event) {
            // Retrieve the ID of the clicked div
            const movieId = event.currentTarget.id;
            
            // Retrieve the poster URL from inside the clicked div by class
            const poster = event.currentTarget.querySelector('.poster').getAttribute('src');
            
            // Retrieve the movie name from inside the clicked div by class
            const movie_name = event.currentTarget.querySelector('.movie_name').textContent;
            
            // Retrieve the movie rating image source from inside the clicked div by class
            const movie_rating = event.currentTarget.querySelector('.movie_rating img').getAttribute('src');
            
            // Retrieve the movie time from inside the clicked div by tag name
            const movie_time = event.currentTarget.querySelector('.movie_time').textContent;
            
            // Construct the href with query parameters
            const href = `Showtimes1.php?id=${movieId}&poster=${poster}&movie_name=${encodeURIComponent(movie_name)}&movie_rating=${movie_rating}&movie_time=${encodeURIComponent(movie_time)}`;
            
            // Redirect to the constructed href
            window.location.href = href;
        }
    </script>

    <script>
        let lastClickedId = null;

        function changeBackground(id) {
            const tdElements = document.querySelectorAll('#filter td');

            // Reset all td background colors
            tdElements.forEach(td => {
                td.style.backgroundColor = "transparent";
            });

            // Set background color of the clicked td
            const clickedTd = document.getElementById(id);
            clickedTd.style.backgroundColor = "#0066FF";

            // Update last clicked id
            lastClickedId = id;
        }
    </script>
    <script>
        window.onload = function() {
            // Select all movie elements
            const movies = document.querySelectorAll('.movie');

            // Loop through each movie
            movies.forEach(movie => {
                // Check if IMAX banner exists inside the current movie
                const imaxBanner = movie.querySelector('.imax_banner img');

                // Adjust movie container based on IMAX banner existence
                if (imaxBanner) {
                    // Select elements within the movie container
                    const posterElement = movie.querySelector('.poster');
                    const descriptionElement = movie.querySelector('.description');

                    // Adjust styles for poster and description
                    posterElement.style.width = '237px';
                    posterElement.style.height = '330px';
                    posterElement.style.marginTop = '34px';
                    posterElement.style.borderRadius = '0';
                    descriptionElement.style.marginTop = '16px'; // Adjust margin top for positioning
                }
            });
        };
    </script>
    <script>
        const movies = document.querySelectorAll('.movie');
        const slider = document.querySelector('.movies');

        let mouseDown = false;
        let startX, scrollLeft;
        let dragStartTimer = null;
        const dragDelay =120; // Adjust delay in milliseconds as needed

        const startDragging = (e) => {
            // Set a timer to start dragging after a delay
            dragStartTimer = setTimeout(() => {
                mouseDown = true;
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;

                // Add a class to disable pointer events on movie posters
                movies.forEach(movie => {
                    movie.classList.add('dragging');
                });
            }, dragDelay);
        }

        const stopDragging = () => {
            // Clear the timer if dragging stops before delay
            clearTimeout(dragStartTimer);
            
            mouseDown = false;

            // Remove the class to enable pointer events back
            movies.forEach(movie => {
                movie.classList.remove('dragging');
            });
        }

        const move = (e) => {
            e.preventDefault();
            if (!mouseDown) return;

            const x = e.pageX - slider.offsetLeft;
            const scroll = x - startX;
            slider.scrollLeft = scrollLeft - scroll;
        }

        const checkMovieCountAndToggleExpand = () => {
            const expandButton = document.querySelector('.expand input[type="button"]');
            // Check number of promos
            if (movies.length <= 6) {
                expandButton.style.display = 'none'; // Hide expand button if 6 or fewer promos
            } else {
                expandButton.style.display = 'block'; // Show expand button if more than 6 promos
            }
        }

        // Initial check on page load
        checkMovieCountAndToggleExpand();
        
        // Add event listeners to handle dragging
        slider.addEventListener('mousedown', startDragging);
        slider.addEventListener('mousemove', move);
        slider.addEventListener('mouseup', stopDragging);
        slider.addEventListener('mouseleave', stopDragging);
    </script>
    

    <script>
        const promos = document.querySelectorAll('.promo');
        const promosContainer = document.querySelector('.promos');
    
        let isMouseDown2 = false;
        let startX2, startScrollLeft2;
        let dragStartTimer2 = null;
        const dragDelay2 = 122; // Adjust delay in milliseconds as needed
    
        const startDragging2 = (e) => {
            // Set a timer to start dragging after a delay
            dragStartTimer2 = setTimeout(() => {
                isMouseDown2 = true;
                startX2 = e.pageX - promosContainer.offsetLeft;
                startScrollLeft2 = promosContainer.scrollLeft;
    
                // Add a class to disable pointer events on promo items
                promos.forEach(promo => {
                    promo.classList.add('dragging');
                });
            }, dragDelay2);
        }
    
        const stopDragging2 = () => {
            // Clear the timer if dragging stops before delay
            clearTimeout(dragStartTimer2);
            isMouseDown2 = false;
    
            // Remove the class to enable pointer events back
            promos.forEach(promo => {
                promo.classList.remove('dragging');
            });
        }
    
        const move2 = (e) => {
            e.preventDefault();
            if (!isMouseDown2) return;
    
            const x = e.pageX - promosContainer.offsetLeft;
            const scroll = x - startX2;
            promosContainer.scrollLeft = startScrollLeft2 - scroll;
        }
        
        const checkPromoCountAndToggleExpand = () => {
            const expand2Button = document.querySelector('.expand2 input[type="button"]');
            // Check number of promos
            if (promos.length <= 6) {
                expand2Button.style.display = 'none'; // Hide expand button if 6 or fewer promos
            } else {
                expand2Button.style.display = 'block'; // Show expand button if more than 6 promos
            }
        }

        // Initial check on page load
        checkPromoCountAndToggleExpand();

        // Add event listeners to handle dragging
        promosContainer.addEventListener('mousedown', startDragging2);
        promosContainer.addEventListener('mousemove', move2);
        promosContainer.addEventListener('mouseup', stopDragging2);
        promosContainer.addEventListener('mouseleave', stopDragging2);
    </script>
    

    

<script>
    function expandMovies() {
        const moviesSection = document.querySelector('.movies');
        
        const lastMovie = moviesSection.querySelector('.movie:last-child');

        moviesSection.classList.toggle('expanded');
        

        const expandButton = document.querySelector('.expand input[type="button"]');

        if (expandButton.value === "▼") {
            expandButton.value = "▲";
        } else {
            expandButton.value = "▼";
        }

        if (moviesSection.classList.contains('expanded')) {
            // Retrieve position of last .movie element
            const lastMovieRect = lastMovie.getBoundingClientRect();

            document.getElementsByClassName("movie-block")[0].style.marginBottom
                = `${lastMovieRect.bottom - moviesSection.getBoundingClientRect().bottom + 100}px`;
            // Calculate new top position for promo-block
        } else {
            // Reset position to default or remove styles
            document.getElementsByClassName("movie-block")[0].style.marginBottom = `100px`;
        }
        window.addEventListener("resize", () => {
                const moviesSection = document.querySelector('.movies');
                if (moviesSection.classList.contains('expanded')) {
                    expandMovies();
                }
            });
    }
</script>


<script>
    function expandPromos() {
        const promosSection = document.querySelector('.promos');
        
        const lastPromo = promosSection.querySelector('.promo:last-child');

        promosSection.classList.toggle('expanded2');
        

        const expand2Button = document.querySelector('.expand2 input[type="button"]');

        if (expand2Button.value === "▼") {
            expand2Button.value = "▲";
        } else {
            expand2Button.value = "▼";
        }

        if (promosSection.classList.contains('expanded2')) {
            // Retrieve position of last .movie element
            const lastPromoRect = lastPromo.getBoundingClientRect();

            document.getElementsByClassName("promo-block")[0].style.marginBottom
                = `${lastPromoRect.bottom - promosSection.getBoundingClientRect().bottom + 100}px`;
            // Calculate new top position for promo-block
        } else {
            // Reset position to default or remove styles
            document.getElementsByClassName("promo-block")[0].style.marginBottom = `100px`;
        }
        window.addEventListener("resize", () => {
                const promosSection = document.querySelector('.movies');
                if (promosSection.classList.contains('expanded2')) {
                    expandPromos();
                }
            });
    }
</script>

</body>

</html>