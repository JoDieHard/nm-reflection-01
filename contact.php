
<!DOCTYPE html>

<?php
    include 'php/enquiryForm.php';
?>

<html lang="en">

    <!-- HEAD -->
    <?php include 'inc/head.php'; ?>

    <body class="homepage">

        <!-- Cookies App -->
        <?php include 'inc/cookies.php'; ?>

        <!-- Website Main Wrapper -->
        <div class="website">

            <!-- HEADER -->
            <?php include 'inc/header.php'; ?>

            <!-- MAIN NAVIGATION -->
            <?php include 'inc/mainNav.php'; ?>

 
            <!-- -------------------------------------------------- -->
            <!-- THIS IS WHERE THE NEW CONTACT CONTENT NEEDS TO GO  -->
            <!-- -------------------------------------------------- -->

            <div class="breadcrumbs"> 
                <ul>
                    <li><strong>Home &nbsp;</strong> / </li>
                    <li>&nbsp;Our Offices</li>
                </ul>
            </div>
            
            <div class="page-head">
                <h1>Our Offices</h1>
            </div>

            <div class="office-addresses">
              <div class="container">
                    <!-- OFFICE 1 -->
                    <div class="office">
                        <div class="content">
                            <div class="image">
                                <img src="assets/locations/cambridge.jpg" alt="This is an image of Netmatters' LOCATION Office">
                            </div>
                            <div class="office-info">
                                <a href="#"><h2>Cambridge Office</h2></a>
                                <ul>
                                    <li>Unit 1.28,</li>
                                    <li>St John's Innovation Centre,</li>
                                    <li>Cowley Road, Milton,</li>
                                    <li>Cambridge,</li>
                                    <li>CB4 0WS</li>
                                </ul>
                                <a class="number" href="01223375772">
                                    <h3>01223 37 57 72</h3>
                                </a>
                                <a class="btn-view-more" href="#">    
                                    <p>View More</p>
                                </a>
                            </div>
                        </div>
                        <div class="map" id="map1">
    
                        </div>
                    </div>
    
                    <!-- OFFICE 2 -->
                    <div class="office">
                        <div class="content">
                            <div class="image">
                                <img src="assets/locations/wymondham.jpg" alt="This is an image of Netmatters' LOCATION Office">
                            </div>
                            <div class="office-info">
                                <a href="#"><h2>Wymondham Office</h2></a>
                                <ul>
                                    <li>Unit 15,</li>
                                    <li>Penfold Drive,</li>
                                    <li>Gateway 11 Business Park,</li>
                                    <li>Wymondham, Norfolk,</li>
                                    <li>NR18 0WZ</li>
                                </ul>
                                <a class="number" href="01603704020">
                                    <h3>01603 70 40 20</h3>
                                </a>
                                <a class="btn-view-more" href="#">    
                                    <p>View More</p>
                                </a>
                            </div>
                        </div>
                        <div class="map" id="map2">
    
                        </div>
                    </div>
    
                    <!-- OFFICE 3 -->
                    <div class="office">
                        <div class="content">
                            <div class="image">
                                <img src="assets/locations/yarmouth-2.jpg" alt="This is an image of Netmatters' LOCATION Office">
                            </div>
                            <div class="office-info">
                                <a href="#"><h2>Great Yarmouth Office</h2></a>
                                <ul>
                                    <li>Suite F23,</li>
                                    <li>Beacon Innovation Centre,</li>
                                    <li>Beacon Park, Gorleston,</li>
                                    <li>Great Yarmouth, Norfolk,</li>
                                    <li>NR31 7RA</li>
                                </ul>
                                <a class="number" href="01493603204">
                                    <h3>01493 60 32 04</h3>
                                </a>
                                <a class="btn-view-more" href="#">    
                                    <p>View More</p>
                                </a>
                            </div>
                        </div>
                        <div class="map" id="map3">
    
                        </div>
                    </div>
              </div>

            </div>


            <div class="enquiry-form">
               <div class="container">
                    <div class="form">
                            <form action="contact.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="enquiryName" id="name">
                                    </div>
        
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" name="enquiryEmail" id="email">
                                    </div>
                                </div>
    
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="telephone">Your Telephone Number</label>
                                        <input type="tel" name="enquiryTelephone" id="telephone">
                                    </div>
        
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" name="enquirySubject" id="subject">
                                    </div>
                                </div>
    
                                
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="enquiryMessage" id="message"> </textarea>
                                </div>
    
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="nm-check" id="en-check" name="enquiryCheckBox"> 
                                    <label for="en-check" class="check-label">
                                        <span class="check-select"></span>
                                        <strong>Please tick this box if you wish to receive marketing information from us. 
                                            Please see our <a class="inline-link" href="https://www.netmatters.co.uk/privacy-policy">Privacy Policy</a> 
                                            for more information on how we use your data.</strong> 
                                    </label>
                                <div>
    
                                <button type="submit">Send Enquiry</button>
    

                            </div>
                        </form>
                    </div>

                </div>
                <div class="form-info">
                        <p><strong>Email us on:</strong></p>
                        
                        <a href="mailto:sales@netmatters.com"><h3>sales@netmatters.com</h3></a>
                        
                        <p><strong>Business Hours</strong></p>
                        
                        <p><strong>Monday - Friday 07:00 - 18:00</strong> </p>
                        
                        <a class="dropdown" href="#"><strong>Out of Hours IT Support</strong> <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-contents">
                            <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                            <ul>
                                <li><strong>Monday - Friday 18:00 - 22:00 Saturday</strong></li>
                                <li><strong>08:00 - 16:00</strong></li>
                                <li><strong>Sunday 10:00 - 18:00</strong></li>
                            </ul>
                            <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. </p>
                        </div>
                    </div>
               </div>
            </div>


            <!-- NEWSLETTER SIGN-UP -->
            <?php include 'inc/newsletter.php'; ?>

            <!-- FOOTER / ACCREDITATIONS / AWARDS -->
            <?php
                include 'inc/footer.php';
                include 'inc/awards.php';
            ?>


        </div>   <!-- This is the END OF the MAIN WRAPPER -->

        <!-- SIDE MENU -->
        <?php include 'inc/sideMenu.php';  ?>

        <!-- SCRIPTS SECTION -->
        <?php include 'inc/scripts.php';  ?>


    </body>
</html>