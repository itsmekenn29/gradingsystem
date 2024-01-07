<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        require_once "../PHPMailer/src/PHPMailer.php";
        require_once "../PHPMailer/src/SMTP.php";
        require_once "../PHPMailer/src/Exception.php";

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = 'jamescanedo1@gmail.com';
        $mail->Password = 'kiucabhbzfurnrwg';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl'; 

        $mail->isHTML(true); 
        $mail->setFrom('jamescanedo1@gmail.com', 'Grading System');
        $mail->addAddress("jamescanedo1@gmail.com");
        $mail->Subject = ("$email ($message)");
        $mail->Body = $message;

        if($mail->send()){
            $status ="Success";
            $response= "Email is Sent";
        }
        else{
            $status = "Failed";
            $response = "Something is wrong: <br>" . $mail->ErrorInfo;
        }
        exit(json_encode(array("status"=> $status, "response" => $response)));
    }
?>