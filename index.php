<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="shortcut icon" href="imgs/favicon.ico">
    <title>Life Flow</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            
        }
        h2 {
            color: #e74c3c;
        }
        #bloodTypeSelect {
            padding: 10px;
            font-size: 16px;
        }
        #resultTable {
            margin-top: 20px;
            font-size: 18px;
        }
        th, td {
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #e74c3c;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
    /* Blood Compatibility Checker Styles */
        .mt-4 {
            margin-top: 1rem;
        }

        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .form-control {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #0056b3;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        /* Result Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            border: 1px solid #dee2e6;
            padding: 0.75rem;
        }

        th {
            background-color: #f8f9fa;
        }

        #checkCompatibilityButton {
        background-color: #e74c3c; /* Red color */
        color: white; /* Text color */
        padding: 10px 20px; /* Adjust padding as needed */
        border: none; /* Remove default button border */
        cursor: pointer;
        border-radius: 15px; /* Adjust the value to control the roundness of corners */
        width: 150px; /* Adjust the width as needed */
        height: 40px;
        
        }

        #checkCompatibilityButton:hover {
            background-color: #c0392b; /* Darker red color on hover */
        }
        
        .compatibleBloodType {
        color: #962d22; /* Darker text color for compatible blood types */
        }

    </style>

</head>

