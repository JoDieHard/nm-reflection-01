<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("connection.php");

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
    global $enquirySuccess;

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
        // var_dump($date);

        if ( $nameErr || $emailErr || $telErr || $subjectErr || $msgErr ) {
            // echo $error;
        } else {
            //Do success stuff here...
            try {
        
                // $sql = "INSERT INTO enquiries ( 'full_name', 'email', 'telephone', 'message', 'subject', 'date_sent' ) VALUES ( ':name', ':email', ':tel', ':msg', ':subject', ':date' )";
                $sql = "INSERT INTO enquiries ( `full_name`, `email`, `telephone`, `message`, `subject`, `date_sent` ) VALUES(?, ?, ?, ?, ?, ?)";
                
                // $enquiry = $db->prepare($sql);
                // $enquiry->bindParam(':name', $name, PDO::PARAM_STR);
                // $enquiry->bindParam(':email', $email, PDO::PARAM_STR);
                // $enquiry->bindParam(':tel', $tel, PDO::PARAM_INT);
                // $enquiry->bindParam(':msg', $msg, PDO::PARAM_STR);
                // $enquiry->bindParam(':subject', $subject, PDO::PARAM_STR);
                // $enquiry->bindParam(':date', $date, PDO::PARAM_STR);
                // $enquiry->execute();
                // var_dump($enquiry);

                $db->prepare($sql)->execute([$name, $email, $tel, $msg, $subject, $date]);

                // echo "Your entry has been added to the database";
                $enquirySuccess = true;
                $error = "";

                $db = null;

            } catch ( Exception $e ) {
                echo "Bad Query: "; 
                echo $e->getMessage();
                $enquirySuccess = false;
            }
          }
    }

  