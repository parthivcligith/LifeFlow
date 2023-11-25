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

    <style>
        body {
            color: #343a40; 
        }
    </style>

    <title>Login - Bleed To Save</title>
</head>

<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Initialize $val variable
        $val = '';

        // Check if the submit button is clicked
        if (isset($_POST["submitButton"])) {
            // Check which radio button is selected
            if (isset($_POST["userType"])) {
                $val = $_POST["userType"];

                // Create a database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "lifeflow";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Use prepared statement to prevent SQL injection
                if ($val == 'donor') {
                    $stmt = $conn->prepare("INSERT INTO login (dorr) VALUES (?)");
                    $stmt->bind_param("s", $val);
                    
                    if ($stmt->execute()) {
                        echo "Data inserted successfully!";
                        // Redirect based on user type
                        header("Location: donorinfo.php");
                        exit(); // Ensure that no further code is executed after the redirect
                    } else {
                        echo "Error inserting data: " . $stmt->error;
                    }
                } elseif ($val == 'recipient') {
                    $sql1 = ("INSERT INTO login (dorr) VALUES ('$val')");
                    mysqli_query($conn,$sql1);
                    // Replace placeholder values with actual form data
                    $bloodType = isset($_POST['blood_type']) ? $_POST['blood_type'] : 'n';
                    $gender = isset($_POST['gender']) ? $_POST['gender'] : 'n';
                    $phoneNumber = isset($_POST['phone_number']) ? $_POST['phone_number'] : 0;
                    $city = isset($_POST['city']) ? $_POST['city'] : 'n';
                    $province = isset($_POST['province']) ? $_POST['province'] : 'n';

                    // Prepare and execute the SQL query
                    $sql = "INSERT INTO donorinfo (blood_type, gender, phone_number, city, province) VALUES ('$bloodType', '$gender', $phoneNumber, '$city', '$province')";

                    // Check if the query was successful
                    if (mysqli_query($conn, $sql)) {
                        echo "Record inserted successfully";
                        // Redirect based on user type
                        header("Location: recipientlogin.php");
                        exit(); // Ensure that no further code is executed after the redirect
                    } else {
                        echo "Error inserting data: " . mysqli_error($conn);
                    }
                } else {
                    echo "Invalid user type.";
                }

                // Close the prepared statement and the database connection
                $stmt->close();
                $conn->close();
            } else {
                echo "Please select a user type.";
            }
        }
    }
?>









    <!-- Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-0">
        <div class="container ">
            <a href="index.php " class="img-fluid navbar-brand "><img src="imgs/nav-logo.png " class="img-hover "></a>
            <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarNavDropdown " aria-controls="navbarNavDropdown " aria-expanded="false " aria-label="Toggle navigation ">
              <span class="navbar-toggler-icon "></span>
          </button>
            <div class="justify-content-end collapse navbar-collapse " id="navbarNavDropdown ">
                <ul class="navbar-nav ">
                    <li class="nav-item pr-2 ">
                        <a href="index.php " class="nav-link ">Logout</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login -->
    <h1 class="display-4 section-heading form-gap mb-5 text-center">Login</h1>
    <section id="login-form" class="container">
        <div class="col-lg-5 col-md-7 login-form card">
            <div class="card-body my-4">
                <div class="container">
                    <p>Do you want to login as?</p>
                    <form method="post">
                        <input type="radio" name="userType" value="donor" id="donorRadio">
                        <label for="donorRadio" class="mr-2">Donor</label>

                        <input type="radio" name="userType" value="recipient" id="recipientRadio">
                        <label for="recipientRadio">Recipient</label>

                        <button type="submit" name="submitButton" class="mt-3 btn btn-lg btn-primary slide-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>
    <script type="text/javascript " src="js/main.js "></script>
</body>

</html>
