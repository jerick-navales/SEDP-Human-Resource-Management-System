<?php
// Connection
include("../../../../Database/db.php");

// Initialize variables to avoid "root" issue in input field
$username = "";
$email = "";
$ContactNumber = "";
$department = "";
$password = "";
$cpassword = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $ContactNumber = $_POST['ContactNumber'];
    $department = $_POST['department'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check if email already exists
    $check_email = mysqli_query($connection, "SELECT * FROM employees WHERE email ='$email'");
    if (mysqli_num_rows($check_email) > 0) {
        $errorMessage = "The Email already exists!";
    } else {
        // Validation of form fields
        if (empty($username) || empty($email) || empty($ContactNumber) || empty($department) || empty($password) || empty($cpassword)) {
            $errorMessage = "All fields are required";
        } elseif ($password != $cpassword) {
            $error[] = 'Passwords do not match!';
            $errorMessage = "d";
        } else {
            // Prepare SQL query with prepared statements to avoid SQL injection
            $stmt = $connection->prepare("INSERT INTO employees (username, email, ContactNumber, department, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $username, $email, $ContactNumber, $department, $password);

            if ($stmt->execute()) {
                // Reset form values after successful submission
                $username = "";
                $email = "";
                $ContactNumber = "";
                $department = "";
                $password = "";
                $cpassword = "";

                $successMessage = "New Employee added successfully!";

                // Redirect after successful form submission
                header("Location: ../../View/Employee.php");
                exit;
            } else {
                $errorMessage = "Invalid query: " . $connection->error;
            }
        }
    }
}
