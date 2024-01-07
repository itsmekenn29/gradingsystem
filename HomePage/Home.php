<?php

session_start();

if(isset($_GET['logout'])) {
    session_unset();
    session_destroy();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grading System - Main Page</title>
    <link rel="stylesheet" href="main.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">             

    <style>
       
    </style>
</head>
<body>

    <div class="hero" id="home">
        <div class="container">
            <header>
                <a href="#home"><img src="logoWhite.png" alt="" class="logo" width="50px"></a>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#Contact">Contact Us </i></a></li>
                        
                    </ul>
                </nav>
                <i class='bx bxs-circle fa' id="icon"></i>
                <a href="../system/login.php"><button style="height:50px; margin-top:-2px; border-radius: 1px; left: 20%;"> Login</button></a>
                 
            </header>
            <div class="info">
                <h1 class="title">
                    EASIER AND FASTER
                </h1>
                
                <p class="intro" style="font-size:16px"> Our team is passionate about helping educators succeed, and we work hard to make sure our platform is always up-to-date and running smoothly. We believe that education should be accessible to all, and we are committed to providing an affordable and efficient solution for educators.
                </p>
               
                <div class="scroll-btn">
                   <br><br><br><br><br><br><br><br><br><br>
                    <a href="#about" class="scroll" >Scroll Down <i class='bx bxs-chevrons-down arrow'></i></a>
               
                </div>
            </div>
            <img src="images.webp" class="main-img">
        </div>
        <h1 class="overlay-text">Grading System</h1>
    </div>
<!-----About section------------------------------------>
    <div class="hero-two" id="about">
        <div class="about-title">
            <h1 class="title">About Us</h1>
            <h2 class="sub-title">Our Introduction</h2>
        </div>
        <div class="content">
            <div class="img-side">
                <img src="about.png" class="sub" width="320px">
            </div>
            <div class="circle"></div>
            <div class="text-side">
               <p style="font-size:18px;line-height:1.8 "> Welcome to Grading System!

At Grading System, we provide a comprehensive and user-friendly online service for educators to manage their class grades. Our platform is designed to make grading fast and easy, so that teachers can focus on their students and their learning.

We offer a range of features to help teachers keep track of their students' grades. Our intuitive user interface makes it easy to enter grades and monitor student progress. We also provide helpful reports that provide teachers with valuable insights into their students' performance.

Our team is passionate about helping educators succeed, and we work hard to make sure our platform is always up-to-date and running smoothly. We believe that education should be accessible to all, and we are committed to providing an affordable and efficient solution for educators.

Thank you for choosing Grading System!</p>
                <div class="row">
                    
                </div>
                
            </div>
            
        </div>
        <i class='bx bxs-chevron-down-circle ' id="right"></i>
        <i class='bx bxs-chevron-up-circle ' id="left"></i>
    </div>
<!-----About section End------------------------------------>


<!---------Contact------>
<div class="hero-four contact" id="Contact">
    <div class=" cont">
        <h1 class="title">Contact Us</h1>
        <h2 class=" contt">For assistance</h2>
    </div>
    <div class="container-box">
        <div class="content">
            <img src="contacts.svg" width="450px"> 
          <div class="image-box">
          </div>
        <form id="myForm">
          <div class="topic">Send us a message</div>
          <p class="notif"></p>
          <div class="input-box">
            <input type="text" required id="name" name="names">
            <label>Enter your name</label>
          </div>
          <div class="input-box">
            <input type="text" required id="email" name="emails">
            <label>Enter your email</label>
          </div>
          <div class="message-box">
            <textarea placeholder="Text Message" id="message" name="message"></textarea>
          </div>
          <div class="input-box">
           <button class="btn" type="button" onclick="sendEmail()" value="Send An Email">Send Message</button>
          </div>
          <div class="social-platforms">
                <span class="social-span">-----or use other social platforms-----</span>
                <div class="platforms">
                <a href="https://www.facebook.com/Powerkenneth27"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/jimskit05/?fbclid=IwAR14px2Kp9GyQm_ps_Pv2EEi6PU4WIsULNg2vIoVRlKxL_XAZZlp4Dpds7A"><i class="fa fa-instagram"></i></a>
                </div>
          </div>
        </form>
      </div>
      </div>
    <style>
       
        .btn{
            width: 100%;
            padding-left: 120px;
        }

        .social-platforms{
            margin-top: 4rem;
            display: flex;
            margin-bottom: -5rem;
            
        }
        .social-span{
            font-size: 12px;
            margin-left: 60px;
            
        }
        .platforms{
            margin-top: 1.2rem;
            margin-left: -9rem;
        }
        .platforms .fa-instagram{
            margin-left: 0px;
            
        }
        .platforms a{
            text-decoration: none;
           
            
        }
        .fa-instagram{
            margin-top: 15px;
            margin-left: 10px;
            font-size: 15px;
            font-weight: bold;
            padding: 10px;
            border-radius: 50%;
            color: rgba(86, 67, 209, .7);
            cursor: pointer;
            background-color: rgba(86, 67, 209, .3);
            padding-left: 12px;
            padding-right: 12px;
            
        }
        .fa-facebook{
            margin-top: 15px;
            font-size: 15px;
            font-weight: bold;
            padding: 10px;
            border-radius: 50%;
            color: rgba(86, 67, 209, .7);
            cursor: pointer;
            background-color: rgba(86, 67, 209, .3);
            padding-left: 15px;
            padding-right: 15px;
            
        }
        .platforms i:hover{
            background:  rgba(86, 67, 209, 1);
            color: white;
            
          
        }
    </style>
</div>  

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail(){
            var name = $("#name"); 
            var email = $("#email"); 
            var message = $("#message");

            if(IsNotEmpty(name) && IsNotEmpty(email) && IsNotEmpty(message)){
                $.ajax({
                    url: 'mails.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        message: message.val()
                    },success: function(response){
                        $('#myForm')[0].reset();
                        $('.notif').text("Message sent Successfully!").css('background','rgba(0, 137, 82, .3)').css('padding','10px 20px').css('border-radius','3px').css('color','rgba(0, 137, 82, 1)').css('font-size','16px');

                    }
                });
            }
        }
        function IsNotEmpty(caller){
            if(caller.val() == ""){
                $('.notif').text("Please fill all this Field!").css('background','rgba(252, 86, 83, .3)').css('padding','10px 20px').css('border-radius','3px').css('color','rgba(252, 86, 83, 1)').css('font-size','16px');
                caller.css('border','1px solid red');
                return false;
            }
            else{
                caller.css('border', '')
                return true;
            }
        }
    </script>
<script src="./main.js"></script>
    

</body>
</html>