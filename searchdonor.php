<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <title>Search Donor - Life Flow</title>
    
    <style>
        #ses{
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
                        <a href="searchdonor.php" class="nav-link">Search Donor</a>
                    </li>
                    <li class="nav-item pr-2">
                        <a href="myrequests.php" class="nav-link">My Requests</a>
                    </li>

            <li class="nav-item pr-2">
                <a href="index.php" class="nav-link">Logout</a>
            </li>
            <li class="nav-item pr-2">
                        <p id="ses" class="nav-link">Welcome ninu</p>
                    </li>
        </ul>
    </div>
</nav>
    <!-- Navbar -->

    <!-- Search Donor -->
    <h1 class="display-4 section-heading form-gap mb-5 text-center">Search Donor</h1>
    <section id="search-card">
        <div class="card container">
            <div class="card-body">
            <form class="container" method="GET" action="searchdonor.php">
                    <div class="row">
                        <div class="col-12 col-lg-3 form-group">
                            <label for="city">Choose City</label>
                            <select name="city" class="form-control mb-3">
                                <option value="" selected disabled>City</option>
                                <option value="Eranakulam">Eranakulam</option>
                                <option value="Eranakulam">Koyzikode</option>
                                <option value="Eranakulam">Trivandrum</option>
                            </select>
                        </div>


                        <div class="col-12 col-lg-7 form-group">
                            <label for="blood-type">Blood Type</label><br>
                            <label for="O+" class="radio-input mr-3">O+
                                <input type="radio" id="O+" name="blood-type" value="O+">
                                <span class="checkmark"></span>
                            </label>
                            <label for="O-" class="radio-input  mr-3">O-
                                <input type="radio" id="O-" name="blood-type" value="O-">
                                <span class="checkmark"></span>
                            </label>
                            <label for="A+" class="radio-input mr-3">A+
                                <input type="radio" id="A+" name="blood-type" value="A+">
                                <span class="checkmark"></span>
                            </label>
                            <label for="A-" class="radio-input mr-3">A-
                                <input type="radio" id="A-" name="blood-type" value="A-">
                                <span class="checkmark"></span>
                            </label>
                            <label for="B+" class="radio-input  mr-3">B+
                                <input type="radio" id="B+" name="blood-type" value="B+">
                                <span class="checkmark"></span>
                            </label>
                            <label for="B-" class="radio-input mr-3">B-
                                <input type="radio" id="B-" name="blood-type" value="B-">
                                <span class="checkmark"></span>
                            </label>
                            <label for="AB+" class="radio-input mr-3">AB+
                                <input type="radio" id="AB+" name="blood-type" value="AB+">
                                <span class="checkmark"></span>
                            </label>
                            <label for="AB-" class="radio-input  mr-3">AB-
                                <input type="radio" id="AB-" name="blood-type" value="AB-">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-2">
                            <button type="submit" name="search" class="mb-4 mt-1 mt-lg-3 btn btn-lg btn-primary slide-btn">Search</button>
                        </div>
                    </div>
                    <p class="d-inline">Haven't found donor? </p><span class="a-underline"><a href="bloodRequestForm.html">Place Blood Request</a></span>
                </form>
            </div>
        </div>
    </section>

    <!-- Donors List -->
    <br><br><br><br>

    <?php
    // Assuming you have a database connection established, replace the database credentials with your own
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lifeflow";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);


    if (isset($_GET['search'])) {
        $city = $_GET['city'];
        $bloodType = $_GET['blood-type'];
    
        // Build the SQL query based on the user's input
        $sql = "SELECT * FROM data WHERE city = '$city' and blood_type = '$bloodType'";
        $result = $conn->query($sql);
    } else {
        // Default query to fetch all records
        $sql = "SELECT * FROM data where dorr='donor'";
        $result = $conn->query($sql);
    }
    
    
    $conn->close();
    
    
    ?>


<section id="list" class="index-requests pb-5">
    <div class="container">
        <h2 class="display-4 section-heading text-center mb-4 pt-5 pt-md-0"></h2>
        <h5 class="content text-center slide-description mb-5 content"></h5>
        <div class="row">
            <?php
            // Loop through the database results and display them
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="col-12 col-md-6 col-lg-4 my-2 content">
                    <div class="card">
                        <div class="card-body pb-4">
                            <div class="row">
                                <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                                    <div class="blood-type text-center d-flex flex-column justify-content-center">
                                        <p class="vertical-center"><?php echo $row['blood_type']; ?></p>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <h5 class="mt-1 card-title name"><?php echo $row['fname']; ?><?php
        $_SESSION['name']=$row['fname'];
            ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <i class="fas fa-map-marker-alt mr-2 mt-1"></i>
                                        <span class="mt-1"><?php echo $row['province']; ?></span>
                                    </h6>
                                    <p class="mt-3 card-text info">
                                        <i class="fas fa-tint mr-2"></i>
                                        <span>3 Pints</span><br>
                                        <i class="far fa-envelope mr-2 mt-1"></i>
                                        <span class="mt-1"><?php echo $row['email']; ?></span>
                                        <br>phone : <span class="mt-1"><?php echo $row['phone_number']; ?></span>
                                    </p>
                                    <div class="col-8">
                                    <button class="mt-3 slant-edge" onclick="redirectToRequestPage()">
                                        <p>Request Blood</p>
                                    </button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>  

<script>
    function redirectToRequestPage() {
        window.location.href = 'req.php';
    }
</script>



    <!-- Contact Us -->
    <footer id="contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5 center vertical-center">
                    <img src="imgs/logo.png" class="footer-logo img-fluid img-hover">
                </div>
                <div class="col-4 col-sm-2 center">
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
                <div class="col-8 col-sm-5 center">
                    <ul>
                        <li>
                            <p><i class="fab fa-instagram mr-2 "></i><a href="# ">LifeFlow</a></p>
                        </li>
                        <li>
                            <p><i class="fab fa-facebook mr-2 "></i><a href="# ">LifeFlow</a></p>
                        </li>
                        <li>
                            <p><i class="fab fa-twitter mr-2 "></i><a href="# ">LifeFlow</a></p>
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

</html>