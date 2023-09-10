<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ContentVerse</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">ContentVerse</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

                    <?php
                    if (isset($_SESSION['usrId'])) {

                        echo '<li class="nav-item"><a class="nav-link" href="messages.php">Messages</a></li>';
                        echo ' <li class="nav-item"><a class="nav-link" href="addcontent.php">Add content</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="includes/logout.inc.php">Logout</a></li>';
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>';
                        echo ' <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>


    <!-- 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projects - Adventour</title>
    <meta name="description" content="We travel not to escape life, but for life to not escape us">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/pikaday.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Adventour</a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav">
            <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="tours.php">Tours</a></li>
                
                    
                    <
                        if(isset($_SESSION['usrId']))
                        {
                            echo '<li class="nav-item"><a class="nav-link" href="includes/logout.inc.php">Logout</a></li>';
                        }else{
                            echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="registration.php">Signup</a></li>';
                            }
                    ?>

                </ul>
            </div>
        </div>
    </nav> -->