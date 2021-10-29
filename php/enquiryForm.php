<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    // FUNCTIONS 

    // SANITISE INPUT 
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }





    // FORM INPUT HANDLER 

    $error = "Error! ";

    // Reset error values
    // $nameErr = false;
    // $emailErr = false;
    // $telErr = false;
    // $subjectErr = false;
    // $msgErr = false;

    $name = $email = $tel = $subject = $msg = $date = "";
    $nameErr = $emailErr = $telErr = $subjectErr = $msgErr = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // NAME VALIDATION / SANITISATION 
        if ( empty( $_POST["enquiryName"] ) ) {
            $error .= "Please enter your name";
            $nameErr = true;
        } else {
            $name = test_input( $_POST["enquiryName"] );
            $nameErr = false;

            if ( !preg_match("/^[a-zA-Z-' ]*$/",$name) ) {
                $error .= "Name only allows for letters and spaces";
                $nameErr = true;
            }
        }

        // EMAIL VALIDATION / SANITISATION
        if ( empty( $_POST["enquiryEmail"] ) ) {
            $error .= "Please enter your email";
            $emailErr = true;
        } else {
            $email = test_input( $_POST["enquiryEmail"] );
            $emailErr = false;

            if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                $error .= "Please enter a valid Email";
                $emailErr = true;
            } 
        }

        // TELEPHONE VALIDATION / SANITISATION 
        if ( empty( $_POST["enquiryTelephone"] ) ) {
            $error .= "Please enter your Telephone";
            $telErr = true;
        } else {
            $tel = test_input( $_POST["enquiryTelephone"] );
            $telErr = false;
            if ( !preg_match('/^[0-9 +-]*$/', $tel) ) {
                $error .= "Telephone is Invalid.";
                $telErr = true;
            }
        }

        // SUBJECT VALIDATION / SANITISATION 
        if ( empty( $_POST["enquirySubject"] ) ) {
            $error .= "Please enter a Subject";
            $subjectErr = true;
        } else {
            $subject = test_input( $_POST["enquirySubject"] );
            $subjectErr = false;
        }

        // MESSAGE VALIDATION / SANITISATION 
        if ( empty( $_POST["enquiryMessage"] ) ) {
            $error .= "Please enter a Message";
            $msgErr = true;
        } else {
            $msg = test_input( $_POST["enquiryMessage"] );
            $msgErr = false;
            if ( strlen($msg) < 10 ) {
                $error .= "Please enter a longer Message";
                $msgErr = true;
            }
        }

        $date = date("F j, Y, g:i a");

        if ( $nameErr || $emailErr || $telErr || $subjectErr || $msgErr ) {
            echo $error;
        } else {
            //Do success stuff here...
            try {
                $db = new PDO("mysql:host=127.0.0.1;port=8889;dbname=netmatters;charset=utf8mb4", "root", "root");
                $sql = "INSERT INTO enquiries ( full_name, email, telephone, message, subject, date_sent ) VALUES( ':name', ':email', ':tel', ':msg', ':subject', ':date' )";
                
                $enquiry = $db->prepare($sql);
                $enquiry->bindParam(':name', $name, PDO::PARAM_STR);
                $enquiry->bindParam(':email', $email, PDO::PARAM_STR);
                $enquiry->bindParam(':tel', $tel, PDO::PARAM_INT);
                $enquiry->bindParam(':msg', $msg, PDO::PARAM_STR);
                $enquiry->bindParam(':subject', $subject, PDO::PARAM_STR);
                $enquiry->bindParam(':date', $date, PDO::PARAM_STR);
                $enquiry->execute();

                echo "Your entry has been added to the database";
                $success = true;
                $error = "";

            } catch ( Exception $e ) {
                echo "Bad Query: " . $e->getMessage();
            }
          }
    }

    // var_dump($date);









    // FORM HANDLER  

    // $to = "xjodiehardx@gmail.com";
    // $message_sent = false; // $message_sent default value      
     
    // if ($_SERVER["REQUEST_METHOD"] == "POST") { //CHECKS THAT THE FORM HAS BEEN SUBMITTED

    //     // NAME VALIDATION
    //     if ( empty($_POST["enquiryName"]) OR $_POST["enquiryMessage"] == " " ) {
    //         // echo "Please enter your Name";
    //         $nameErr = true;
    //     } else {
    //         $name = filter_input( INPUT_POST, 'enquiryName', FILTER_SANITIZE_STRING );
    //         $nameErr = false;

    //         if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    //             // echo "Name only allows letters and whitespace";
    //             $nameErr = true;
    //         }
    //     }

    //     // EMAIL VALIDATION
    //     if ( empty($_POST["enquiryEmail"]) OR $_POST["enquiryEmail"] == " " ) {
    //         // echo "Please enter your Email";
    //         $emailErr = true;
    //     } else {
    //         $email = filter_input( INPUT_POST, 'enquiryEmail', FILTER_SANITIZE_EMAIL );
    //         $emailErr = false;
    //         //Check Email is Valid 
    //         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //             // echo "Please enter a valid Email address";
    //             $emailErr = true;
    //         }
    //     }
    //     // TELEPHONE VALIDATION
    //     if ( empty($_POST["enquiryTelephone"]) OR $_POST["enquiryMessage"] == " " ) {
    //         // echo "Please enter your Telephone";
    //         $telErr = true;
    //     } else {
    //         $tel = filter_input( INPUT_POST, 'enquiryTelephone', FILTER_SANITIZE_NUMBER_INT );
    //         $telErr = false;
    //         if (!isnumeric($tel)) {
    //             // echo "Number must be numbers only";
    //             $emailErr = true;
    //         }
    //     }

    //     // SUBJECT VALIDATION
    //     if ( empty( $_POST["enquirySubject"] ) OR $_POST["enquiryMessage"] == " " ) {
    //         // echo "Please enter a Subject";
    //         $subjectErr = true;
    //     } else {
    //         $subject = filter_input( INPUT_POST, 'enquirySubject', FILTER_SANITIZE_STRING );
    //         $subjectErr = false;
    //     }

    //     // MESSAGE VALIDATION
    //     if ( empty($_POST["enquiryMessage"]) OR $_POST["enquiryMessage"] == " " ) {
    //         // echo "Please enter a Message";
    //         $msgErr = true;
    //     } else {
    //         $msg = filter_input( INPUT_POST, 'enquiryMessage', FILTER_SANITIZE_STRING );
    //         $msgErr = false;
    //     }


        // This is the Email Output

        // $body = "";
        // $body .= "From: " . $name . "\r\n";
        // $body .= "Email: " . $email . "\r\n";
        // $body .= "Telephone: " . $tel . "\r\n";
        // $body .= "Message: " . $msg . "\r\n";

        // Send Email
        // if ( !$nameErr OR !$emailErr OR !$telErr OR !$subjectErr OR !$msgErr ) {
        //     mail($to, $subject, htmlspecialchars($body) );
        //     $message_sent = true;
        // } else {
        //     // echo "There was an issue with submit";
        //     $message_sent = false;
        // }
    // }