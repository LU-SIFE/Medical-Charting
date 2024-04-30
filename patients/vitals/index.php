<!-- PUBLICHOME -->

<?php include('../../scripts/session.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medical Charting</title>

    <!--    GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

    <!--    STYLESHEET-->
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>

<header>

    <?php 
            $servername = "localhost";
            $username = "catalystuser24";
            $password = "downloud42";
            $dbname = "chart_db";

            $con = new mysqli($servername, $username, $password, $dbname);

            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }
            $value = $_GET['id'];

            $query = mysqli_query($con,"SELECT * FROM patients WHERE id='$value'"); 
            $row = mysqli_fetch_array($query);

                echo '
                    <div class="img-frame">
                        <img src="../../uploaded_imgs/'.strtolower($row['alias_name']).'_'.strtolower($row['last_name']).'.jpg" alt="profile" class="patient-photo">
                    </div>
                    
                    <form class="delete" action="../../scripts/delete.php" method="get">
                    <button class="glance-button" name="id" type="submit" value="'.$row['id'].'">
                        Delete
                    </button>
                    </form>
                    
                    <div class="patient-glance">
                        <h2 class="patient-glance-content"><span>Patient Name: </span>'.$row['first_name'].' '.$row['last_name'].'</h2>
                        <h2 class="patient-glance-content"><span>DOB: </span>'.$row['dob'].'</h2>
                        <h2 class="patient-glance-content"><span>MR#: </span>'.$row['mrn'].'</h2
                    </div>';
            
        ?>
</header>
    <a class="back-button" href="../index.php">Back</a>
    <br>
<div class="category-container">
    <h1 class="category-header">Vitals</h1>
    <br>
    <a class="new-button" href="../new-vitals/index.php">New</a>
    <br>
    <div class="sub-category">
        
        <div class="sub-category-glance">
            <h3 class="glance-date">03/25/2022</h3>
            <div class="glance-data">
                <h4>Temperature: 97 F</h4>
                <h4>Respiration: 78</h4>
                <h4>Blood Pressure: 120</h4>
                <h4>Pulse Oximetry: 94%</h4>
            </div>
            <div class="flex-container">
                <button class="glance-button">View</button>
            </div>
        </div>
        <div class="sub-category-glance">
            <h3 class="glance-date">03/15/2022</h3>
            <div class="glance-data">
                <h4>Temperature: 97 F</h4>
                <h4>Respiration: 78</h4>
                <h4>Blood Pressure: 120</h4>
                <h4>Pulse Oximetry: 94%</h4>
            </div>
            <div class="flex-container">
                <button class="glance-button">View</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>