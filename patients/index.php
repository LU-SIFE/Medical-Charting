 <?php include('../scripts/session.php'); 
//<div class="logout">
//<li class="logout"><a href="../scripts/logout.php">LOGOUT</a></li>
//</div>
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Patients</title>
</head>
    <header>
       <img src="../assets/catalyst-logo-blue.png" alt="Catalyst Logo">
       <nav>
           <ul>
               <li><a href="../dashboard/index.php">HOME</a></li>
               <li><a href="#">PATIENTS</a></li>
           </ul>
       </nav>
   </header> 
<body>
    <a class="new-button" href="new/patientDraft.php">New</a>
    <div class="category-container">
        <h1 class="category-header">Patients</h1>
        <div class="sub-category">

        <!-- this script fetches all patients from the database, and displays them in their own elements. -->

        <?php 
            $servername = "localhost";
            $username = "catalystuser24";
            $password = "downloud42";
            $dbname = "chart_db";

            $con = new mysqli($servername, $username, $password, $dbname);

            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            $result = mysqli_query($con,"SELECT * FROM patients"); 
            while($row = mysqli_fetch_array($result)) 
            {
                echo '<div class="sub-category-glance">
                    <div class="glance-data2">
                        <h4>Name:<div class="patient_name ">'.$row['first_name'].' '.$row['last_name'].'</div></h4>
                        <h4>DOB:<div class="patient_name ">'.$row['dob'].'</div></h4>
                        <h4>SSN:<div class="patient_name ">'.$row['ssn'].'</div></h4>
                        <h4>MR#:<div class="patient_name ">'.$row['mrn'].'</div></h4>

                    </div>

                    <form action="vitals/index.php" method="get" class="view-form">
                        <button type="submit" name="id" value="'.$row['id'].'" class="glance-button">View</button>
                    </form>

                 </div>';
            }
        ?>
        </div>
    </div>

    <div class="logout">
       <p><a href="../scripts/logout.php">LOGOUT</a></p>
    </div>

</body>
</html>