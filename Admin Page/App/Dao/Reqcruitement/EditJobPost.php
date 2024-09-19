<?php
// Connections
include("../../../../Database/db.php");
$job_id = "";
$title = "";
$JobDescription = "";
$qualification = "";
$location = "";
$salary = "";
$EmployeeType = "";


$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["job_id"])) {
        header("location:../../View/ReqcruitmentPage.php");
        exit;
    }

    $job_id = $_GET["job_id"];

    //read the row of the selected data
    $sql = "SELECT * FROM `jobs` WHERE job_id = $job_id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:../../View/ReqcruitmentPage.php");
        exit;
    }

    $title = $row["title"];
    $JobDescription = $row["JobDescription"];
    $qualification = $row["qualification"];
    $location = $row["location"];
    $salary = $row["salary"];
    $EmployeeType = $row["EmployeeType"];
} else {
    //Update the data go the job
    $job_id = $_POST['job_id'];
    $title = $_POST['title'];
    $JobDescription = $_POST['JobDescription'];
    $qualification = $_POST['qualification'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $EmployeeType = $_POST['EmployeeType'];

    do {
        if (empty($job_id) || empty($title) || empty($JobDescription) || empty($qualification) || empty($location) || empty($salary) || empty($EmployeeType)) {
            $errorMessage = "all the field are required";
            break;
        }
        $sql = "UPDATE job SET title = '$title', JobDescription = '$JobDescription', qualification = '$qualification', location = '$location', salary = '$salary', EmployeeType = '$EmployeeType'" .
            "WHERE job_id = $job_id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "job Updated Succefuly!";

        header("location:../../View/ReqcruitmentPage.php");
        exit;
    } while (false);
}
