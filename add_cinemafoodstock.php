<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Portal - Cinema Food Stock</title>
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
$errors = []; // Initialize an array to hold error messages

$food_name = $food_price = $food_stock = "";
$food_image = ""; // Initialize variable for food image
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food_name = $_POST["FoodName"];
    $food_price = $_POST["FoodPrice"];
    $food_stock = $_POST["FoodStock"];

    // Validate inputs
    if (empty($food_name)) {
        $errors["food_name"] = "Food name is required";
    }
    if (empty($food_price)) {
        $errors["food_price"] = "Food price is required";
    } elseif (!is_numeric($food_price)) {
        $errors["food_price"] = "Food price must be a number";
    }
    if (empty($food_stock)) {
        $errors["food_stock"] = "Food stock is required";
    } elseif (!is_numeric($food_stock)) {
        $errors["food_stock"] = "Food stock must be a number";
    }

    // Check for file upload
    if ($_FILES['poster']['error'] === UPLOAD_ERR_OK) {
        $food_image = file_get_contents($_FILES['poster']['tmp_name']);
    } else {
        $errors["food_image"] = "Error uploading file: " . $_FILES['poster']['error'];
    }

    // Insert into database if no errors
    if (empty($errors)) {
        $conn = new mysqli("localhost", "root", "", "skycinemas");
        $sqlstmt = "INSERT INTO addcinemafoodstock (foodName, foodImage, foodPrice, Stock) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sqlstmt);
        $stmt->bind_param("sbdi", $food_name, $food_image, $food_price, $food_stock);
        
        if ($stmt->execute()) {
            echo "Image uploaded successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
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
        <h1>Add New Food Stock</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" 
        enctype="multipart/form-data">
            <table>
                <tr>
                <td rowspan="6" style="width: 30%; text-align: center; vertical-align: top; padding-right: 20px;" class="image-upload">
                    <label for="poster">Upload Food Picture</label>
                    <img id="preview" src="#" alt="Food Preview" style="display:none;">  
                    <input type="file" id="poster" name="poster" accept="image/*">
                    <span class="err"> <?php echo isset($errors["food_image"]) ? $errors["food_image"] : ""; ?> </span> <!-- Display image error here -->
                </td>
                <td colspan="2">
                    <label for="title">Name</label>
                    <input type="text" id="food-name" name="FoodName" value="<?php echo $food_name; ?>">
                    <span class="err"> <?php echo isset($errors["food_name"]) ? $errors["food_name"] : ""; ?> </span>
                </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="synopsis">Price ($)</label>
                        <input type="text" id="food-price" name="FoodPrice" value="<?php echo $food_price; ?>">
                        <span class="err"> <?php echo isset($errors["food_price"]) ? $errors["food_price"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="cast">Stock</label>
                        <input type="text" id="food-stock" name="FoodStock" rows="3" value="<?php echo $food_stock; ?>">
                        <span class="err"> <?php echo isset($errors["food_stock"]) ? $errors["food_stock"] : ""; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Save" class="submit-btn" id="saveFood">
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="success-message" id="success">
                            You have successfully added a new food!  <!--only pops up when user presses save button-->
                        </span>
                    </td>
                </tr>
        </form>
    </div>

    <script>
        const backButton = document.getElementById('backButton'); // Or appropriate selector

        backButton.addEventListener('click', () => {
        window.location.href = 'StaffPortal_Homepage.html';
    });
    
    const saveButton = document.getElementById('saveFood');
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
    </script>
</body>
</html>