<?php
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
    $employment = $_POST['employment'];
    $employer = $_POST['employer'];
    $work_phone = $_POST['work_phone'];
    $occupation = $_POST['occupation'];

    $servername = "localhost";
    $username = "catalystuser24";
    $password = "downloud42";
    $dbname = "chart_db";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `patients`(`first_name`, `alias_name`, `dob`, `last_name`, `suffix`, `sex`, `mrn`, `marital_status`, `middle_name`, `gender_identity`, `ssn`, `language`, `race_ethnicity`, `street_address`, `apartment_num`, `city`, `state_province`, `zip_code`, `email`, `home_phone`, `cell_phone`, `employment_status`, `employer`, `work_phone`, `occupation`)
    
    VALUES ('".$first_name."', '".$alias_name."', '".$dob."', '".$last_name."', '".$suffix."', '".$sex."', '".$mrn."', '".$marital_status."', '".$middle_name."', '".$gender_identity."', '".$ssn."', '".$language."', '".$race_ethnicity."', '".$street_address."', '".$apartment_num."', '".$city."', '".$state_province."', '".$zip_code."', '".$email."', '".$home_phone."', '".$cell_phone."', '".$employment."', '".$employer."', '".$work_phone."', '".$occupation."')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br><br>";
        $conn->close();
        // header('Location: ../patients/index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
    }

//
//
//


    
$target_dir = "../uploaded_imgs/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_name = $target_dir . strtolower($alias_name) . "_" . strtolower($last_name) . "." . $imageFileType;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".<br>";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_name)) {
  echo "Sorry, file already exists.<br>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.<br>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_name)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>