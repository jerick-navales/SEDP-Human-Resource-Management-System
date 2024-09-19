<?php
// Connections
include("../../../Database/db.php");
$branch_id = "";
$name = "";
$location = "";


$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["branch_id"])) {
        header("location:../View/Branch.php");
        exit;
    }

    $branch_id = $_GET["branch_id"];

    //read the row of the selected data
    $sql = "SELECT * FROM `branches` WHERE branch_id = $branch_id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:../View/Branch.php");
        exit;
    }

    $name = $row["name"];
    $location = $row["location"];
} else {
    //Update the data go the branch
    $branch_id = $_POST['branch_id'];
    $name = $_POST['name'];
    $location = $_POST['location'];

    do {
        if (empty($branch_id) || empty($name) || empty($location)) {
            $errorMessage = "all the field are required";
            break;
        }
        $sql = "UPDATE branches SET name = '$name', location = '$location'" .
            "WHERE branch_id = $branch_id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Branch Updated Succefuly!";
        header("location:../View/Branch.php");
        exit;
    } while (false);
}
