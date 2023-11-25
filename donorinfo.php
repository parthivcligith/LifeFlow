<?php ob_start(); ?>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
    <title>Donor Info - Bleed To Save</title>
</head>

<body>
    <!-- Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-0">
        <div class="container">
            <a href="index.php" class="img-fluid navbar-brand"><img src="imgs/nav-logo.png" class="img-hover"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item pr-2">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="donorlogin.php">As Donor</a>
                            <a class="dropdown-item" href="recipientlogin.php">As Recipiet</a>
                        </div>
                    </li>
                    <li class="nav-item pr-2">
                        <a href="register.php" class="nav-link">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Donor Info -->
    <h1 class="display-4 section-heading form-gap mb-5 text-center">Donor Information</h1>
    <section id="login-form" class="container">
        <div class="col-lg-5 col-md-7 mb-5 login-form card">
            <div class="card-body my-4">
                <div class="container">
                    <form method="post" action="donorinfo.php">
                        <div class="form-group">
                            <label for="blood-type">Blood Type</label>
                            <select name="blood-type" id="blood-type" class="form-control" required>
                                <option value="" selected disabled>Blood Type</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label><br>
                            <label for="male" class="radio-input mr-3">Male
                                <input type="radio" checked="checked" id="male" name="gender" value="male" required>
                                <span class="checkmark"></span>
                            </label>
                            <label for="female" class="radio-input  mr-3">Female
                                <input type="radio" id="female" name="gender" value="female">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Phone Number</label>
                            <input type="tel" class="form-control" name="phone-number"
                                aria-describedby="phoneHelp" placeholder="Phone Number" required>
                            <small id="phoneHelp" class="mt-2 form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <select name="city" class="form-control mb-3" required>
                                <option value="" selected disabled>City</option>
                                <option value="Eranakulam">Eranakulam</option>
                            </select>

                            <select name="province" class="form-control" required>
                                <option value="" selected disabled>Province</option>
                                <option value="Kochi">Kochi</option>
                            </select>
                        </div>
                        <button type="submit" class="mt-3 btn btn-lg btn-primary slide-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>


    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Connect to your MySQL database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lifeflow";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get values from the form
        $bloodType = $_POST["blood-type"];
        $gender = $_POST["gender"];
        $phoneNumber = $_POST["phone-number"];
        $city = $_POST["city"];
        $province = $_POST["province"];

        // Insert data into the table
        $sql = "INSERT INTO donorinfo (blood_type, gender, phone_number, city, province) VALUES ('$bloodType', '$gender', '$phoneNumber', '$city', '$province')";

        if ($conn->query($sql) === TRUE) {
            echo "Record added successfully";
            header("Location: donorlogin.php");
                    exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
        ob_end_flush();
    }
    ?>



</body>

</html>