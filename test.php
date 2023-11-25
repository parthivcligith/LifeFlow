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
    <br><br><br><br><br>

    
            <br class="d-md-none">
            <h2 class="display-4 section-heading text-center mb-4 pt-5 pt-md-0">Blood Requests</h2>
            <div class="container ">
                <h5 class="content text-center slide-description mb-5 content">You can help the people in search of a donor by accepting their request. Register now to help save precious lives.</h5>
            </div>
      
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
$sql = "SELECT fname, lname, adhar, email,bloodtype,gender,phone,city,province,dorr FROM data";
$result = $conn->query($sql);
?>

<!-- HTML code -->
<section id="list" class="index-requests pb-5">
    <!-- ... other HTML code ... -->

    
        <?php
        // Loop through the database results and display them
        while ($row = $result->fetch_assoc()) {
        ?>
            

            <section>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 my-2 content">
                        <div class="card">
                            <div class="card-body pb-4">
                                <div class="row ">
                                    <div class="col-4 d-flex flex-column justify-content-center align-items-center ">
                                        <div class="blood-type text-center d-flex flex-column justify-content-center ">
                                            <p class="vertical-center"><?php echo $row['bloodtype']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-8 ">
                                        <h5 class="mt-1 card-title name"><?php echo $row['fname']; ?>
                                        </h5>
                                        <h6 class="card-subtitle mb-2 text-muted "><i class="fas fa-map-marker-alt mr-2 mt-1"></i><span class="mt-1"><?php echo $row['province']; ?></span>
                                        </h6>
                                        <p class="mt-3 card-text info"><i class="fas fa-tint mr-2"></i><span>3 Pints</span><br><i class="far fa-envelope mr-2 mt-1"></i><span class="mt-1"><?php echo $row['email']; ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php
        }
        ?>

    </div>
    <!-- ... other HTML code ... -->
</section>

<?php
// Close the database connection
$conn->close();
?>


    
</body>
</html>