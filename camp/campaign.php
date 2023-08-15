<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="capaign.css">
</head>
<body>
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

                <li class="items">

                    <div class="img"><img src="../Dashboard/images/donation2.jpg"></div>
                    <Label><b>Title:</b> Donation for poor chields</Label>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet eveniet dolorum, assumenda temporibus pariatur, recusandae fugit sapiente officiis eum reiciendis placeat, modi vitae commodi corrupti expedita vero quis architecto!
                    
                    <div class="btn_donate" ><a href="../donation/donation.php"><button>Donate</button></a></div>
                    
                </li>

                <li class="items">
                    <div class="img"><img src="../Dashboard/images/donation1.jpg"></div>
                    <Label><b>Title:</b> Donation for poor chields</Label>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet eveniet dolorum, assumenda temporibus pariatur, recusandae fugit sapiente officiis eum reiciendis placeat, modi vitae commodi corrupti expedita vero quis architecto!
                    
                    <div id="btn_donate"><button>Donate</button></div>
                </li>

                <li class="items">

                    <div class="img"><img src="../Dashboard/images/donation3.jpg"></div>
                    <Label><b>Title:</b> Donation for poor chields</Label>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet eveniet dolorum, assumenda temporibus pariatur, recusandae fugit sapiente officiis eum reiciendis placeat, modi vitae commodi corrupti expedita vero quis architecto!
                    
                    <div id="btn_donate"><button>Donate</button></div>
                </li>

                <li class="items">

                    <div class="img"><img src="../Dashboard/images/doantion4.jpg"></div>
                    <Label><b>Title:</b> Donation for poor chields</Label>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet eveniet dolorum, assumenda temporibus pariatur, recusandae fugit sapiente officiis eum reiciendis placeat, modi vitae commodi corrupti expedita vero quis architecto!
                    
                    <div id="btn_donate"><button>Donate</button></div>
                </li>
            </ol>
        </div>
    </div>

</body>
</html>