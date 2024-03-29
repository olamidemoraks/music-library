<!DOCTYPE html>
<html lang="en">
<?php
session_start()
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence | Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">
</head>

<body class="vh-100 overflow-x-auto" id="policy-page">

    <?php require "navbar.php" ?>

    <!-- About page content -->
    <div class="container mt-4 about-us-text">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-white" id="about-content">
                <h2 class="mb-4">Contact Us</h2>
                <p>
                    We have <a class="rhythm-color">support articles</a> tackling common questions and concerns. We also have a dedicated support team available to help with any other questions you may have. Email, call or submit a support ticket to get your questions answered.
                </p>



            </div>
        </div>
    </div>



    <!--   Logo Img       -->
    <div class="about-us-img col-md-4 align-items-center mx-auto ">
        <img src="assets/logo.png" />
    </div>

    <!-- Contact Information -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-white mx-auto align-content-center" id="about-us-contact-info">

                <h2 class="mb-4">Contact Information</h2>
                <p>Email: <a href="mailto:info@cadence.com" class="text-decoration-none" id="contact-info-colors">info@cadence.com</a></p>
                <p>Phone: <a id="contact-info-colors">+44 5362 561899</a> </p>
            </div>
        </div>
    </div>

    <?php require "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>