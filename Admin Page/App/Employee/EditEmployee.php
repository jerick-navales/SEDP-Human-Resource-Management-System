<?php
// Connection
include("../../../Database/db.php");
$employee_id = "";
$username = "";
$email = "";
$department = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["employee_id"])) {
        header("location:../View/Employee.php");
        exit;
    }

    $employee_id = $_GET["employee_id"];

    //read the row of the selected data
    $sql = "SELECT * FROM `employees` WHERE employee_id = $employee_id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:../View/Employee.php");
        exit;
    }

    $username = $row["username"];
    $email = $row["email"];
    $department = $row["department"];
} else {
    //Update the data go the employee
    $employee_id = $_POST['employee_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $department = $_POST['department'];

    do {
        if (empty($employee_id) || empty($username) || empty($email) || empty($department)) {
            $errorMessage = "all the field are required";
            break;
        }
        $sql = "UPDATE employees SET username = '$username', email = '$email', department = '$department'" .
            "WHERE employee_id = $employee_id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Employee Updated Succefuly!";

        header("location:../View/Employee.php");
        exit;
    } while (false);
}
