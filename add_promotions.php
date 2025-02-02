<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Portal - Add Promotions</title>
    <style>
        /* General Styles */
        body {  
            background: linear-gradient(180deg, rgba(60, 138, 255, 1) 0%, rgba(0, 0, 0, 1) 31%);
            background-repeat: no-repeat;
            min-height: 100vh; /* Ensures it covers at least the first viewport */
            color: #ffffff;
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
        }

        /* Create a black background for overflowing content */
        body::after {
            content: "";
            position: absolute;
            top: 100vh; /* Start where the first page ends */
            left: 0;
            width: 100%;
            height: 100%; /* Covers any extra page height */
            background-color: black;
            z-index: -1;
        }

        .back-button {
            color: white;
            text-decoration: none;
            margin-right: 1rem;
            background-color: black;
            border-radius: 50%;
            size: 50px;
        }

        .header {
            text-align: center;
            display: flex;
            justify-content: center; /* Horizontally center content */
            align-items: center;  /* Vertically center content */
            margin-left: 450px;
            
        }

        h1 {
            margin: 20px 0;
            text-align: left;
        }

        .image-upload {
            width: 90%; /* Image container width */
            text-align: center;
            margin-right: 10px; /* Spacing between image and form */
        }

        .image-upload label {
            display: block;
            margin-bottom: 10px;
        }

        .image-upload img {
            max-width: 100%; /* Image within container */
            height: auto;
            max-height: 500px; /* Set max height as needed */
            margin-bottom: 10px;
        }

        .form-container {
            width: 90%;
            height: auto;
            margin: auto;
            padding: 20px;
            background-color: #000000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        table {
            width: 100%;
            border-spacing: 20px;
            text-align: left;
        }

        table input, table textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 18px;
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
            font-size: 18px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0266d8;
        }

        .success-message {
            color: lightgreen;
            display: none;
            margin-top: 20px;
        }
        .err {
            color: red;
        }
    </style>
</head>

<?php
    $errors = [];

    $promoName = "";
    $promoDesc = "";
    $displayPromo = "";
    $promoImg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $promoName = $_POST["PromoName"];
        $promoDesc = $_POST["PromoDesc"];
        $displayPromo = $_POST["display-promo"];
        $promoImg = $_FILES["PromoImg"];

        if (empty($promoName)) {
            $errors["promoName"] = "*Promotion name is required";
        }

        if (empty($promoDesc)) {
            $errors["promoDesc"] = "*Promotion description is required";
        }

        if (empty($displayPromo)) {
            $errors["displayPromo"] = "*Display promotion is required";
        }

        if (empty($promoImg)) {
            $errors["promoImg"] = "*Promotion image is required";
        }

        
        $conn = new mysqli("localhost", "root", "", "skycinemas");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $promoName = $_POST['PromoName'];
        $promoDesc = $_POST['PromoDesc'];
        $displayPromo = $_POST['display-promo'];

        $promoImg = $_FILES['PromoImg']['name'];
        $poster_tmp = $_FILES['PromoImg']['tmp_name'];

        $upload_dir = 'C:/CSAD/htdocs/CSAD_Team4_2B04/Images/'; 
        $poster_path = $upload_dir . basename($promoImg);

        if (move_uploaded_file($poster_tmp, $poster_path)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
            $poster_path = '';
        }

        $sqlstmt = "INSERT INTO promotions (promoname, promoimage, description, displayed) VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sqlstmt);

        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("ssss", $promoName, $poster_path, $promoDesc, $displayPromo);

        if ($stmt->execute()) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
?>

<body>
    <div style="text-align: left; padding-top: 30px; padding-left: 30px;">
        <a href="#" class="back-button" id="backButton">←</a>
    </div>
    <div>
        <img src="Images/Header.png" style="width:1000px ; height: 150px; text-align: center;" class="header" alt="Sky Cinemas Logo">
    </div>
   
    <div class="form-container">
        <h1>Add Promotion</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" 
        enctype="multipart/form-data">
            <table>
                <tr>
                    <td rowspan="6" style="width: 30%; text-align: center; vertical-align: top;" class="image-upload">
                        <label for="poster">Upload Promotion Picture</label>
                        <img id="preview" src="#" alt="Food Preview" style="display:none;">  
                        <input type="file" id="promo-img" name="PromoImg" accept="image/*">
                    </td>

                    <td colspan="2">
                        <label for="PromoName">Name</label>
                        <input type="text" id="promo-name" name="PromoName">
                        <span class="err"> <?php echo isset($errors["promoName"]) ? $errors["promoName"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="synopsis">Description</label>
                        <input type="text" id="promo-desc" name="PromoDesc">
                        <span class="err"> <?php echo isset($errors["promoDesc"]) ? $errors["promoDesc"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="display-promo">Display in Booking Process</label><br>
                            <input type="radio" id="display-promo-yes" name="display-promo" value="true" checked>
                            <label for="display-promo-yes">Yes</label>
                
                            <input type="radio" id="display-promo-no" name="display-promo" value="false">
                            <label for="display-promo-no">No</label>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" value="Save" class="submit-btn" id="savePromo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="success-message" id="success">
                            You have successfully added this promotion!  <!--only pops up when user presses save button-->
                        </span>
                    </td>
                </tr>
        </form>
    </div>

    <!--Back Button Function - Go back to Staff Portal Homepage-->
    <script>
        // Get a reference to the back button element (assuming it has the ID "backButton")
        const backButton = document.getElementById('backButton'); // Or appropriate selector

        // Add an event listener to the back button
        backButton.addEventListener('click', () => {
        // Redirect the user to StaffPortal_Homepage.html
        window.location.href = 'StaffPortal_Homepage.html';
    });
    </script>

    <!--Save new promotion addition & adjust food picture to be displayed-->
    <script>
        // Get references to the HTML elements
        const saveButton = document.getElementById('savePromo');
        const successMessage = document.getElementById('success');
        const imageInput = document.getElementById('poster');
        const previewImage = document.getElementById('preview');
    
        imageInput.addEventListener('change', () => {
            // Get the first selected file (assuming only one file can be selected)
            const file = imageInput.files[0];
            if (file) {
                const reader = new FileReader();
        
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                }
        
                reader.readAsDataURL(file);
            } else {
            // If no file was selected (e.g., user cleared selection)
              previewImage.src = '#';
              previewImage.style.display = 'none';
            }
        });
        </script>
</body>
</html>
