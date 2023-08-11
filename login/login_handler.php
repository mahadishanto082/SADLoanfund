<?php
    include '../db.php';

    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "Select * from users where email = '$email' AND password='$password'";
	    $result = mysqli_query($conn, $sql);
	    $data = $result->fetch_assoc() ;
	    $num = mysqli_num_rows($result);
        
        if($num == 1){
            echo "inside if";
            $login = true;
            session_start();
		    $_SESSION['firstname'] = $data['firstname'] ;
		    $_SESSION['lastname'] = $data['lastname'] ;
		    $_SESSION['email'] = $data['email'] ;
		    $_SESSION['id'] = $data['id'] ;
            
            header("location: ../dashboard/logged_dasboard.php");

        }else{
            echo '<script>alert("Incorrect email or password"); window.location.assign("../login/login.php"); </script>';
            
        }
        
    }
    

?>