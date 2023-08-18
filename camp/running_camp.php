<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="capaign.css">
</head>
<body>
    <!-- Header, navigation, and other page elements -->
    <div id="header">


        <div id="header_logo">

            <div id="logo">
                <img src="images/dashboard_logo.png" alt="" height="80px">
                
            </div>
    
            <label>Loan and Fund <br> Raising</label>

        </div>
        
        <div id="out">
            <a href="../login/logout.php" ><button class="logout" >Logout</button></a>
        </div>
        <div id="header_btn_container">
            <ul>
                <li>
                    <a href="#"><button id="profile"></button></a>
                </li>
                
            </ul>
        </div>
        
        
    </div>

    <nav>
        <ul>
            <a href="../dashboard/logged_dasboard.php"><li>Home</li></a>
            <a href="#"><li>News</li></a>
            <a href="../LoanReq/loanReq.html"><li>Request Loan</li></a>
            <a href="/camp/campaign.php"><li>Running campaign</li></a>
            <a href="#"><li>About</li></a>
            <a href="#"><li>Contact</li></a>

        </ul>
    </nav>

    <div id="body">
        <h2 id="title">Running campaigns</h2>
        <div id="campaign">
            <ol id="grid_container">
                <?php
                // Connect to the database
                $server = "localhost";
                $username = "root";
                $password = "";
                $database = "loan_funded";
                
                $conn = mysqli_connect($server, $username, $password, $database);
                if (!$conn) {
                    die("Error: " . mysqli_connect_error());
                }
                
                // Fetch campaign form data from the database
                $sql = "SELECT * FROM campaign_submissions";
                $result = mysqli_query($conn, $sql);
                
                // Loop through each campaign form request and display as a blog post
                while ($campaign = mysqli_fetch_assoc($result)) {
                    echo '<li class="items">';
                    echo '<div class="img"><img src="Campaign form/' . $campaign['image'] . '"></div>';
                    echo '<Label><b>Title:</b> ' . $campaign["title"] . '</Label><br><br>';
                    echo $campaign["description"];
                    echo '<div class="btn_view"><a href="../donation/donation.php?campaign_id=' . $campaign["id"] . '"><button>View</button></a></div>';
                    echo '</li>';
                }
                
                
                // Close the database connection
                mysqli_close($conn);
                ?>
            </ol>
        </div>
    </div>

    <!-- Other closing HTML tags and JavaScript imports if needed -->
</body>
</html>
