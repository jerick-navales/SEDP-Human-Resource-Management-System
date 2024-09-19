<?php
// Connection
include("../../../Database/db.php");

$department_id = "";
$name = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["department_id"])) {
        header("location:../View/Department.php");
        exit;
    }
    // Get the department_id from URL
    $department_id = $_GET["department_id"];

    // Prepare and execute the query to read the selected data
    $sql = "SELECT * FROM departments WHERE department_id = $department_id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:../View/Department.php");
        exit;
    }

    // Populate the form with existing data
    $name = $row["name"];
} else {
    // Handle POST request (update the data)
    $department_id = $_POST['department_id'];
    $name = $_POST['name'];

    do {
        // Validate that both fields are not empty
        if (empty($department_id) || empty($name)) {
            $errorMessage = "All fields are required";
            break;
        }

        // Prepare the SQL query for updating the department name
        $sql = "UPDATE departments SET name = '$name' WHERE department_id = $department_id";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Department updated successfully!";

        // Redirect to the department page after a successful update
        header("location:../View/Department.php");
        exit;
    } while (false);
}
