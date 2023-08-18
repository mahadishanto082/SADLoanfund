<?php
    include 'db.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>

    <div id="header">


        <div id="header_logo">

            <div id="logo">
                <img src="Dashboard/images/dashboard_logo.png" alt="" height="80px">
                
            </div>
    
            <label>Loan and Fund <br> Raising</label>

        </div>
        

        <div id="header_btn_container">
            <ul>
                <li>
                    <a href="login/login.php"><button id="btn_login">Login</button></a>
                </li>
                <li>
                    <a href="registration/registration.php"><button id="btn_Signup">Signup</button></a>
                </li>
                
            </ul>
        </div>
        
        
    </div>

    <nav>
        <ul>
            <a href="#"><li>Home</li></a>
            <a href="#"><li>News</li></a>
            <a href="loan/loanReq.html"><li>Request Loan</li></a>
            <a href="../"><li>Running Campaign</li></a>
            <a href="#"><li>About</li></a>
            <a href="#"><li>Contact</li></a>

        </ul>
    </nav><br>

    <div class="main">
        <div class="left">
            <h3>Requested Loan</h3>
            <hr>
            <ul id="loanList">
                <li>Name: John, Amount: $100</li>
                <li>Name: John, Amount: $100</li>
                
                

            </ul>

        </div>
        <div class="center">
            <h3>Running Campaign</h3>
            <hr>
            <ul id="campaignList">
                <li>Name: John, Amount: $100</li>
                <li>Name: John, Amount: $100</li>
                <li>Name: John, Amount: $100</li>
                <li>Name: John, Amount: $100</li>
                <li>Name: John, Amount: $100</li>
                
                
                
            </ul>

        </div>
        <div class="right">
            <div class="button-container">
            <a href="loan/loanReq.html"><button class="loan">Apply for Loan</button><br></a>
            <a href="campaign_form/campaign_form.html"><button class="camp">Create Campaign</button></a>
            </div>
        </div>
    </div>
</html>