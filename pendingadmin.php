<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
// Set the content type to HTML and disable caching
header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add a meta tag to disable caching -->
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Font Nunito -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="imgs/favicon.ico">
    <title>Pending Requests - Bleed To Save</title>
    <style>
    #ses {
        font-weight: bold;
        color: black;
    }
</style>
</head>

<body>

    <!-- Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-0">
        <div class="container">
            <a href="index.php" class="img-fluid navbar-brand"><img src="imgs/nav-logo.png" class="img-hover"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item pr-2">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item pr-2">
                        <a href="index.php" class="nav-link">Logout</a>
                    </li>
                    <li class="nav-item pr-2">
                        <p id="ses" class="nav-link">Welcome ADMIN</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Blood Requests -->
    <h1 class="display-4 section-heading form-gap mb-4 text-center">Pending Requests</h1>
    <section id="list" class="gap-bottom">
        <div class="container ">
            <p class="text-center slide-description mb-5 content grey">You can help the people in search of a donor by accepting their request. The requester will be notified when their request has been accepted.</p>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 my-2 content">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row ">
                                <div class="col-4 d-flex flex-column justify-content-center align-items-center ">
                                    <div class="blood-type text-center d-flex flex-column justify-content-center ">
                                        <p class="vertical-center">AB+</p>
                                    </div>
                                </div>
                                <div class="col-8 ">
                                    <h5 class="mt-1 card-title name">Parthiv
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted "><i class="fas fa-map-marker-alt mr-2 mt-1"></i><span class="mt-1">Kochi</span>
                                    </h6>
                                    <p class="mt-3 card-text info"><i class="fas fa-tint mr-2"></i><span>3 Pints</span><br><i class="far fa-envelope mr-2 mt-1"></i><span class="mt-1">Parthiv@gmail.com</span>
                                    </p>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button class="mt-3 slant-edge" onclick="redirectToRequestPage()">
                                        <p>Accept Request</p>
                                    </button>
                                </div>
                                <div class="col-4"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-4 my-2 content">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row ">
                                <div class="col-4 d-flex flex-column justify-content-center align-items-center ">
                                    <div class="blood-type text-center d-flex flex-column justify-content-center ">
                                        <p class="vertical-center">AB-</p>
                                    </div>
                                </div>
                                <div class="col-8 ">
                                    <h5 class="mt-1 card-title name">Milind
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted "><i class="fas fa-map-marker-alt mr-2 mt-1"></i><span class="mt-1">Kozhikode</span>
                                    </h6>
                                    <p class="mt-3 card-text info"><i class="fas fa-tint mr-2"></i><span>3 Pints</span><br><i class="far fa-envelope mr-2 mt-1"></i><span class="mt-1">Milind@gmail.com</span>
                                    </p>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button class="mt-3 slant-edge" onclick="redirectToRequestPage()">
                                        <p>Accept Request</p>
                                    </button>
                                </div>
                                <div class="col-4"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 my-2 content">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row ">
                                <div class="col-4 d-flex flex-column justify-content-center align-items-center ">
                                    <div class="blood-type text-center d-flex flex-column justify-content-center ">
                                        <p class="vertical-center">O+</p>
                                    </div>
                                </div>
                                <div class="col-8 ">
                                    <h5 class="mt-1 card-title name">Krishna
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted "><i class="fas fa-map-marker-alt mr-2 mt-1"></i><span class="mt-1">Kochi</span>
                                    </h6>
                                    <p class="mt-3 card-text info"><i class="fas fa-tint mr-2"></i><span>3 Pints</span><br><i class="far fa-envelope mr-2 mt-1"></i><span class="mt-1">Krishna@gmail.com</span>
                                    </p>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button class="mt-3 slant-edge" onclick="redirectToRequestPage()">
                                        <p>Accept Request</p>
                                    </button>
                                </div>
                                <div class="col-4"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 my-2 content">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row ">
                                <div class="col-4 d-flex flex-column justify-content-center align-items-center ">
                                    <div class="blood-type text-center d-flex flex-column justify-content-center ">
                                        <p class="vertical-center">B+</p>
                                    </div>
                                </div>
                                <div class="col-8 ">
                                    <h5 class="mt-1 card-title name">Rony
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted "><i class="fas fa-map-marker-alt mr-2 mt-1"></i><span class="mt-1">Kannur</span>
                                    </h6>
                                    <p class="mt-3 card-text info"><i class="fas fa-tint mr-2"></i><span>3 pints</span><br><i class="far fa-envelope mr-2 mt-1"></i><span class="mt-1">Rony@gmail.com</span>
                                    </p>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button class="mt-3 slant-edge" onclick="redirectToRequestPage()">
                                        <p>Accept Request</p>
                                    </button>
                                </div>
                                <div class="col-4"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    function redirectToRequestPage() {
        window.location.href = 'accept.php';
    }
</script>

    <!-- Contact Us -->
    <footer id="contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 mb-md-0 mb-5">
                    <img src="imgs/logo.png" class="footer-logo img-fluid img-hover">
                </div>
                <div class="col-12 col-md-2 col-lg-3 mb-md-0 mb-5 ">
                    <ul>
                        <li>
                            <p><a href="index.php">Home</a></p>
                        </li>
                        <li>
                            <p><a href="login.php">Login</a></p>
                        </li>
                        <li>
                            <p><a href="register.php">Register</a></p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <ul>
                        <li>
                            <p><i class="fas fa-globe mr-2 "></i><a href="# ">www.LifeFlow.com</a></p>
                        </li>
                        <li>
                            <p><i class="fab fa-instagram mr-2 "></i><a href="# ">www.instagram.com/LifeFlow</a></p>
                        </li>
                        <li>
                            <p><i class="fab fa-facebook mr-2 "></i><a href="# ">www.facebook.com/LifeFlow</a></p>
                        </li>
                        <li>
                            <p><i class="fab fa-twitter mr-2 "></i><a href="# ">www.twitter.com/LifeFlow</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>
    <script src="js/wow.min.js " type="text/javascript "></script>
    <script>
        new WOW().init();
    </script>
</body>
<?php



?>
</html>