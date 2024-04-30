<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Draft</title>
    
    <link rel="stylesheet" href="../../css/formStyles.css">
    <link rel="stylesheet" href="../../css/styles.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>

<header>
    <img src="../../assets/catalyst-logo-blue.png" alt="Catalyst Logo">
       <nav>
           <ul>
               <li><a href="../../dashboard/index.php">HOME</a></li>
               <li><a href="../index.php">PATIENTS</a></li>
           </ul>
       </nav>
   </header>  

<main> 
    <div class="form-overflow-container">
        <div class="form-container patient-draft">
            <div class="container-header patient-draft" style="grid-area: form-header">
                <h2>Patient Information</h2>
            </div> 
            <form action="../../scripts/patient_new.php" method="POST" class="patient-draft-form" enctype="multipart/form-data">
                <hr>
                <div class="form-row patient-draft-img">
                    <img src="../../assets/empty-profile.png" alt="patient profile">

                    

                    <div class="row-span-container">
                        <input type="file" id="fileToUpload" name="fileToUpload">
                        <div class="form-row patient-span">
                            <div class="input-group">
                                <label for="first-name">First Name*</label>
                                <input type="text" name="first_name">
                            </div>
                            <div class="input-group">
                                <label for="alias-name">Alias or Non-Legal Name</label>
                                <input type="text" name="alias_name">
                            </div>
                            <div class="input-group">
                                <label for="dob">Date of Birth*</label>
                                <input type="text" name="dob">
                            </div>
                            <div class="input-group">
                                <label for="suffix">Suffix</label>
                                    <select name="suffix" id="suffix">
                                        <option name="suffix" value="none"></option>
                                        <option name="suffix" value="ii">II</option>
                                        <option name="suffix" value="iii">III</option>
                                        <option name="suffix" value="iv">IV</option>
                                        <option name="suffix" value="v">V</option>
                                        <option name="suffix" value="jr">Jr.</option>
                                        <option name="suffix" value="phd">Ph.D.</option>
                                        <option name="suffix" value="sr">Sr.</option>
                                        <option name="suffix" value="med">M.Ed.</option>
                                        <option name="suffix" value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row patient-span">
                            <div class="input-group">
                                <label for="last-name">Last Name*</label>
                                <input type="text" name="last_name">
                            </div>
                            <div class="input-group">
                                <label for="sex">Biological Sex*</label>
                                    <select name="sex">
                                        <option value="placeholder"></option>
                                        <option name="sex" value="f">Female</option>
                                        <option name="sex" value="m">Male</option>
                                        <option name="sex" value="m">Other</option>
                                    </select>
                            </div>
                            <div class="input-group">
                                <label for="mrn">Medical Record Number*</label>
                                <input type="text" name="mrn">
                            </div>
                            <div class="input-group">
                                <label for="marital-status">Marital Status</label>
                                    <select name="marital_status" id="marital_status">
                                        <option name="marital_status" value="placeholder"></option>
                                        <option name="marital_status" value="single">Single</option>
                                        <option name="marital_status" value="married">Married</option>
                                        <option name="marital_status" value="widowed">Widowed</option>
                                        <option name="marital_status" value="seperated">Seperated</option>
                                        <option name="marital_status" value="divorced">Divorced</option>
                                        <option name="marital_status" value="other">Other</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-row patient-span">
                            <div class="input-group">
                                <label for="middle-name">Middle Name/Initial</label>
                                <input type="text" name="middle_name">
                            </div>
                            <div class="input-group">
                                <label for="gender-identity">Current Gender Identity</label>
                                <input type="text" name="gender_identity">
                            </div>
                            <div class="input-group">
                                <label for="ssn">SSN*</label>
                                <input type="text" name="ssn">
                            </div>
                            <div class="input-group">
                                <label for="language">Language*</label>
                                <input type="text" name="language">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row patient-draft">
                    <div class="input-group">
                        <label for="race-ethnicity">Race/Ethnicity*</label>
                            <select name="race_ethnicity" id="race-ethnicity">
                                <option name="race_ethnicity" value="none"></option>
                                <option name="race_ethnicity" value="aab">African American/Black</option>
                                <option name="race_ethnicity" value="aapid">Asian, Asian American, Pacific Islander, Desi</option>
                                <option name="race_ethnicity" value="hll">Hispanic, Latin(a/o), Latinx</option>
                                <option name="race_ethnicity" value="na">Native American</option>
                                <option name="race_ethnicity" value="w">White</option>
                                <option name="race_ethnicity" value="other">Other</option>
                            </select>
                    </div>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                </div>

                <div class="form-row patient-draft" style="grid-template-columns: 2fr 1fr 1fr 1fr">
                    <div class="input-group">
                        <label for="street-address">Street Address*</label>
                        <input type="text" name="street_address">
                    </div>
                    <div class="input-group">
                        <label for="apartment-num">Apartment #</label>
                        <input type="text" name="apartment_num">
                    </div>
                    <div class="input-group">
                        <label for="city">City*</label>
                        <input type="text" name="city">
                    </div>
                    <div class="input-group">
                        <label for="state-province">State/Province*</label>
                        <input type="text" name="state_province">
                    </div>
                </div>

                <div class="form-row patient-draft">
                    <div class="input-group">
                        <label for="zip-code">ZIP/Postal Code*</label>
                        <input type="text" name="zip_code">
                    </div>
                    <div class="input-group">
                        <label for="email">Email*</label>
                        <input type="text" name="email">
                    </div>
                    <div class="input-group">
                        <label for="home-phone">Home Phone</label>
                        <input type="text" name="home_phone">
                    </div>
                    <div class="input-group">
                        <label for="cell-phone">Cell Phone*</label>
                        <input type="text" name="cell_phone">
                    </div>
                    <div class="input-group">
                        <label for="employment-status">Employment Status*</label>
                            <select name="employment" id="employment">
                                <option name="employment" value="none"></option>
                                <option name="employment" value="not">Not Employed</option>
                                <option name="employment" value="employed">Employed</option>
                                <option name="employment" value="notice">Employed with Notice of Termination or Layoff</option>
                                <option name="employment" value="other">Other</option>
                            </select>
                    </div>
                </div>

                <div class="form-row patient-draft">
                    <div class="input-group">
                        <label for="employer">Employer</label>
                        <input type="text" name="employer">
                    </div>
                    <div class="input-group">
                        <label for="work-phone">Work Phone</label>
                        <input type="text" name="work_phone">
                    </div>
                    <div class="input-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" name="occupation">
                    </div>
                    <div class="row-placeholder"></div>
                    <input id="patient-draft-submit" type="submit" name="submit">
                </div>
        </form>
    </div>
    </div>
</main>

</body>
</html>
