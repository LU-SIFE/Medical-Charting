<?php include('session.php'); ?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum scale =1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="local/formStyles.css">
    <link rel="stylesheet" href="local/styles.css">
    <link rel="sidebar" href="sidebar.html">
    <link rel="sidebarstyle" href="sidebarStyle.css">
    <title>Dashboard</title>
    </head>
<body>
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
<section class="hero">
    <h1>Welcome to<br>Catalyst Charting!</h1>
</section>

</body>
</html>