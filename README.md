# Medical_Charting

Charting software and documentation for Catalyst medical classes

## Contributors:

### Year 1:

> [Aaron Ashby](https://github.com/AshbySan) (Sever Admin)<br>
> David Thatcher (Lead Programmer)<br>
> Bronson Mercer (Programmer)

### Year 2:

> [Lucy](https://github.com/LU-SIFE) (Project Lead)<br>
> Hannah (Designer/Front End)<br>
> Kyle (Front End)<br>
> Regan (Programmer/Front End)<br>
> Ty (Lead Programmer)<br>

### Year 3:

> [Lucy](https://github.com/LU-SIFE) (Project Lead)<br>
> Seth Troxel<br>
> Bryson Brown<br>

### Year 4:

## Documentation:

You probably already know what the site is for and how it should function, but i understand the way files and code are organized can be confusing. We've re-organized everything to make things (hopefully) simpler. it's a big project, so just spend a couple weeks getting familiar with the site. I'll try to explain how the major part of the code works, so you can hopefully figure out vitals. It's the biggest part of the project, so I wanna make sure you know how it should be implemented.

---

okay here's my attempt at explaining how this whole thing works:

the structure of the website is pretty simple, each folder contains probably what you would expect.
<br><br><br>
there's a folder for CSS stylesheets containing a file for general styles and another for html forms. (not sure why these are seperated, but it's fine.)

There's a folder for PHP and JS scripts, used for things like deleting patients, connecting to the server, authenticating, etc.

The code we use is mysqli based, so you should probably learn what you can. here's the run down i guess c:

```php
<?php

//here are the variables we use to connect to the database.
$servername = "localhost";
$username = "...";
$password = "...";
$dbname = "...";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	//explodes if it doesn't work
  die("Connection failed: " . $conn->connect_error);
}

// in many of the scripts, we use an id from the database to identify what patient is currently being view/manipulated.
// this is usually given via a _GET html form which passes the id.

// Like this: <form action="script.php" method="get">
//			  <button name="id" type="submit" value="'.$row['id'].'"></button>
//     v      </form>
$value = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM patients WHERE id='$value'";
// a lot of scripts vary in there purpose, this one deletes the current patient.

//this is some basic error checking.
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";

  // this is used to redirect to another page after everything is finished. keep this is mind.
  header('Location: ../patients/index.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
```
There's also a lot of php embedded inside the actual html files, a lot of it is used to fetch patients from the database, and create elements based on them.


### Okay here's the important stuff on database entry:

---

there's a file you should probably take a look at. it's `scripts/patient_new.php`

this script handles the addition of new patients into the database. <u>**You should base the vitals input off of this script.**</u> also there's going to be several hundred variables, so have fun.

I'll explain how it works.

```php
$first_name = $_POST['first_name'];
$alias_name = $_POST['alias_name'];
$dob = $_POST['dob'];
$suffix = $_POST['suffix'];
$last_name = $_POST['last_name'];
... // There should be tons more variables here
```
this first section retrieves all variables passed using the POST method in the html form.
### Here ↓

```html
<form action="script.php" method="POST" enctype="multipart/form-data">
	<input type="text" name="first_name">
</form>
```
After the data has been parsed, you have to create a database connection.
```php
    $servername = "localhost";
    $username = "...";
    $password = "...";
    $dbname = "...";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
```
Once that's done, you're gonna insert the data into the database. this is the scary bit.
```php
$sql = "INSERT INTO `patients`(`first_name`, `alias_name`, `dob`, `last_name`,`suffix`, `sex`, `mrn`, `marital_status`, `middle_name`, `gender_identity`...)

VALUES ('".$first_name."', '".$alias_name."', '".$dob."', '".$last_name."', '".$suffix."', '".$sex."', '".$mrn."', '".$marital_status."', '".$middle_name."', '".$gender_identity."'...)";

//once the sql statement is created, you have to execute it.

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $conn->close();
    // header('Location: ../patients/index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
    }
```
There's also a section on image uploads, but that's been taken care of already. it's a bit different because you have to upload photos to the server instead of the SQL database.

but essentially, this is how you'll create the vital input system.

and then you have to make another script to retrieve, format, and display the data.

```php
<?php 
    $servername = "localhost";
    $username = "...";
    $password = "...";
    $dbname = "...";
            
    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $result = mysqli_query($con,"SELECT * FROM patients"); 

    while($row = mysqli_fetch_array($result)) 
        {
			echo '
				<div class="sub-category-glance">

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
```
This is the script used to display patients. you could definitely modify it to display vitals. Currently we don't have a page for looking at specific patient's vitals, but you could probably modify `patients/new-vitals/index.php` to display vitals instead of input them. (maybe just change the textbox labels, so the data can be edited as well, it could literally just be the same exact form, but with the data already entered :D)

anyways, the important part of this script is `'.$row['value'].'`

`'.$row['value'].'` is used to substitute part of a string for a variable, so we just print a bunch of HTML elements with PHP variables substituted for the innerHTML.

like this:

```php
<?php
echo '<span>`'.$row['value'].'`</span>'
?>	
```
it's really up to you how to format it :P

Hopefully you can figure things out, have fun i guess lol