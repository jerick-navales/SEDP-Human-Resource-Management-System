<?php
// Connection
include("../../../Database/db.php");

$recipient_id = "";
$name = "";
$email = "";
$school = "";
$contact = "";
$GradeLevel = "";


$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["recipient_id"])) {
        header("location:../View/recipients.php");
        exit;
    }

    $recipient_id = $_GET["recipient_id"];

    //read the row of the selected datas
    $sql = "SELECT * FROM `recipient` WHERE recipient_id = $recipient_id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:../View/recipient.php");
        exit;
    }

    $name = $row["name"];
    $email = $row["email"];
    $school = $row["school"];
    $contact = $row["contact"];
    $GradeLevel = $row["GradeLevel"];
} else {
    //Update the data go the recipient
    $recipient_id = $_POST['recipient_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $contact = $_POST['contact'];
    $GradeLevel = $_POST['GradeLevel'];

    do {
        if (empty($recipient_id) || empty($name) || empty($email) || empty($school) || empty($contact) || empty($GradeLevel)) {
            $errorMessage = "all the field are required";
            break;
        }
        $sql = "UPDATE recipient SET name = '$name', email = '$email', school = '$school', contact = '$contact', GradeLevel = '$GradeLevel'" .
            "WHERE recipient_id = $recipient_id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "recipient Updated Succefuly!";

        header("location:../View/recipients.php");
        exit;
    } while (false);
}
