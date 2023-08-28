<?php include('session.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="local/formStyles.css">
    <link rel="stylesheet" href="local/styles.css">
    <title>Patients</title>
</head>
       <header>
       <img src="assets/catalyst-logo-blue.png" alt="Catalyst Logo">
       <nav>
           <ul>
               <li><a href="dashboard.php">HOME</a></li>
               <li><a href="patients.php">PATIENTS</a></li>
               <div class="logout">
                    <li class="logout"><a href="logout.php">LOGOUT</a></li>
               </div>
           </ul>
       </nav>
   </header> 
<body>
    <a class="patient-button"href="Patient-Data-Forms/patientDraft.php">New</a>
    <div class="category-container">
    <h1 class="category-header">Patients</h1>
    <div class="sub-category">
        <div class="sub-category-glance">
            <h3 class="glance-date">10/32/2022</h3>
            <div class="glance-data2">
                <h4>Name: Joe Mama</h4>
                <h4>DoB: 10/31/2002</h4>
                <h4>SSN: 694-20-321</h4>
                <h4>MR#: 123-456-78</h4>
            </div>
            <div class="flex-container">
                <a class="glance-button" href="dashboard.php">View</a>
            </div>
        </div>
        <div class="sub-category-glance">
            <h3 class="glance-date">03/15/2022</h3>
            <div class="glance-data2">
                <h4>Name: Johny Appleseed</h4>
                <h4>DoB: 8/24/1774 </h4>
                <h4>SSN: 789-69-654</h4>
                <h4>MR#: 456-789-01 </h4>
            </div>
            <div class="flex-container">
                <a class="glance-button" href="public/publicHome.php">View</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>