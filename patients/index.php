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
    <link rel="stylesheet" href="../css/formStyles.css">
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
            <div class="sub-category-glance">
                <div class="glance-data2">
                    <h4>Name:<div class="patient_name ">John Doe</div></h4>
                    <h4>DoB:<div class="patient_name ">1/1/1</div></h4>
                    <h4>SSN:<div class="patient_name ">000-00-001</div></h4>
                    <h4>MR#:<div class="patient_name ">000-00-001</div></h4>
                </div>
                <a class="glance-button" href="vitals/index.php">View</a>
            </div>
            <div class="sub-category-glance">
                <div class="glance-data2">
                    <h4>Name:<br>Johny Appleseed</h4>
                    <h4>DoB:<br>8/24/1774 </h4>
                    <h4>SSN:<br>789-69-654</h4>
                    <h4>MR#:<br>456-789-01 </h4>
                </div>
                <a class="glance-button" href="vitals/index.php" title="View vitals">View</a>
            </div>
        </div>
    </div>

    <div class="logout">
       <p><a href="../scripts/logout.php">LOGOUT</a></p>
    </div>

</body>
</html>