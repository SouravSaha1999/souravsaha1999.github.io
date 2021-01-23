<?php 
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $subj = $_REQUEST['subject'];
        $msg = $_REQUEST['message'];

        // $to = 'ssourav1120@gmail.com';
        // $sub = 'Portfolio Submission';


        if(empty($fname) || empty($lname) || empty($email) || empty($subj) || empty($message)){
            echo "Please Fill all the fields";
        }
        else{
            mail("ssourav1120@gmail.com", $subj, $message, "From : $fname <$email>");
            echo "<script type='text/javascript'>alert('Your Message have been sent successfully!! I will contact you shortly! Thank You');window.history.log(-1);</script>";
        }
?>