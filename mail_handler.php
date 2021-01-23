<?php 
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];

        // $to = 'ssourav1120@gmail.com';
        // $sub = 'Portfolio Submission';


        if(empty($fname) || empty($lname) || empty($email) || empty($subject) || empty($message)){
            echo "Please Fill all the fields";
        }
        else{
            mail("ssourav1120@gmail.com", "Portfolio Submission", $message, "From : $fname <$email>");
            echo "<script type='text/javascript'>alert('Your Message have been sent successfully!! I will contact you shortly! Thank You');
            window.history.log(-1);
            </script>";
        }
?>

<!-- 
        // if(mail($to, $sub, $Msg, $header)){
        //     echo "<h1>Your Message have been sent successfully!! Thank You"." ".$fname." ".$lname." , I will contact you shortly!</h1>";
        // }
        // else{
        //     echo "Something Went Wrong!!! PLEASE RETRY... ";
        // } -->
