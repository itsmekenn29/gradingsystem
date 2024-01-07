<?php
include("config.php");

if(!isset($_GET["code"])) {
	exit("Cant Find Page");
}

	
	$code = $_GET["code"];

	$getEmailQuery = mysqli_query($con, "SELECT email FROM resetpasswords WHERE code='$code'");
	if(mysqli_num_rows($getEmailQuery) == 0) {
		exit("Cant Find Page");
	}

if(isset($_POST["password"])) {
	$pw = $_POST["password"];
	

	$row = mysqli_fetch_array($getEmailQuery);
	$email = $row["email"];

	$query = mysqli_query($con, "UPDATE tbladmin SET password='$pw' WHERE email='$email'");
	$query = mysqli_query($con, "UPDATE tblstudent SET password='$pw' WHERE username='$email'");
	$query = mysqli_query($con, "UPDATE tblteacher SET password='$pw' WHERE username='$email'");
    
	if($query) {
		$query = mysqli_query($con, "DELETE FROM resetpasswords WHERE code='$code'");
		
		header("Location: login.php ");
        echo("Reset Password Successfully!");
        
	}
	else {
		exit("Something went wrong");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Reset Password</title>
	<style>
           
           body{
                background: rgba(247, 245, 255, 1);
                padding: 0;
                margin: 0;
                font-family: sans-serif;
            }
           
            form{
                display: flex;
                justify-content: center;
                
                
            }
            .box{
                padding: 80px 20px;
                background-color: rgba(253, 253, 253, 1);
                margin-top: 40px;
                border-radius: 10px;
                box-shadow: 1px 1px 5px rgba(58, 41, 168,.2);
                position: relative;
                
            }
            .nwpass{
                border: 1px solid #ccc ;
                height: 35px;
                border-radius: 5px;
                outline: none;
                margin-right: 10px;
                width: 285px;
            }
            .nwpass[placeholder]{
                padding-left: 10px;
                background-color: white;
               
                
            }
            .nwpass[placeholder]:hover{
                color: rgba(58, 41, 168, .7);
            }
            .nwpass:hover{
                outline: 1px solid rgba(58, 41, 168, .7);
            }
            .button{
                margin-top: 10px;
                outline: 1px solid rgba(123, 58, 237,1);
                background-color: rgba(136, 79, 238,1);  
                border: none;
                color: white;
                height: 40px;
                width: 300px;
                border-radius: 5px;
                cursor: pointer;
            }
            .button:hover{
                background-color: rgba(123, 58, 237,1);
                box-shadow: 1px 0px 5px rgba(123, 58, 237, 1);
                outline: 2px solid rgba(123, 58, 237,1);
            }
            i{
                position: absolute;
                margin-top: -50px;
            }
            h5{
                margin-top: -4px;

                font-size: 30px;
                
            }
            span{
                font-size: 13px;
                color: rgba(143, 143, 143, 1);
                margin-top: -40px;
                letter-spacing: px;
                word-spacing: 2px;
                position: absolute;
                
                
            }
            a{
                color: black;
                text-decoration: none;
                display: flex;
                position: absolute;
            }
            a p{

                margin-top: -50px;
                margin-left: 20px;
            }
            a:hover{
                color: rgba(123, 58, 237,1);
            }
            .e{
                margin-top: 40px;
               position: absolute;
               font-size: 15px;
               color: rgba(143, 143, 143, 1);
               font-weight: 500;
            }
            input{
                margin-top: 60px;
            }
        </style>
</head>
<body>
<form method="POST">
   <div class="box">
   <a href="requestReset.php"><i class="fa fa-arrow-left" > </i><p>Back</p></a>
    <h5>Create New Password</h5>
    <span>Your new password must be different from previous <br>used passwords.</span>
        <p class="e">New Password</p>
        <input class="nwpass"type="password" name="password" placeholder="Enter new password">
        <br>
        <input class="button"type="submit" name="submit" value="Reset password">
        
            
   </div>
</form>

</body>
</html>
