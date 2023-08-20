<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $date = $_POST["date"];
    $description = $_POST["description"];
    $fullname = $_POST["fullname"];
    $studentid = $_POST["studentid"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $server ="localhost";
    $username ="root";
    $password ="";
    $database ="loan_funded";
    
    $conn=mysqli_connect($server,$username,$password,$database);
    if(!$conn){
        die("Error".mysqli_connect_error());
    }
}
    
    $targetDir = "uploads/"; // Directory to store uploaded images
    $imageName = basename($_FILES["picture"]["name"]);
    $targetFilePath = $targetDir . $imageName;
    $imageFileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain image file formats
    $allowedFormats = array("jpg", "jpeg", "png", "gif");
    if (in_array(strtolower($imageFileType), $allowedFormats)) {
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFilePath)) {
            // Insert data into the table
        // Assuming you have a logged-in user's ID stored in $_SESSION['id']
        $creatorId = $_SESSION['id'];

        $sql = "INSERT INTO campaign_submissions (title, date, description, fullname, studentid, email, phone, image, creator_id)
        VALUES ('$title', '$date', '$description', '$fullname', '$studentid', '$email', '$phone', '$imageName', '$creatorId')";


            if ($conn->query($sql) === TRUE) {
                echo "<h1>Thank you for submitting the form!</h1>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "Invalid image format. Allowed formats: jpg, jpeg, png, gif.";
    }

    $conn->close(); // Close the database connection after all operations

?>