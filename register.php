<?php ob_start(); ?>
<?php
// Set the content type to HTML and disable caching
header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
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
    <title>Register - LifeFlow</title>
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
                            <a class="dropdown-item" href="donorlogin.html">As Donor</a>
                            <a class="dropdown-item" href="recipientlogin.html">As Recipiet</a>
                        </div>
                    </li>
                    <li class="nav-item pr-2">
                        <a href="register.html" class="nav-link">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Register -->
    <h1 class="display-4 section-heading form-gap mb-5 text-center">Registration Form</h1>
    <section id="login-form" class="container">
        <div class="col-lg-5 col-md-7 mb-5 login-form card">
            <div class="card-body my-4">
                <div class="container">
                    <form method="post" action="register.php">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first-name" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last-name" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <label for="aadhar">last time blood was donated(in months)</label>
                            <input type="tel" class="form-control" name="months" id="months" aria-describedby="blooddonatedlasttime" placeholder="BloodDonated" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="aadhar">Aadhar Number</label>
                            <input type="tel" class="form-control" name="aadhar" id="aadhar" aria-describedby="aadharHelp" placeholder="Aadhar Number" required>
                            <small id="aadharHelp" class="mt-2 form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" minlength="8" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="toggle-password">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="mt-3 btn btn-lg btn-primary slide-btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('toggle-password');

        togglePasswordButton.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            // Toggle eye icon between open and closed
            togglePasswordButton.innerHTML = type === 'password' ? '<i class="fa fa-eye" aria-hidden="true"></i>' : '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        });
    });
    </script>


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
    require_once 'db_connect.php';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve values from the form
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $aadharNumber = $_POST['aadhar'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $month = $_POST['months'];

        // Check if the month is greater than 3
        if ($month > 3) {
            // Insert values into the database
            $sql = "INSERT INTO reg (fname, lname, adhar, email, pass) VALUES ('$firstName', '$lastName', '$aadharNumber', '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                // Registration successful, redirect to login.php
                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            // Month is not greater than 3, display an error message using JavaScript pop-up
            echo "<script>alert('Registration is only allowed for months greater than 3.');</script>";
        }
    }

    // Close the database connection
    $conn->close();
    ob_end_flush();
?>





</body>

</html>