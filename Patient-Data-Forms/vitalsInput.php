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
    <div class="form-overflow-container">
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
        <div class="form-container cries">
            <div class="container-header cries" style="grid-area: form-header">
                <h2>CRIES Scale</h2>
            </div>
            <div class="column-header-container cries" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Vital</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
                <h3 class="column-header" style="grid-column: 3">Description</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="cries-form">
                <hr>
                <div class="form-row cries">
                    <h3 class="row-header cries">Crying:</h3>
                    <select name="crying-value" id="crying-value">
                        <option value="default">Value</option>
                        <option value="0-No cry or cry that is non high-pitched">0-No cry or cry that is non
                            high-pitched
                        </option>
                        <option value="1-Cry high-pitched but baby is easily consolable">1-Cry high-pitched but baby is
                            easily consolable
                        </option>
                        <option value="2-Cry high-pitched but baby is inconsolable">2-Cry high-pitched but baby is
                            inconsolable
                        </option>
                    </select>
                    <input type="text" id="crying-description">
                </div>
                <hr>
                <div class="form-row cries">
                    <h3 class="row-header cries">Requires O2 for SaO2 < 95%:</h3>
                    <select name="req-o2-value" id="req-o2-value">
                        <option value="default">Value</option>
                        <option value="0-No oxygen required">0-No oxygen required</option>
                        <option value="1-<30% oxygen required">1-<30% oxygen required</option>
                        <option value="1->30% oxygen required">1->30% oxygen required</option>
                    </select>
                    <input type="text" id="req-o2-description">
                </div>
                <hr>
                <div class="form-row cries">
                    <h3 class="row-header cries">Increased vital Signs (BP & HR):</h3>
                    <select name="inc-vi-value" id="inc-vi-value">
                        <option value="default">Value</option>
                        <option value="0-Both HR & BP unchanged or less than baseline">0-0-Both HR & BP unchanged or
                            less than baseline
                        </option>
                        <option value="1-HR & BP increased but increase in <20% of baseline">1-HR & BP increased but
                            increase in <20% of baseline
                        </option>
                        <option value="2-HR or BP is increased in >20% over baseline">2-HR or BP is increased in >20%
                            over baseline
                        </option>
                    </select>
                    <input type="text" id="inc-vi-description">
                </div>
                <hr>
                <div class="form-row cries">
                    <h3 class="row-header cries">Expression:</h3>
                    <select name="expression-value" id="expression-value">
                        <option value="default">Value</option>
                        <option value="0-No grimace present">0-No grimace present</option>
                        <option value="1-Grimace alone is present">1-Grimace alone is present</option>
                        <option value="2-Grimace and non-cry vocalization grunt is present">2-Grimace and non-cry
                            vocalization grunt is present
                        </option>
                    </select>
                    <input type="text" id="expression-description">
                </div>
                <hr>
                <div class="form-row cries">
                    <h3 class="row-header cries">Sleepless:</h3>
                    <select name="sleepless-value" id="sleepless-value">
                        <option value="default">Value</option>
                        <option value="0-Child has been continuously asleep">0-Child has been continuously asleep
                        </option>
                        <option value="1-Child has awakened at frequent intervals">1-Child has awakened at frequent
                            intervals
                        </option>
                        <option value="2-Child has been awake constantly">2-Child has been awake constantly</option>
                    </select>
                    <input type="text" id="sleepless-description">
                </div>
            </form>
        </div>

        <div class="form-container nvp">
            <div class="container-header nvp" style="grid-area: form-header">
                <h2>Nonverbal Pain Assessment:</h2>
            </div>
            <div class="column-header-container nvp" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Vital</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
                <h3 class="column-header" style="grid-column: 3">Description</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="nvp-form">
                <hr>
                <div class="form-row nvp">
                    <h3 class="row-header nvp">Face:</h3>
                    <select name="face-value" id="face-value">
                        <option value="default">Value</option>
                        <option value="0-No particular expression or smile">0-No particular expression or smile</option>
                        <option value="1-Occasional grimace, tearing, frowning, wrinkled forehead">1-Occasional grimace,
                            tearing, frowning, wrinkled forehead
                        </option>
                        <option value="2-Frequent grimace, tearing, frowning, wrinkled forehead">2-Frequent grimace,
                            tearing, frowning, wrinkled forehead
                        </option>
                    </select>
                    <input type="text" id="face-description">
                </div>
                <hr>
                <div class="form-row nvp">
                    <h3 class="row-header nvp">Activity:</h3>
                    <select name="activity-value" id="activity-value">
                        <option value="default">Value</option>
                        <option value="0-No particular expression or smile">0-No particular expression or smile</option>
                        <option value="1-Occasional grimace, tearing, frowning, wrinkled forehead">1-Occasional grimace,
                            tearing, frowning, wrinkled forehead
                        </option>
                        <option value="2-Frequent grimace, tearing, frowning, wrinkled forehead">2-Frequent grimace,
                            tearing, frowning, wrinkled forehead
                        </option>
                    </select>
                    <input type="text" id="activity-description">
                </div>
                <hr>
                <div class="form-row nvp">
                    <h3 class="row-header nvp">Guarding:</h3>
                    <select name="guarding-value" id="guarding-value">
                        <option value="default">Value</option>
                        <option value="0-Lying quietly, no positioning of hand over areas of body">0-Lying quietly, no
                            positioning of hand over areas of body
                        </option>
                        <option value="1-Splinting areas of the body, tense">1-Splinting areas of the body, tense
                        </option>
                        <option value="2-Rigid, stiff">2-Rigid, stiff</option>
                    </select>
                    <input type="text" id="guarding-description">
                </div>
                <hr>
                <div class="form-row nvp">
                    <h3 class="row-header nvp">Physiology:</h3>
                    <select name="physiology-value" id="physiology-value">
                        <option value="default">Value</option>
                        <option value="0-Stable vital signs">0-Stable vital signs</option>
                        <option value="1-Change in any of the following: SBP>20mmHg,HR>20/min">1-Change in any of the
                            following: SBP>20mmHg,HR>20/min
                        </option>
                        <option value="2-Change in any of the following: SBP>30mmHg,HR>25/min">2-Change in any of the
                            following: SBP>30mmHg,HR>25/min
                        </option>
                    </select>
                    <input type="text" id="physiology-description">
                </div>
                <hr>
                <div class="form-row nvp">
                    <h3 class="row-header nvp">Respiratory:</h3>
                    <select name="respiratory-value" id="respiratory-value">
                        <option value="default">Value</option>
                        <option value="0-Baseline RR/SpO2, Compliant with ventilator">0-Baseline RR/SpO2, Compliant with
                            ventilator
                        </option>
                        <option value="1-RR > 10 above baseline, or 5% decrease in SpO2, Mild asynchrony with ventilator">
                            1-RR > 10 above baseline, or 5% decrease in SpO2, Mild asynchronous with ventilator
                        </option>
                        <option value="2-RR > 20 above baseline, or 10% decrease in SpO2, Severe asynchrony with ventilator">
                            2-RR > 20 above baseline, or 10% decrease in SpO2, Severe asynchrony with ventilator
                        </option>
                    </select>
                    <input type="text" id="respiratory-description">
                </div>
            </form>
        </div>

        <div class="form-container pain-scale">
            <div class="container-header pain-scale" style="grid-area: form-header">
                <h2>Pain Scale:</h2>
            </div>
            <div class="column-header-container pain-scale" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Vital</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="nvp-form">
                <hr>
                <div class="form-row pain-scale">
                    <h3 class="row-header pain-scale">Pain:</h3>
                    <div class="pain-scale-container">
                        <input type="radio" name="pain-scale-value" value="0">
                        <h3>0</h3>
                        <h4>No Hurt</h4>
                    </div>
                    <div class="pain-scale-container">
                        <input type="radio" name="pain-scale-value" value="2">
                        <h3>2</h3>
                        <h4>Hurts A Little</h4>
                    </div>
                    <div class="pain-scale-container">
                        <input type="radio" name="pain-scale-value" value="4">
                        <h3>4</h3>
                        <h4>Hurts A Little More</h4>
                    </div>
                    <div class="pain-scale-container">
                        <input type="radio" name="pain-scale-value" value="6">
                        <h3>6</h3>
                        <h4>Hurts Even More</h4>
                    </div>
                    <div class="pain-scale-container">
                        <input type="radio" name="pain-scale-value" value="8">
                        <h3>8</h3>
                        <h4>Hurts Whole Lot</h4>
                    </div>
                    <div class="pain-scale-container">
                        <input type="radio" name="pain-scale-value" value="10">
                        <h3>10</h3>
                        <h4>Hurts Worst</h4>
                    </div>
                </div>
            </form>
        </div>

        <div class="form-container rass">
            <div class="container-header rass" style="grid-area: form-header">
                <h2>Richmond Agitation-Sedation Scale (RASS):</h2>
            </div>
            <div class="column-header-container rass" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Vital</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
                <h3 class="column-header" style="grid-column: 3">Description</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="rass-form">
                <hr>
                <div class="form-row rass">
                    <h3 class="row-header rass">Level of Consciousness:</h3>
                    <select name="loc-value" id="loc-value">
                        <option value="default">Value</option>
                        <option value="0-No particular expression or smile">0-No particular expression or smile</option>
                        <option value="Combative +4">Combative +4</option>
                        <option value="Very Agitated +3">Very Agitated +3</option>
                        <option value="Agitated +2">Agitated +2</option>
                        <option value="Restless +1">Restless +1</option>
                        <option value="Alert and Calm 0">Alert and Calm 0</option>
                        <option value="Drowsy -1">Drowsy -1</option>
                        <option value="Light Sedation -2">Light Sedation -2</option>
                        <option value="Moderate Sedation -3">Moderate Sedation -3</option>
                        <option value="Deep Sedation -4">Deep Sedation -4</option>
                        <option value="Unarousable -5">Unarousable -5</option>
                    </select>
                    <input type="text" id="loc-description">
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
                        <option value="<5th Percentile>"><5th Percentile></option>
                        <option value="5th Percentile">5th Percentile</option>
                        <option value="10th Percentile">10th Percentile</option>
                        <option value="25th Percentile">25th Percentile</option>
                        <option value="50th Percentile">50th Percentile</option>
                        <option value="75th Percentile">75th Percentile</option>
                        <option value="90th Percentile">90th Percentile</option>
                        <option value="95th Percentile">95th Percentile</option>
                        <option value=">95th Percentile"><95th Percentile/option>
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
                        <option value="<5th Percentile>"><5th Percentile></option>
                        <option value="5th Percentile">5th Percentile</option>
                        <option value="10th Percentile">10th Percentile</option>
                        <option value="25th Percentile">25th Percentile</option>
                        <option value="50th Percentile">50th Percentile</option>
                        <option value="75th Percentile">75th Percentile</option>
                        <option value="90th Percentile">90th Percentile</option>
                        <option value="95th Percentile">95th Percentile</option>
                        <option value=">95th Percentile"><95th Percentile/option>
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
                        <option value="<5th Percentile>"><5th Percentile></option>
                        <option value="5th Percentile">5th Percentile</option>
                        <option value="10th Percentile">10th Percentile</option>
                        <option value="25th Percentile">25th Percentile</option>
                        <option value="50th Percentile">50th Percentile</option>
                        <option value="75th Percentile">75th Percentile</option>
                        <option value="90th Percentile">90th Percentile</option>
                        <option value="95th Percentile">95th Percentile</option>
                        <option value=">95th Percentile"><95th Percentile/option>
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

        <div class="form-container io">
            <div class="container-header io" style="grid-area: form-header">
                <h2>Intake & Output:</h2>
            </div>
            <div class="column-header-container io" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Vital</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
                <h3 class="column-header" style="grid-column: 3">Unit</h3>
                <h3 class="column-header" style="grid-column: 4">Qualifier(s)</h3>
                <h3 class="column-header" style="grid-column: 5">Description</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="io-form">
                <hr>
                <div class="form-row io">
                    <h3 class="row-header">Intake:</h3>
                    <input type="text" id="intake-value">
                    <h4 style="margin: auto 0">ml</h4>
                    <select name="intake-method" id="intake-method">
                        <option value="default">Method</option>
                        <option value="Oral">Oral</option>
                        <option value="Intravenous">Intravenous</option>
                        <option value="Blood">Blood</option>
                        <option value="Other">Other</option>
                    </select>
                    <select name="percent-consumed" id="percent-consumed">
                        <option value="default">% of Meal Consumed</option>
                        <option value="0% Consumed">0% Consumed</option>
                        <option value="10% Consumed">10% Consumed</option>
                        <option value="20% Consumed">20% Consumed</option>
                        <option value="30% Consumed">30% Consumed</option>
                        <option value="40% Consumed">40% Consumed</option>
                        <option value="50% Consumed">50% Consumed</option>
                        <option value="60% Consumed">60% Consumed</option>
                        <option value="70% Consumed">70% Consumed</option>
                        <option value="80% Consumed">80% Consumed</option>
                        <option value="90% Consumed">90% Consumed</option>
                        <option value="100% Consumed">100% Consumed</option>
                    </select>
                    <input type="text" id="intake-description">
                </div>
                <hr>
                <div class="form-row io">
                    <h3 class="row-header">Output:</h3>
                    <input type="text" id="output-value">
                    <h4 style="margin: auto 0">ml</h4>
                    <select name="output-method" id="output-method">
                        <option value="default">Method</option>
                        <option value="Emesis">Emesis</option>
                        <option value="Urine">Urine</option>
                        <option value="NG">NG</option>
                        <option value="Stool">Stool</option>
                        <option value="Wound">Wound</option>
                        <option value="Drain">Drain</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="row-placeholder"></div>
                    <input type="text" id="output-description">
                </div>
                <hr>
                <div class="form-row io">
                    <h3 class="row-header">Total:</h3>
                    <input type="text" id="total-io-value">
                    <h4 style="margin: auto 0">ml</h4>
                    <select name="total-io-method" id="total-io-method">
                        <option value="default">Fluid Shift</option>
                        <option value="Loss">Loss</option>
                        <option value="None">None</option>
                        <option value="Gain">Gain</option>
                    </select>
                    <select name="total-time-io" id="total-time-io">
                        <option value="default">Total Time</option>
                        <option value="8 Hours">8 Hours</option>
                        <option value="12 Hours">12 Hours</option>
                        <option value="24 Hours">24 Hours</option>
                    </select>
                    <input type="text" id="total-io-description">
                </div>
            </form>
        </div>

        <div class="form-container po">
            <div class="container-header po" style="grid-area: form-header">
                <h2>PO Intake:</h2>
            </div>
            <div class="column-header-container po" style="grid-area: column-headers">
                <h3 class="column-header" style="grid-column: 1">Vital</h3>
                <h3 class="column-header" style="grid-column: 2">Value</h3>
                <h3 class="column-header" style="grid-column: 3">Unit</h3>
                <h3 class="column-header" style="grid-column: 4">Description</h3>
            </div>
            <form action="server.php" method="post" style="grid-area: form" class="po-form">
                <hr>
                <div class="form-row po">
                    <h3 class="row-header">Meal Consumed:</h3>
                    <input type="text" id="meal-consumed-value">
                    <h4 style="margin: auto 0">%</h4>
                    <input type="text" id="meal-consumed-description">
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
            </form>
        </div>
    </div>
</main>

<button class="submit-back-button">Back</button>
<a href="../Dashboard.php"><button id="vital-submit">Submit</button></a>

<script src="../local/vitalDataGather.js"></script>
</body>
</html>