<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <form action="registration_handler.php" method="post">
        <h1>Registration</h1>

        <div class="row">
            <label>First name</label> 
            <br>
            <input type="text" name="firstname" required>
        </div>

        <div class="row">
            <label>Last name </label>
            <br>
            <input type="text" name="lastname" required>
        </div>

        <div class="row">
            <label>Email</label>
             <br>
            <input type="email" name="email" required>
        </div>

        <div class="row">
            <label>Student ID</label> 
            <br>
            <input type="text" name="studentid" required>
        </div>
        <div class="row">
            <label >Password</label> 
            <br>
            <input type="password" id="password" name="password" required> 
            <br>
            
            
        </div>

        <div class="row">
            <label >Confirm password</label>
            <br>
            
            <div id="confirm_password">
                <input type="password" id="confirmPassword" name="confirmPassword" oninput="validityChecker()"> 
                <div id="validation"></div>
            <br>
            </div>
   
        </div>

        <div class="row">
            <input type="submit" value="Sign up" id="btn" name="sign_up">
        </div>

        

    </form>
    <!-- lul -->
</body>
<script src="registration.js"></script>
</html>