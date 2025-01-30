document.addEventListener("DOMContentLoaded", function() {
    const movieData = JSON.parse(localStorage.getItem("selectedMovie"));

    if (movieData) {
        document.getElementById("movie-title").value = movieData.title;
        document.getElementById("movie-cast").value = movieData.cast;
        document.getElementById("movie-synopsis").value = movieData.synopsis;
        document.getElementById("movie-director").value = movieData.director;
        document.getElementById("movie-rating").value = movieData.rating;
        document.getElementById("movie-genre").value = movieData.genre;
        document.getElementById("movie-runtime").value = movieData.runtime;
        document.getElementById("movie-release").value = movieData.release;
        document.getElementById("movie-language").value = movieData.language;
        document.getElementById("movie-poster").src = movieData.poster;
    }
});

// Save Button
document.getElementById("save-button").addEventListener("click", function() {
    const updatedMovie = {
        title: document.getElementById("movie-title").value,
        cast: document.getElementById("movie-cast").value,
        synopsis: document.getElementById("movie-synopsis").value,
        director: document.getElementById("movie-director").value,
        rating: document.getElementById("movie-rating").value,
        genre: document.getElementById("movie-genre").value,
        runtime: document.getElementById("movie-runtime").value,
        release: document.getElementById("movie-release").value,
        language: document.getElementById("movie-language").value,
        poster: document.getElementById("movie-poster").src
    };

    localStorage.setItem("selectedMovie", JSON.stringify(updatedMovie));
    alert("Movie details updated successfully!");
});

// Delete Button
document.getElementById("delete-button").addEventListener("click", function() {
    const confirmDelete = confirm("Are you sure you want to delete this movie?");
    
    if (confirmDelete) {
        localStorage.removeItem("selectedMovie");
        alert("Movie deleted!");
        window.location.href = "index.html";
    }
});
