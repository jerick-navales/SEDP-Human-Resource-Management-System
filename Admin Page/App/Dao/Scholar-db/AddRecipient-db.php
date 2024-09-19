<?php
// Connection
include("../../../../Database/db.php");

// Initialize variables to avoid "root" issue in input field
$name = "";
$email = "";
$school = "";
$contact = "";
$GradeLevel = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $contact = $_POST['contact'];
    $GradeLevel = $_POST['GradeLevel'];

    // Check if email already exists
    $check_email = mysqli_query($connection, "SELECT * FROM employees WHERE email ='$email'");
    if (mysqli_num_rows($check_email) > 0) {
        $errorMessage = "The Email already exists!";
    } else {
        do {
            if (empty($name) || empty($email) || empty($school) || empty($contact) || empty($GradeLevel)) {
                $errorMessage = "All fields are required";
                break;
            }

            // Insert new employee into the database
            $sql = "INSERT INTO recipient (name, email, school, contact, GradeLevel) 
                    VALUES ('$name','$email','$school','$contact','$GradeLevel')";
            $result = $connection->query($sql);

            if (!$result) {
                $errorMessage = "Invalid query: " . $connection->error;
                break;
            }

            // Reset form values after successful submission
            $name = "";
            $email = "";
            $school = "";
            $contact = "";
            $GradeLevel = "";

            $successMessage = "New Employee added successfully!";

            // Redirect after successful form submission
            header("Location: ../../View/recipients.php");
            exit;
        } while (false);
    }
}
