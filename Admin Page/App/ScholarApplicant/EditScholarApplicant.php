<?php
// Connection
include("../../../Database/db.php");

$scholar_id = "";
$name = "";
$email = "";
$school = "";
$contact = "";
$GradeLevel = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["scholar_id"])) {
        header("location:../View/scholars.php");
        exit;
    }

    $scholar_id = $_GET["scholar_id"];

    //read the row of the selected data
    $sql = "SELECT * FROM `scholar_applicant` WHERE scholar_id = $scholar_id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:../View/scholar.php");
        exit;
    }

    $name = $row["name"];
    $email = $row["email"];
    $school = $row["school"];
    $contact = $row["contact"];
    $GradeLevel = $row["GradeLevel"];
} else {
    //Update the data go the scholar
    $scholar_id = $_POST['scholar_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $contact = $_POST['contact'];
    $GradeLevel = $_POST['GradeLevel'];

    do {
        if (empty($scholar_id) || empty($name) || empty($email) || empty($school) || empty($contact) || empty($GradeLevel)) {
            $errorMessage = "all the field are required";
            break;
        }
        $sql = "UPDATE scholar_applicant SET name = '$name', email = '$email', school = '$school', contact = '$contact', GradeLevel = '$GradeLevel'" .
            "WHERE scholar_id = $scholar_id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "scholar Updated Succefuly!";

        header("location:../View/ScholarApplicant.php");
        exit;
    } while (false);
}
