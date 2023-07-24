<?php
// Include another PHP file
require 'conection.php';

// Assuming you have a table named "register" with columns: id, sname, gender, dob, bloodgroup, placeofbirth, mothertongue, caste, religion, nationality, aadhar
$name = $_POST["name"];
$gender = $_POST["Gender"];
$dob = $_POST["dob"];
$bloodgroup = $_POST['BloodGroup'];
$pob = $_POST['pob'];
$mothertongue = $_POST['MotherTongue'];
$caste = $_POST['caste'];
$religion = $_POST['Religion'];
$nationality = $_POST['Nationality'];
$aadhar = $_POST['Aadhar'];

// Prepare the SQL statement
$sql = "INSERT INTO register (sname, gender, dob, bloodgroup, placeofbirth, mothertongue, caste, religion, nationality, aadhar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind the statement
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssssssssis", $name, $gender, $dob, $bloodgroup, $pob, $mothertongue, $caste, $religion, $nationality, $aadhar);

// Execute the statement
if ($stmt->execute()) {
    echo "New record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

// Close the statement and connection
$stmt->close();
$connection->close();
?>