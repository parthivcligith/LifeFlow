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
    <title>Login As Donor- Bleed To Save</title>
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
                        <a href="index.php" class="nav-link">Logout</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login As A Donor -->
    <h1 class="display-4 section-heading form-gap mb-5 text-center">Login As Donor</h1>
<section id="login-form" class="container">
    <div class="col-lg-5 col-md-7 login-form card">
        <div class="card-body my-4">
            <div class="container">
                <form class="mb-4" method="POST">
                    <!-- Add method="POST" to submit form data to the server -->

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

                        <!-- Add name="email" to access the value in the server-side script -->
                        <small id="emailError" class="text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="mt-3 btn btn-lg btn-primary slide-btn" id="submitBtn">Login</button>
                    <!-- Add id="submitBtn" to reference the button in the JavaScript -->

                </form>
                <p class="d-inline">Haven't registered yet? </p><span class="a-underline"><a href="register.php">Register now</a></span>
                <br><br><p class="d-inline">Forgot your password? </p>
<span class="a-underline"><a href="forgot_password.php">Reset it here</a></span>
            </div>
        </div>
    </div>
</section>

<!-- Move the script block to the end of the body for better performance -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const emailInput = document.getElementById("email");
        const emailError = document.getElementById("emailError");
        const submitBtn = document.getElementById("submitBtn");

        emailInput.addEventListener("input", function () {
            const email = emailInput.value;
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if (emailPattern.test(email)) {
                emailError.textContent = "";
                submitBtn.disabled = false;
            } else {
                emailError.textContent = "Invalid email address";
                submitBtn.disabled = true;
            }
        });
    });
</script>

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
    session_start();
    require_once 'db_connect.php'; // Assuming you have a separate file for database connection

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve email and password from the form
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($result = $conn->query("SELECT * FROM data where email='$email' and dorr='donor'")) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $hashedPassword = $row['pass']; // Assuming the column name is 'password'
                if($hashedPassword===$password){
                    $_SESSION['fname']=$row['fname'];
                    header("Location: pendingreq.php");
                    exit();
                
            } else {
                // Display a pop-up message using JavaScript
                echo '<script>alert("No matching user found.");</script>';
            }

            // Free result set
            $result->free_result();
        } else {
            // Display a pop-up message using JavaScript
            echo '<script>alert("No matching user found.\nPleae recheck the Username and Password");</script>';
        }

            // Free result set

        }

        $conn->close();
        ob_end_flush();
    
    }   
?>





</body>

</html>