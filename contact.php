
<!DOCTYPE html>

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
                    <li><strong>Home</strong> / </li>
                    <li> Our Offices</li>
                </ul>
            </div>
            
            <div class="page-head">
                <h1>Our Offices</h1>
            </div>

            <div class="office-addresses">
                <div class="office">
                    <div class="image">
                        <img src="" alt="This is an image of Netmatters' LOCATION Office">
                    </div>
                    <div class="office-info">
                        <a><h2>Office Title</h2></a>
                        <ul>
                            <li>Address Line 1</li>
                            <li>Address Line 2</li>
                            <li>Address Line 3</li>
                            <li>Address Line 4</li>
                            <li>Postcode</li>
                        </ul>
                        <a class="number" href="01223 37 57 72">
                            <h3>01223 37 57 72</h3>
                        </a>
                        <a class="btn-contact" href="#">    
                            <p>View More</p>
                        </a>
                    </div>
                    <div class="map">

                    </div>
                </div>

            </div>

            <div class="enquiry-form">
                <div class="form">
                        <form action="">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" id="name">
                                </div>
    
                                <div class="form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" name="email" id="email">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="telephone">Your Telephone Number</label>
                                    <input type="tel" name="telephone" id="telephone">
                                </div>
    
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject">
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="message" id="message"> </textarea>
                            </div>

                            <div class="custom-checkbox">
                                <input type="checkbox" class="nl-check" id="nl-check"> 
                                <label for="nl-check">
                                    <span class="check-select"></span>
                                    <strong>Please tick this box if you wish to receive marketing information from us. 
                                        Please see our <a class="inline-link" href="https://www.netmatters.co.uk/privacy-policy">Privacy Policy</a> 
                                        for more information on how we use your data.</strong> 
                                </label>
                            <div>

                            <button type="submit" name="submit">Send Enquiry</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="form-info">
                    <p><strong>Email us on:</strong></p>
                    
                    <a href="mailto:sales@netmatters.com"><h3>sales@netmatters.com</h3></a>
                    
                    <p><strong>Business Hours</strong></p>
                    
                    <p><strong>Monday - Friday 07:00 - 18:00</strong> </p>
                    
                    <a href="#"><strong>Out of Hours IT Support</strong> <i class="fas fa-chevron-down"></i></a>
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