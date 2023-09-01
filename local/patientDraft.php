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


    <link rel="stylesheet" href="../local/formStyles.css">
    <link rel="stylesheet" href="../local/styles.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>

<?php
$profilePath = "../assets/empty-profile.png";
$headerLogoPath = "../assets/catalyst-logo-blue.png";
include "../local/patientGlanceHeader.php";
?>

<main>
    <div class="form-overflow-container">
        <div class="form-container patient-draft">
            <div class="container-header patient-draft" style="grid-area: form-header">
                <h2>Patient Information</h2>
            </div>
            <form action="patientDatabase.php" method="post" style="grid-area: form" class="patient-draft-form">
                <hr>
                <div class="form-row patient-draft-img">
                    <img src="../assets/empty-profile.png" alt="patient profile">
                    <div class="row-span-container">
                        <div class="form-row patient-span">
                            <div class="input-group">
                                <label for="first-name">First Name</label>
                                <input type="text" name="first-name">
                            </div>
                            <div class="input-group">
                                <label for="alias-name">Alias or Non-Legal Name</label>
                                <input type="text" name="alias-name">
                            </div>
                            <div class="input-group">
                                <label for="dob">Date of Birth</label>
                                <input type="text" name="dob">
                            </div>
                            <div class="input-group">
                                <label for="suffix">Suffix</label>
                                <input type="text" name="suffix">
                            </div>
                        </div>
                        <div class="form-row patient-span">
                            <div class="input-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" name="last-name">
                            </div>
                            <div class="input-group">
                                <label for="sex">Sex</label>
                                <input type="radio" name="sex" value="m"><label>Male</label>
                                <input type="radio" name="sex" value="f">Female
                                <input type="radio" name="sex" value="o">Other
                            </div>
                            <div class="input-group">
                                <label for="mrn">Medical Record Number</label>
                                <input type="text" name="mrn">
                            </div>
                            <div class="input-group">
                                <label for="marital-status">Marital Status</label>
                                <input type="text" name="marital-status">
                            </div>
                        </div>
                        <div class="form-row patient-span">
                            <div class="input-group">
                                <label for="middle-name">Middle Name/ Initial</label>
                                <input type="text" name="middle-name">
                            </div>
                            <div class="input-group">
                                <label for="gender-identity">Current Gender Identity</label>
                                <input type="text" name="gender-identity">
                            </div>
                            <div class="input-group">
                                <label for="ssn">SSN</label>
                                <input type="text" name="ssn">
                            </div>
                            <div class="input-group">
                                <label for="language">Language</label>
                                <input type="text" name="language">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row patient-draft">
                    <div class="input-group">
                        <label for="race-ethnicity">Race/ Ethnicity</label>
                        <input type="text" name="race-ethnicity">
                    </div>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                </div>

                <div class="form-row patient-draft" style="grid-template-columns: 2fr 1fr 1fr 1fr">
                    <div class="input-group">
                        <label for="street-address">Street Address</label>
                        <input type="text" name="street-address">
                    </div>
                    <div class="input-group">
                        <label for="apartment-num">Apartment #</label>
                        <input type="text" name="apartment-num">
                    </div>
                    <div class="input-group">
                        <label for="city">City</label>
                        <input type="text" name="city">
                    </div>
                    <div class="input-group">
                        <label for="state-province">State/ Province</label>
                        <input type="text" name="state-province">
                    </div>
                </div>

                <div class="form-row patient-draft">
                    <div class="input-group">
                        <label for="zip-code">ZIP/ Postal Code</label>
                        <input type="text" name="zip-code">
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="input-group">
                        <label for="home-phone">Home Phone</label>
                        <input type="text" name="home-phone">
                    </div>
                    <div class="input-group">
                        <label for="cell-phone">Cell Phone</label>
                        <input type="text" name="cell-phone">
                    </div>
                    <div class="input-group">
                        <label for="employment-status">Employment Status</label>
                        <input type="text" name="employment-status">
                    </div>
                </div>

                <div class="form-row patient-draft">
                    <div class="input-group">
                        <label for="employer">Employer</label>
                        <input type="text" name="employer">
                    </div>
                    <div class="input-group">
                        <label for="work-phone">Work Phone</label>
                        <input type="text" name="work-phone">
                    </div>
                    <div class="input-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" name="occupation">
                    </div>
                    <div class="row-placeholder"></div>
                    <input type="submit" name="submit">
                </div>
                
        </form>
    </div>
    </div>
</main>
<button id="patient-draft-submit">Submit</button>
</body>
</html>
