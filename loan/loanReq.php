<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan req</title>
    <link rel="stylesheet" href="loanReq.css">
</head>
<body>
    <form action="loanprocess.php" method="post">
        <h1>Loan Request Form</h1>
        <!-- -------------------------- -->
            
        <div id="loan_info">
            <div id="left">
                <div class="row">
                    <label>Title: </label>
                    <br>
                    <input  type="text" name="title" required>
                </div>
                <div class="row">
                    <label>Amount: </label>
                    <br>
                    <input  type="number" name="amount" required>
                </div>
                <div class="row">
                    <label>Duration:</label>
                    <br>
                    <input  type="date" name="date" required>
                </div>
            </div>


            <div id="right">
                <div class="row">
                    <label>Description: </label>
                    <br>
                    <textarea id="description"  name="description" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>



        <!-- --------------------------- -->
        <h1>User info</h1>


        <!-- --------------------------- -->
        <div id="user_info">
            <div id="left">
                <div class="row">
                    <label>Full Name: </label>
                    <br>
                    <input  type="text" name="fullname" required readonly style="cursor: not-allowed;">
                </div>
                <div class="row">
                    <label>Student ID: </label>
                    <br>
                    <input  type="text" name="studentid" required readonly style="cursor: not-allowed;">
                </div>
            </div>
            <div id="right">
                <div class="row">
                    <label>Email: </label>
                    <br>
                    <input  type="email" name="email" required readonly style="cursor: not-allowed;">
                </div>
                <div class="row">
                    <label>Phone: </label>
                    <br>
                    <input  type="text" name="phone" required>
                </div>
            </div>
        </div>


        <!-- --------------------------- -->
        <input type="submit" id="btn" value="Load" onclick="get_submit()">

    </form>
</body>
<script src="loanReq.js"></script>
</html>