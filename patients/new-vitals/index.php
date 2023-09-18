<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <?php
    include "../local/sidebarReq.html"
    ?>

    <link rel="stylesheet" href="../local/styles.css">
    <link rel="stylesheet" href="../local/formStyles.css">
</head>
<body>
<?php
$profilePath = "../assets/empty-profile.png";
$headerLogoPath = "../assets/catalyst-logo-blue.png";
include "../local/patientGlanceHeader.php";
?>


<main>
    <?php
    include "../sidebar.html"
    ?>
    <div class="form-overflow-container" id="patient_vital_input">
        
        <div class="form-container tpr">
            <div class="container-header tpr" style="grid-area: form-header">
                <h2>TPR B/P O2</h2>
            </div>
            <div class="column-header-container tpr" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Vitals</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
                <h3 class="column-header" style="grid-column: 3">Unit</h3>
                <h3 class="column-header" style="grid-column: 4">Qualifier(s)</h3>
                <h3 class="column-header" style="grid-column: 5">Description</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="tpr-form">
                <hr>
                <div class="form-row tpr">
                    <h3 class="row-header tpr">Temperature:</h3>
                    <input type="text" id="tpr-temperature-value">
                    <select name="tpr-temperature-unit" id="tpr-temperature-unit">
                        <option value="default"></option>
                        <option value="C">C</option>
                        <option value="F">F</option>
                    </select>
                    <select name="tpr-temperature-location" id="tpr-temperature-location">
                        <option value="default">Location</option>
                        <option value="None">None</option>
                        <option value="Axillary">Axillary</option>
                        <option value="Core">Core</option>
                        <option value="Oral">Oral</option>
                        <option value="Rectal">Rectal</option>
                        <option value="Skin">Skin</option>
                        <option value="Temporal">Temporal</option>
                        <option value="Tympanic">Tympanic</option>
                    </select>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                    <input type="text" id="tpr-temperature-description">
                </div>
                <hr>
                <div class="form-row tpr">
                    <h3 class="row-header tpr">Pulse:</h3>
                    <input type="text" id="pulse-value">
                    <div class="row-placeholder"></div>
                    <select name="pulse-location" id="pulse-location">
                        <option value="default">Location</option>
                        <option value="Apical">Apical</option>
                        <option value="Bilateral Peripheral">Bilateral Peripheral</option>
                        <option value="Brachial">Brachial</option>
                        <option value="Cartoid">Cartoid</option>
                        <option value="Dorsalis Pedial">Dorsalis Pedial</option>
                        <option value="Femoral">Femoral</option>
                        <option value="Other">Other</option>
                        <option value="Peripheral">Peripheral</option>
                        <option value="Popliteal">Popliteal</option>
                        <option value="Posterior Tibial">Posterior Tibial</option>
                        <option value="Radial">Radial</option>
                        <option value="Ulnar">Ulnar</option>
                    </select>
                    <select name="pulse-method" id="pulse-method">
                        <option value="default">Method</option>
                        <option value="Auscultate">Auscultate</option>
                        <option value="Doppler">Doppler</option>
                        <option value="Palpated">Palpated</option>

                    </select>
                    <select name="pulse-position" id="pulse-position">
                        <option value="default">Position</option>
                        <option value="Lying">Lying</option>
                        <option value="Sitting">Sitting</option>
                        <option value="Standing">Standing</option>

                    </select>
                    <input type="text" id="pulse-description">
                </div>
                <hr>
                <div class="form-row tpr">
                    <h3 class="row-header tpr">Respiration:</h3>
                    <input type="text" id="respiration-value">
                    <div class="row-placeholder"></div>
                    <select name="respiration-method" id="respiration-method">
                        <option value="default">Method</option>
                        <option value="Assisted Ventilation">Assisted Ventilation</option>
                        <option value="Controlled">Controlled</option>
                        <option value="Ventilation">Ventilation</option>
                        <option value="Spontaneous">Spontaneous</option>
                    </select>
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                    <input type="text" id="respiration-description">
                </div>
                <hr>
                <div class="form-row tpr">
                    <h3 class="row-header tpr">Blood Pressure:</h3>
                    <input type="text" id="tpr-bp-value">
                    <div class="row-placeholder"></div>
                    <select name="tpr-bp-location" id="tpr-bp-location">
                        <option value="default">Location</option>
                        <option value="L Arm">L Arm</option>
                        <option value="L Leg">L Leg</option>
                        <option value="Other">Other</option>
                        <option value="R Arm">R Arm</option>
                        <option value="R Leg">R Leg</option>
                    </select>
                    <select name="tpr-bp-method" id="tpr-bp-method">
                        <option value="default">Method</option>
                        <option value="Actual">Actual</option>
                        <option value="Cuff">Cuff</option>
                        <option value="Doppler">Doppler</option>
                        <option value="Non-Invasive">Non-Invasive</option>
                        <option value="Palpated">Palpated</option>

                    </select>
                    <select name="tpr-bp-position" id="tpr-bp-position">
                        <option value="default">Position</option>
                        <option value="Lying">Lying</option>
                        <option value="Sitting">Sitting</option>
                        <option value="Standing">Standing</option>

                    </select>
                    <input type="text" id="tpr-bp-description">
                </div>
                <hr>
                <div class="form-row tpr">
                    <h3 class="row-header tpr">Pulse Oximetry</h3>
                    <input type="text" id="tpr-po-value" placeholder="%">
                    <div class="row-placeholder"></div>
                    <input type="text" id="tpr-po-flow-rate" placeholder="Flow Rate (l/min)">
                    <input type="text" id="tpr-po-o2-percent" placeholder="02%">
                    <select name="tpr-po-method" id="tpr-po-method">
                        <option value="default">Method</option>
                        <option value="Aerosol/Humidified Mask">Aerosol/Humidified Mask</option>
                        <option value="Face Tent">Face Tent</option>
                        <option value="Mask">Mask</option>
                        <option value="Nasal Cannula">Nasal Cannula</option>
                        <option value="Non Re-Breather">Non Re-Breather</option>
                        <option value="Partial Re-Breather">Partial Re-Breather</option>
                        <option value="T-Piece">T-Piece</option>
                        <option value="Tracheostomy Collar">Tracheostomy Collar</option>
                        <option value="Ventilator">Ventilator</option>
                        <option value="Ventury Mask">Ventury Mask</option>
                    </select>
                    <input type="text" id="tpr-po-description">
                </div>
            </form>
        </div>

        <div class="form-container pain">
            <div class="container-header pain" style="grid-area: form-header">
                <h2>Pain</h2>
            </div>
            <div class="column-header-container pain" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Vital</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
                <h3 class="column-header" style="grid-column: 3">Description</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="pain-form">
                <hr>
                <div class="form-row pain">
                    <h3 class="row-header pain">Pain:</h3>
                    <select name="pain-value" id="pain-value">
                        <option value="default">Value</option>
                        <option value="0-No Pain">0-No Pain</option>
                        <option value="1-Slightly Uncomfortable">1-Slightly Uncomfortable</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10-Worst Imaginable">10-Worst Imaginable</option>
                        <option value="11-Unable to Respond">11-Unable to Respond</option>
                    </select>
                    <input type="text" id="pain-description">
                </div>
            </form>
        </div>

        <div class="form-container growth">
            <div class="container-header growth" style="grid-area: form-header">
                <h2>Growth:</h2>
            </div>
            <div class="column-header-container growth" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Vital</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
                <h3 class="column-header" style="grid-column: 3">Unit</h3>
                <h3 class="column-header" style="grid-column: 4">Qualifier(s)</h3>
                <h3 class="column-header" style="grid-column: 5">Description</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="growth-form">
                <hr>
                <div class="form-row growth">
                    <h3 class="row-header">Weight:</h3>
                    <input type="text" id="weight-value">
                    <select name="weight-unit" id="weight-unit">
                        <option value="default">Unit</option>
                        <option value="lb">lb</option>
                        <option value="oz">oz</option>
                        <option value="kg">kg</option>
                        <option value="g">g</option>
                    </select>
                    <select name="weight-percentile" id="weight-percentile">
                        <option value="default">Growth Chart</option>
                        <option value="5th Percentile">5th Percentile</option>
                        <option value="10th Percentile">10th Percentile</option>
                        <option value="25th Percentile">25th Percentile</option>
                        <option value="50th Percentile">50th Percentile</option>
                        <option value="75th Percentile">75th Percentile</option>
                        <option value="90th Percentile">90th Percentile</option>
                        <option value="95th Percentile">95th Percentile</option>
                    </select>
                    <input type="text" id="weight-description">
                </div>
                <hr>
                <div class="form-row growth">
                    <h3 class="row-header">Height/Length:</h3>
                    <input type="text" id="height-length-value">
                    <select name="height-length-unit" id="height-length-unit">
                        <option value="default">Unit</option>
                        <option value="in">in</option>
                        <option value="cm">cm</option>
                    </select>
                    <select name="height-length-percentile" id="height-length-percentile">
                        <option value="default">Growth Chart</option>
                        <option value="5th Percentile">5th Percentile</option>
                        <option value="10th Percentile">10th Percentile</option>
                        <option value="25th Percentile">25th Percentile</option>
                        <option value="50th Percentile">50th Percentile</option>
                        <option value="75th Percentile">75th Percentile</option>
                        <option value="90th Percentile">90th Percentile</option>
                        <option value="95th Percentile">95th Percentile</option>
                    </select>
                    <input type="text" id="height-length-description">
                </div>
                <hr>
                <div class="form-row growth">
                    <h3 class="row-header">Waist or Head Circumference:</h3>
                    <input type="text" id="circumference-value">
                    <select name="circumference-unit" id="circumference-unit">
                        <option value="default">Unit</option>
                        <option value="in">in</option>
                        <option value="cm">cm</option>
                    </select>
                    <select name="circumference-percentile" id="circumference-percentile">
                        <option value="default">Growth Chart</option>
                        <option value="5th Percentile">5th Percentile</option>
                        <option value="10th Percentile">10th Percentile</option>
                        <option value="25th Percentile">25th Percentile</option>
                        <option value="50th Percentile">50th Percentile</option>
                        <option value="75th Percentile">75th Percentile</option>
                        <option value="90th Percentile">90th Percentile</option>
                        <option value="95th Percentile">95th Percentile</option>
                    </select>
                    <input type="text" id="circumference-description">
                </div>
                <hr>
                <div class="form-row growth">
                    <h3 class="row-header">BMI:</h3>
                    <input type="text" id="bmi-value">
                    <div class="row-placeholder"></div>
                    <div class="row-placeholder"></div>
                    <input type="text" id="bmi-description">
                </div>
            </form>
        </div>

        <div class="form-container glucose">
            <div class="container-header glucose" style="grid-area: form-header">
                <h2>Capillary blood glucose reading:</h2>
            </div>
            <div class="column-header-container glucose" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Vital</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
                <h3 class="column-header" style="grid-column: 3">Unit</h3>
                <h3 class="column-header" style="grid-column: 4">Description</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="glucose-form">
                <hr>
                <div class="form-row glucose">
                    <h3 class="row-header">Capillary Blood Glucose Reading:</h3>
                    <input type="text" id="glucose-value">
                    <select name="glucose-unit" id="glucose-unit">
                        <option value="default">Unit</option>
                        <option value="mg/dL">mg/dL</option>
                        <option value="mmol/L">mmol/L</option>
                    </select>
                    <input type="text" id="glucose-description">
                </div>
            </form>
        </div>

        <div class="form-container survey">
            <div class="container-header survey" style="grid-area: form-header">
                <h2>Survey:</h2>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="survey-form">
                <!--                LEVEL OF CONSCIOUSNESS AND ORIENTATION SURVEY-->
                <div class="column-header-container survey" style="grid-area: column-headers">
                    <h3 class="column-header" style="grid-column: 1">Level of Consciousness and Orientation:</h3>
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Person:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="person-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="person-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="person-value" value="Abnormal">
                    </div>
                    <input type="text" id="person-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Time:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="place-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="place-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="place-value" value="Abnormal">
                    </div>
                    <input type="text" id="place-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Place:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="time-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="time-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="time-value" value="Abnormal">
                    </div>
                    <input type="text" id="time-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Purpose:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="purpose-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="purpose-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="purpose-value" value="Abnormal">
                    </div>
                    <input type="text" id="purpose-description">
                </div>
                <hr>
                <!--            SKIN SURVEY-->
                <div class="column-header-container survey" style="grid-area: column-headers">
                    <h3 class="column-header" style="grid-column: 1">Skin:</h3>
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Wounds/Breaks/Rash/Lesions:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="wbrl-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="wbrl-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="wbrl-value" value="Abnormal">
                    </div>
                    <input type="text" id="wbrl-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Redness/ Irritaion:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="redness-irritation-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="redness-irritation-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="redness-irritation-value" value="Abnormal">
                    </div>
                    <input type="text" id="redness-irritation-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Dryness/ Excess Moisture:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="moisture-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="moisture-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="moisture-value" value="Abnormal">
                    </div>
                    <input type="text" id="moisture-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Tugor/ Color/ Temperature:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="tct-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="tct-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="tct-value" value="Abnormal">
                    </div>
                    <input type="text" id="tct-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Sign of Breakdown:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="breakdown-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="breakdown-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="breakdown-value" value="Abnormal">
                    </div>
                    <input type="text" id="breakdown-description">
                </div>
                <hr>
                <!--            HEENT/NEURO SURVEY-->
                <div class="column-header-container survey" style="grid-area: column-headers">
                    <h3 class="column-header" style="grid-column: 1">HEENT/Neuro:</h3>
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Head:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="head-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="head-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="head-value" value="Abnormal">
                    </div>
                    <input type="text" id="head-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Eyes/ Vision:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="eyes-vision-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="eyes-vision-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="eyes-vision-value" value="Abnormal">
                    </div>
                    <input type="text" id="eyes-vision-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Ears/ Hearing:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="ears-hearing-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="ears-hearing-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="ears-hearing-value" value="Abnormal">
                    </div>
                    <input type="text" id="ears-hearing-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Nose:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="nose-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="nose-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="nose-value" value="Abnormal">
                    </div>
                    <input type="text" id="nose-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Throat and Mouth:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="throat-mouth-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="throat-mouth-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="throat-mouth-value" value="Abnormal">
                    </div>
                    <input type="text" id="throat-mouth-description">
                </div>
                <hr>
                <!--            LUNGS/ THORACIC SURVEY-->
                <div class="column-header-container survey" style="grid-area: column-headers">
                    <h3 class="column-header" style="grid-column: 1">Lungs/ Thoracic:</h3>
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Lung Sounds:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="lung-sounds-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="lung-sounds-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="lung-sounds-value" value="Abnormal">
                    </div>
                    <input type="text" id="lung-sounds-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Respiration Depth:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="resp-depth-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="resp-depth-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="resp-depth-value" value="Abnormal">
                    </div>
                    <input type="text" id="resp-depth-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Respiratory Rate:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="resp-rate-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="resp-rate-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="resp-rate-value" value="Abnormal">
                    </div>
                    <input type="text" id="resp-rate-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Chest Shape and Appearance:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="csa-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="csa-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="csa-value" value="Abnormal">
                    </div>
                    <input type="text" id="csa-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Drains/ Lines/ Sutures/ Staples:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="dlss-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="dlss-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="dlss-value" value="Abnormal">
                    </div>
                    <input type="text" id="dlss-description">
                </div>
                <hr>
                <!--            ABDOMEN/ COCCYX/ GENITALIA SURVEY-->
                <div class="column-header-container survey" style="grid-area: column-headers">
                    <h3 class="column-header" style="grid-column: 1">Abdomen/ Coccyx/ Genitalia:</h3>
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Abdominal Shape and Appearance:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="asa-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="asa-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="asa-value" value="Abnormal">
                    </div>
                    <input type="text" id="asa-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Bowel Sounds:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="bowel-sounds-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="bowel-sounds-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="bowel-sounds-value" value="Abnormal">
                    </div>
                    <input type="text" id="bowel-sounds-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Tenderness/ Lumps/ Bladder Distension:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="tlbd-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="tlbd-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="tlbd-value" value="Abnormal">
                    </div>
                    <input type="text" id="tlbd-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Tubes/ Drains/ Catherter Sites:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="tdcs-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="tdcs-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="tdcs-value" value="Abnormal">
                    </div>
                    <input type="text" id="tdcs-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Skin Appearance:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="skin-appearance-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="skin-appearance-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="skin-appearance-value" value="Abnormal">
                    </div>
                    <input type="text" id="skin-appearance-description">
                </div>
                <hr>
                <!--            EXTREMITIES SURVEY-->
                <div class="column-header-container survey" style="grid-area: column-headers">
                    <h3 class="column-header" style="grid-column: 1">Extremities:</h3>
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Temperature/ Color/ Capillary Refill:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="tccr-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="tccr-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="tccr-value" value="Abnormal">
                    </div>
                    <input type="text" id="tccr-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Pulses/ Sensation:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="pul-sens-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="pul-sens-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="pul-sens-value" value="Abnormal">
                    </div>
                    <input type="text" id="pul-sens-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Edema:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="edema-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="edema-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="edema-value" value="Abnormal">
                    </div>
                    <input type="text" id="edema-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">ROM:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="rom-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="rom-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="rom-value" value="Abnormal">
                    </div>
                    <input type="text" id="rom-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Tubes/ Drains/ Staples/ Sutures/ Catheter Sites:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="tdsscs-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="tdsscs-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="tdsscs-value" value="Abnormal">
                    </div>
                    <input type="text" id="tdsscs-description">
                </div>
                <hr>
                <!--            PSYCH/ MENTAL HEALTH SURVEY-->
                <div class="column-header-container survey" style="grid-area: column-headers">
                    <h3 class="column-header" style="grid-column: 1">Psych/ Mental Health:</h3>
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Mood/ Affect:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="mood-affect-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="mood-affect-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="mood-affect-value" value="Abnormal">
                    </div>
                    <input type="text" id="mood-affect-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Cognition:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="cognition-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="cognition-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="cognition-value" value="Abnormal">
                    </div>
                    <input type="text" id="cognition-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Thought Pattern:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="thou-patt-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="thou-patt-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="thou-patt-value" value="Abnormal">
                    </div>
                    <input type="text" id="thou-patt-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Sleep Pattern:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="slee-patt-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="slee-patt-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="slee-patt-value" value="Abnormal">
                    </div>
                    <input type="text" id="slee-patt-description">
                </div>
                <hr>
                <!--            GENERAL SURVEY-->
                <div class="column-header-container survey" style="grid-area: column-headers">
                    <h3 class="column-header" style="grid-column: 1">General:</h3>
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Pain/ Discomfort:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="pain-disc-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="pain-disc-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="pain-disc-value" value="Abnormal">
                    </div>
                    <input type="text" id="pain-disc-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Elimination:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="elimination-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="elimination-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="elimination-value" value="Abnormal">
                    </div>
                    <input type="text" id="elimination-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Appetite:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="appetite-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="appetite-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="appetite-value" value="Abnormal">
                    </div>
                    <input type="text" id="appetite-description">
                </div>
                <hr>
                <div class="form-row survey">
                    <h3 class="row-header">Activity:</h3>
                    <div class="radio-group">
                        <h4>Not Assessed</h4>
                        <input type="radio" name="gen-activity-value" value="Not Assessed">
                    </div>
                    <div class="radio-group">
                        <h4>WNL</h4>
                        <input type="radio" name="gen-activity-value" value="WNL">
                    </div>
                    <div class="radio-group">
                        <h4>Abnormal</h4>
                        <input type="radio" name="gen-activity-value" value="Abnormal">
                    </div>
                    <input type="text" id="gen-activity-description">
                </div>
                
                <button id="vital-submit">Submit</button>
            </form>
        </div>
    </div>
</main>


<script src="../local/vitalDataGather.js"></script>
</body>
</html>