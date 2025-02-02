<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Portal - Add New Movie</title>
    <style>
        body {
            background: linear-gradient(180deg, rgba(60, 138, 255, 1) 0%, rgba(0, 0, 0, 1) 31%);
            color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin: 20px 0;
            text-align: left;
        }

        .form-container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #000000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-spacing: 20px;
            text-align: left;
        }

        table input,
        table select,
        table textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        #poster {
            display: block;
            margin: auto;
            cursor: pointer;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: #3c8aff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0266d8;
        }

        .success-message {
            color: lightgreen;
            display: none;
            margin-top: 20px;
            text-align: left;
        }

        .image-upload {
            width: 90%;
            /* Image container width */
            text-align: center;
            margin-right: 10px;
            /* Spacing between image and form */
        }

        .image-upload label {
            display: block;
            margin-bottom: 10px;
        }

        .image-upload img {
            max-width: 100%;
            /* Image within container */
            height: auto;
            max-height: 500px;
            /* Set max height as needed */
            margin-bottom: 10px;
        }

        .err {
            color: red;
        }

        #preview {
            width: 350px;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<?php 
    $errors = [];

    $poster = $title = $cast = $synopsis = $rating = $director = "";
    $genre = $runtime = $language = $release = $showtimes = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //print_r($_POST);
        
        $poster = $_FILES["poster"];
        $title = $_POST["Title"];
        $cast = $_POST["Cast"];
        $synopsis = $_POST["Synopsis"];
        $rating = $_POST["Rating"];
        $director = $_POST["Director"];
        $genre = $_POST["Genre"];
        $runtime = $_POST["Runtime"];
        $language = $_POST["Language"];
        $release = $_POST["Release"];
        $showtimes = $_POST["Showtimes"];

        if (empty($title)) {
            $errors["title"] = "*Title is required.";
        }
        if (empty($cast)) {
            $errors["cast"] = "*Cast is required.";
        }
        if (empty($synopsis)) {
            $errors["synopsis"] = "*Synopsis is required.";
        }
        if (empty($rating)) {
            $errors["rating"] = "*Rating is required.";
        }
        if (empty($director)) {
            $errors["director"] = "*Director is required.";
        }
        if (empty($genre)) {
            $errors["genre"] = "*Genre is required.";
        }
        if (empty($runtime)) {
            $errors["runtime"] = "*Runtime is required.";
        }
        if (empty($language)) {
            $errors["language"] = "*Language is required.";
        }
        if (empty($release)) {
            $errors["release"] = "*Release date is required.";
        }
        if (empty($showtimes)) {
            $errors["showtimes"] = "*Showtimes are required.";
        }

        $conn = new mysqli("localhost", "root", "", "skycinemas");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $errors = [];
        $success = false;

        $sqlstmt = "INSERT INTO movies (title, poster, cast, synopsis, director, runtime, releasedate, rating, genre, language, showtimes)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sqlstmt);

        $stmt->bind_param("sssssssssss", $title, $poster, $cast, $synopsis, $director, $runtime, $release, $rating, $genre, $language, $showtimes);

        if ($stmt->execute()) {
            echo "Record inserted successfully.";
            $success = true;
        } else {
            echo "Error: " . $stmt->error;
            $errors[] = $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
?>

<body>
    <div>
        <img src="Images/Header.png" style="width:1000px ; height: 150px" alt="Sky Cinemas Logo">
    </div>

    <div class="form-container">
        <h1>Add New Movie</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" 
        enctype="multipart/form-data">
            <table>
                <tr>
                    <td rowspan="6" style="width: 30%; text-align: center; vertical-align: top; padding-right: 20px;" class="image-upload">
                        <label for="poster">Upload Movie Poster</label>  
                        <img id="preview" src="images/image.png" alt="Movie Preview" style="cursor: pointer;">  
                        <input type="file" id="poster" name="poster" accept="image/*" style="display: none;">
                    </td>
                    <td colspan="2">
                        <label for="title">Movie Title</label>
                        <input type="text" id="title" name="Title" value="<?php echo $title; ?>">
                        <span class="err"> <?php echo isset($errors["title"]) ? $errors["title"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="cast">Cast</label>
                        <input type="text" id="cast" name="Cast" value="<?php echo $cast; ?>">
                        <span class="err"> <?php echo isset($errors["cast"]) ? $errors["cast"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="synopsis">Synopsis</label>
                        <textarea id="synopsis" name="Synopsis" rows="3"><?php echo $synopsis ?></textarea>
                        <span class="err"> <?php echo isset($errors["synopsis"]) ? $errors["synopsis"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="rating">Rating</label>
                        <select id="rating" name="Rating">
                            <option>PG</option>
                            <option>PG13</option>
                            <option>NC16</option>
                            <option>M18</option>
                            <option>R21</option>
                        </select>
                        <span class="err"> <?php echo isset($errors["rating"]) ? $errors["rating"] : ""; ?> </span>
                    </td>
                    <td>
                        <label for="director">Director</label>
                        <input type="text" id="director" name="Director" value="<?php echo $director; ?>">
                        <span class="err"> <?php echo isset($errors["director"]) ? $errors["director"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="genre">Genre</label>
                        <select id="genre" name="Genre">
                            <option>Romance</option>
                            <option>Comedy</option>
                            <option>Horror</option>
                            <option>Sci-Fi</option>
                            <option>Mystery</option>
                        </select>
                        <span class="err"> <?php echo isset($errors["genre"]) ? $errors["genre"] : ""; ?> </span>
                    </td>
                    <td>
                        <label for="runtime">Runtime</label>
                        <input type="text" id="runtime" name="Runtime" value="<?php echo $runtime; ?>">
                        <span class="err"> <?php echo isset($errors["runtime"]) ? $errors["runtime"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="anguage">Language</label>
                        <select id="language" name="Language">
                            <option>English</option>
                            <option>Chinese</option>
                            <option>Malay</option>
                            <option>Tamil</option>
                        </select>
                        <span class="err"> <?php echo isset($errors["language"]) ? $errors["language"] : ""; ?> </span>
                    </td>
                    <td>
                        <label for="release">Release</label>
                        <input type="text" id="release" name="Release" value="<?php echo $release; ?>">
                        <span class="err"> <?php echo isset($errors["release"]) ? $errors["release"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">
                        <label for="showtimes">Showtimes</label>
                        <input type="text" id="showtimes" name="Showtimes" value="<?php echo $showtimes; ?>">
                        <span class="err"> <?php echo isset($errors["showtimes"]) ? $errors["showtimes"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: center;">
                        <input style="background-color: #3c8aff; width: 100%;" type="button" class="editshowtimes-btn"
                            value="Edit">
                    </td>
                </tr>
                <!--leave a bit of space between edit button and submit button-->
                <tr></tr>
                <tr></tr>
                <tr>
                    <td></td>
                    <td colspan="2" style="text-align: center;">
                        <input style="background-color: lime; width: 100%;" type="submit" class="save-btn"
                            value="Submit" id="saveMovie">
                        <span class="success-message" id="success">You have successfully added a new movie!</span>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <!--Submit new movie details & adjust movie poster picture to be displayed-->
    <script>
        // Get references to the HTML elements
        const saveButton = document.getElementById('saveMovie');
        const successMessage = document.getElementById('success');
        const imageInput = document.getElementById('poster');
        const previewImage = document.getElementById('preview');

        imageInput.addEventListener('change', () => {
            const file = imageInput.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                }

                reader.readAsDataURL(file);
            } else {
                previewImage.src = '#';
                previewImage.style.display = 'none';
            }
        });

        previewImage.addEventListener('click', () => {
            imageInput.click();
        });

        imageInput.addEventListener('change', () => {
            const file = imageInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                previewImage.src = "images/image.png";
            }
        });
    </script>
</body>

</html>
