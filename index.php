
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

            <!-- BANNER -->
            <?php include 'inc/banner.php'; ?>

            <!-- SERVICES LIST SECTION -->
            <?php include 'inc/services.php' ?>

            <!-- ABOUT US SECTION -->
            <?php include 'inc/aboutUs.php'; ?>

            <!-- ARTICLES SECTION -->
            <?php include 'inc/articles.php'; ?>

            <!-- CLIENTS SECTION -->
            <?php include 'inc/clients.php'; ?>

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
