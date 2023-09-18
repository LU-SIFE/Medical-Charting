<?php
echo = "test";
    $first_name = $_POST['first_name'];
    $alias_name = $_POST['alias_name'];
    $dob = $_POST['dob'];
    $suffix = $_POST['suffix'];
    $last_name = $_POST['last_name'];
    $sex = $_POST['sex'];
    $mrn = $_POST['mrn'];
    $marital_status = $_POST['marital_status'];
    $middle_name = $_POST['middle_name'];
    $gender_identity = $_POST['gender_identity'];
    $ssn = $_POST['ssn'];
    $language = $_POST['language'];
    $race_ethnicity = $_POST['race_ethnicity'];
    $street_address = $_POST['street_address'];
    $apartment_num = $_POST['apartment_num'];
    $city = $_POST['city'];
    $state_province = $_POST['state_province'];
    $zip_code = $_POST['zip_code'];
    $email = $_POST['email'];
    $home_phone = $_POST['home_phone'];
    $cell_phone = $_POST['cell_phone'];
    $employment_status = $_POST['employment_status'];
    $employer = $_POST['employer'];
    $work_phone = $_POST['work_phone'];
    $occupation = $_POST['occupation'];

if (!empty($first_name) || !empty($dob) || !empty($last_name) || !empty($sex) || !empty($mrn) || !empty($ssn) || !empty($language) || !empty($race_ethnicity) || !empty($street_address) || !empty($city) || !empty($state_province) || !empty($zip_code) || !empty($email) || !empty($cell_phone) || !empty($employment_status)){
    $servername = 'localhost';
    $userName = 'catalystuser24';
    $password = 'downloud42';
    $dbName = 'chart_db';
    //create connection
    
    $conn = new mysqli($servername, $userName, $password, $dbName);
    
    if (mysqli_connect_erro()) {
        die('Connect Error('.mysqli_connect_erro().')'. mysqli_connect_erro());
    } else {
        $SELECT = "SELECT ssn FROM patients WHERE ssn = $snn Limit 1";
        $INSERT = "INSERT INTO patients (first_name, alias_name, dob, suffix, last_name, sex, mrn, marital_status, middle_name, gender_identity, ssn, language, race_ethicity, street_address,  apartment_num, city, state_province, zip_code, email, home_phone, cell_phone, employment_status, employer, work_phone, occupation) VALUES ('$first_name', '$alias_name', '$dob', '$suffix', '$last_name', '$sex', '$mrn', '$marital_status', '$middle_name', '$gender_identity', '$ssn', '$language', '$race_ethicity', '$street_address', '$apartment_num', '$city', '$state_province', '$zip_code', '$email', '$home_phone', '$cell_phone', '$employment_status', '$employer', '$work_phone', '$occupation');";
        
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $ssn);
        $stmt->execute();
        $stmt->bind_result($ssn);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssssssssssssssssssssssss", $first_name, $alias_name, $dob, $suffix, $last_name, $sex, $mrn, $marital_status, $middle_name, $gender_identity, $ssn, $language, $race_ethicity, $street_address,  $apartment_num, $city, $state_province, $zip_code, $email, $home_phone, $cell_phone, $employment_status, $employer, $work_phone, $occupation);
            $stmt->execute();
            echo = "New patient added sucessfully";
        } else {
            echo = "Patient with this SSN already exist";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo = "All fields are required";
    die();
}

var_dump($first_name, $alias_name, $dob, $suffix, $last_name, $sex, $mrn, $marital_status, $middle_name, $gender_identity, $ssn, $language, $race_ethicity, $street_address,  $apartment_num, $city, $state_province, $zip_code, $email, $home_phone, $cell_phone, $employment_status, $employer, $work_phone, $occupation);
?>