<body>

    <!-- Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light fixed-top py-0">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="donorlogin.php">As a Donor</a>
                            <a class="dropdown-item" href="recipientlogin.php">As a Recipiet</a>
                            <a class="dropdown-item" href="adminlogin.php">As Admin</a>
                        </div>
                    </li>
                    <li class="nav-item pr-2">
                        <a href="register.php" class="nav-link">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Intro -->

    <section id="intro-slide">
        <div class="container mt-2">
            <h1 class="display-4 section-heading slide-heading mb-2 text-center">LIFE FLOW</h1>
            <p class="slide-description text-center">Life Flow is intended to help people in the need of blood, find the required blood by connecting with donors online.</p>
            <div class="d-flex justify-content-center">
                <a href="register.php" class="mr-1 btn btn-lg btn-primary slide-btn">Register</a>
                <a href="loginlogin.php" class="ml-1 btn btn-lg btn-primary slide-btn">Login</a>
            </div>
        </div>
    </section>

    <section class="index-list">
        <!-- Services -->
        <section id="services" class="container">
            <div class="row justify-content-around">
                <div class="col-lg-1-5"></div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class=" col-md-4 my-2 my-md-0">
                            <div class="card">
                                <div class="mt-1 card-hover center">
                                    <img src="imgs/card1.png" class="wow animate__animated animate__slideInLeft card-img" alt="...">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mt-1 content-heading">NEED BLOOD</h4>
                                    <p class="card-text content">If you are in need of blood donor, then you have come to the right place. We can help you search for donors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 my-2 my-md-0">
                            <div class="card">
                                <div class="mt-1 card-hover center">
                                    <img src="imgs/card2.png" class="wow animate__animated animate__slideInUp card-img" alt="...">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mt-1 content-heading">FIND DONOR</h4>
                                    <p class="card-text content">You can find blood donors in your area and can also place blood requests to find the required donor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-5 mb-md-0 mt-2 mt-md-0">
                            <div class="card">
                                <div class="mt-1 card-hover center">
                                    <img src="imgs/card3.png" class="wow animate__animated animate__slideInRight card-img" alt="...">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mt-1 content-heading">SAVE LIFE</h4>
                                    <p class="card-text content">You can help save someone's life by logging in as a donor and accepting their blood requests.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5"></div>
            </div>
        </section>
        
        <br class="d-md-none">
            <h2 class="display-4 section-heading text-center mb-4 pt-5 pt-md-0">Blood Requests</h2>
            <div class="container ">
                <h5 class="content text-center slide-description mb-5 content">You can help the people in search of a donor by accepting their request. Register now to help save precious lives.</h5>
            </div>

        <!-- Pending Requests -->
        <?php
        // Replace these values with your actual database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lifeflow";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Your SQL query to retrieve data from the database
        $sql = "SELECT * FROM data";
        $result = $conn->query($sql);

        

        ?>
        <br><br>
        <!-- HTML code -->
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
                                    <h5 class="mt-1 card-title name"><?php echo $row['fname']; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <i class="fas fa-map-marker-alt mr-2 mt-1"></i>
                                        <span class="mt-1"><?php echo $row['province']; ?></span>
                                    </h6>
                                    <p class="mt-3 card-text info">
                                        <i class="fas fa-tint mr-2"></i>
                                        <span>3 Pints</span><br>
                                        <i class="far fa-envelope mr-2 mt-1"></i>
                                        <span class="mt-1"><?php echo $row['email']; ?></span>
                                    </p>
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


            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Blood Compatibility Checker</title>
                    <style>
                        table {
                            width: 100%;
                            border-collapse: collapse;
                        }
                
                        th, td {
                            border: 1px solid #ddd;
                            padding: 8px;
                            text-align: center;
                        }
                    </style>
                </head>
                <body>
                
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Blood Compatibility Checker</title>
                        <style>
                            table {
                                width: 100%;
                                border-collapse: collapse;
                            }
                    
                            th, td {
                                border: 1px solid #ddd;
                                padding: 8px;
                                text-align: center;
                            }
                        </style>
                    </head>
                    <body>
                    
                    <br>
                    
                    <section>
                        <h2>Blood Compatibility Checker</h2>
                        <label for="bloodRole">Select Your Role:</label>
                        <input type="radio" name="bloodRole" value="donor" id="donorRadio" checked>
                        <label for="donorRadio">Donor</label>
                        <input type="radio" name="bloodRole" value="receiver" id="receiverRadio">
                        <label for="receiverRadio">Receiver</label>
                        <br>
                        <label for="bloodTypeSelect">Select Your Blood Type:</label>
                        <select id="bloodTypeSelect">
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <br>
                        <br>
                        <button id="checkCompatibilityButton" onclick="checkCompatibility()">Check Compatibility</button>
                        <div id="resultTable"></div>
                    
                        <script>
                            function checkCompatibility() {
                                const selectedRole = document.querySelector('input[name="bloodRole"]:checked').value;
                                const selectedBloodType = document.getElementById("bloodTypeSelect").value;
                                const compatibilityMap = {
                                    "donor": {
                                        "A+": ["A+", "AB+"],
                                        "O+": ["O+", "A+", "B+", "AB+"],
                                        "B+": ["B+", "AB+"],
                                        "AB+": ["A+", "O+", "B+", "AB+", "A-", "O-", "B-", "AB-"],
                                        "A-": ["A+", "AB+", "A-", "AB-"],
                                        "O-": ["A+", "O+", "B+", "AB+", "A-", "O-", "B-", "AB-"],
                                        "B-": ["B+", "AB+", "B-", "AB-"],
                                        "AB-": ["A+", "O+", "B+", "AB+", "A-", "O-", "B-", "AB-"]
                                    },
                                    "receiver": {
                                        "A+": ["A+", "A-", "O+", "O-"],
                                        "O+": ["O+", "O-"],
                                        "B+": ["B+", "B-", "O+", "O-"],
                                        "AB+": ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"],
                                        "A-": ["A-", "O-"],
                                        "O-": ["O-"],
                                        "B-": ["B-", "O-"],
                                        "AB-": ["AB-", "A-", "B-", "O-"]
                                    }
                                };
                                const compatibleBloodTypes = compatibilityMap[selectedRole][selectedBloodType];
                                const resultTable = document.getElementById("resultTable");
                    
                                if (compatibleBloodTypes) {
                                    let tableHTML = `<center><table><tr><th class="compatibleBloodType">Compatible Blood Types</th></tr></center>`;
                                    for (const bloodType of compatibleBloodTypes) {
                                        tableHTML += `<tr><td style="width:10%" >${bloodType}</td></tr>`;
                                    }
                                    tableHTML += `</table>`;
                                    resultTable.innerHTML = tableHTML;
                                } else {
                                    resultTable.innerHTML = "Invalid blood type selected.";
                                }
                            }
                        </script>
                    </section>  
                    
                
    <section id="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="animate__animated animate__slideInLeft wow col-12 col-lg-6 vertical-center">
                    <h1 class="display-4 section-heading about-heading mb-2 left">ABOUT US</h1>
                    <p class="about-description left">Life Flow intends to help people in need of blood find blood donors. The recipients can search donors efficiently using area and blood type filters. Many people have successfully found donors using this platform. We are glad to
                        bring together and connect people for this cause.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="count-left-margin col-12 col-lg-4">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-lg-12 mb-4">
                            <div class="d-flex flex-row">
                                <span aria-hidden="true" class="wow animate__animated animate__zoomIn icon-calendar fs1 mr-3 mr-md-4 mt-3"></span>
                                <div class="d-flex flex-column">
                                    <h2 class="display-4 count"><span class="counter">0</span><span>+</span></h2>
                                    <hr class="count-line mb-2">
                                    <p class="counter-content">Years of Service</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4 col-lg-12 mb-4">
                            <div class="d-flex flex-row">
                                <span aria-hidden="true" class="wow animate__animated animate__zoomIn icon-users fs1 mr-3 mr-md-4 mt-3"></span>
                                <div class="d-flex flex-column">
                                    <h2 class="display-4 count"><span class="counter">4</span><span>+</span></h2>
                                    <hr class="count-line mb-2">
                                    <p class="counter-content">Registered Users</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-4 col-lg-12">
                            <div class="d-flex flex-row">
                                <span aria-hidden="true" class="wow animate__animated animate__zoomIn icon-trophy fs1 mr-3 mr-md-4 mt-3"></span>
                                <div class="d-flex flex-column">
                                    <h2 class="display-4 count"><span class="counter">00</span><span>+</span></h2>
                                    <hr class="count-line mb-2">
                                    <p class="counter-content">Successful Cases</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

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
    <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $("#mainNavbar ");
                $nav.toggleClass("scrolled ", $(this).scrollTop() > $nav.height());
            });
        });
    </script>
    <script>
        $('.counter').counterUp({
            delay: 10,
            time: 1000,
        });
    </script>
    <script src="js/wow.min.js " type="text/javascript "></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>