<?php


// echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $to = "xjodiehardx@gmail.com";
    $message_sent = false; // $message_sent default value      
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //CHECKS THAT THE FORM HAS BEEN SUBMITTED

        // NAME VALIDATION
        if ( empty($_POST["enquiryName"]) OR $_POST["enquiryMessage"] == " " ) {
            // echo "Please enter your Name";
            $nameErr = true;
        } else {
            $name = filter_input( INPUT_POST, 'enquiryName', FILTER_SANITIZE_STRING );
            $nameErr = false;

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                // echo "Name only allows letters and whitespace";
                $nameErr = true;
            }
        }

        // EMAIL VALIDATION
        if ( empty($_POST["enquiryEmail"]) OR $_POST["enquiryMessage"] == " " ) {
            // echo "Please enter your Email";
            $emailErr = true;
        } else {
            $email = filter_input( INPUT_POST, 'enquiryEmail', FILTER_SANITIZE_EMAIL );
            $emailErr = false;
            //Check Email is Valid 
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // echo "Please enter a valid Email address";
                $emailErr = true;
            }
        }
        // TELEPHONE VALIDATION
        if ( empty($_POST["enquiryTelephone"]) OR $_POST["enquiryMessage"] == " " ) {
            // echo "Please enter your Telephone";
            $telErr = true;
        } else {
            $tel = filter_input( INPUT_POST, 'enquiryTelephone', FILTER_SANITIZE_NUMBER_INT );
            $telErr = false;
            if (!isnumeric($tel)) {
                // echo "Number must be numbers only";
                $emailErr = true;
            }
        }

        // SUBJECT VALIDATION
        if ( empty( $_POST["enquirySubject"] ) OR $_POST["enquiryMessage"] == " " ) {
            // echo "Please enter a Subject";
            $subjectErr = true;
        } else {
            $subject = filter_input( INPUT_POST, 'enquirySubject', FILTER_SANITIZE_STRING );
            $subjectErr = false;
        }

        // MESSAGE VALIDATION
        if ( empty($_POST["enquiryMessage"]) OR $_POST["enquiryMessage"] == " " ) {
            // echo "Please enter a Message";
            $msgErr = true;
        } else {
            $msg = filter_input( INPUT_POST, 'enquiryMessage', FILTER_SANITIZE_STRING );
            $msgErr = false;
        }


        // This is the Email Output

        $body = "";
        $body .= "From: " . $name . "\r\n";
        $body .= "Email: " . $email . "\r\n";
        $body .= "Telephone: " . $tel . "\r\n";
        $body .= "Message: " . $msg . "\r\n";

        // Send Email
        if ( !$nameErr OR !$emailErr OR !$telErr OR !$subjectErr OR !$msgErr ) {
            mail($to, $subject, htmlspecialchars($body) );
            $message_sent = true;
        } else {
            // echo "There was an issue with submit";
            $message_sent = false;
        }
    }