<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="loan_funded";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Error".mysqli_connect_error());
}


// Fetch loan data from the database
$sql = "SELECT fullname, amount FROM loan_requests";
$result = $conn->query($sql);

$loanList = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $loanList[] = "Name: " . $row["fullname"] . ", Amount: $" . $row["amount"];
    }
}

// Close the database connection
$conn->close();

// Convert loan data to JSON for AJAX retrieval
echo json_encode($loanList);
?>
