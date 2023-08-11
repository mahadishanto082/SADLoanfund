<?php
if (isset($_POST['campaign_id'])) {
    $campaignId = $_POST['campaign_id'];

    // Now you can use $campaignId to fetch and display campaign details
    // Example: Retrieve campaign details from a database based on $campaignId
    // Display the campaign details here
    echo "This is campaign_details.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donation.css">
    <title>Campaign Details</title>
</head>
<body>
<h1 align="center">Campaign Details</h1>
    <!-- Display campaign details using PHP variables here -->
    <div id="box">
        <div class="top">
    <div class="img">
        <img src="child..jpg.jpg" alt="" width="250px;"  height="220px;">
    </div>
            </div>
    <div class="foot">
    <h3>Donation for child</h3>
        <table >
            <tr><td class="des"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet eveniet dolorum, assumenda temporibus pariatur, recusandae fugit sapiente officiis eum reiciendis placeat, modi vitae commodi corrupti expedita vero quis architecto!</td></tr>
            <tr><td> <a href="#"><button class="btn-donate" >Donate</button></a></td></tr>
        
        </table>
        </div>
    </div>
</body>
</html>
