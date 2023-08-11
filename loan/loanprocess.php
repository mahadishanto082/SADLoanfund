<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $title = $_POST["title"];
    $amount = $_POST["amount"];
    $duration = $_POST["date"];
    $description = $_POST["description"];
    $fullname = $_POST["fullname"];
    $studentid = $_POST["studentid"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
//database connection
    $server ="localhost";
    $username ="root";
    $password ="";
    $database ="loan_funded";
    
    $conn=mysqli_connect($server,$username,$password,$database);
    if(!$conn){
        die("Error".mysqli_connect_error());
    }
    
    

    // Insert data into the database
    $sql = "INSERT INTO loan_requests (title, amount, duration, description, fullname, studentid, email, phone)
            VALUES ('$title', '$amount', '$duration', '$description', '$fullname', '$studentid', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
