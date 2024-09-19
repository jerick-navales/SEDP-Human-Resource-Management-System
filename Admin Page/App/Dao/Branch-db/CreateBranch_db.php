<?php
//connections
include("../../../../Database/db.php");

$name = "";
$location = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $location = isset($_POST['location']) ? htmlspecialchars($_POST['location']) : '';

    $check_name = mysqli_query($connection, "SELECT * FROM branches WHERE name ='$name'");
    if (mysqli_num_rows($check_name) > 0) {
        $errorMessage = "The Branch name is already exists!";
        header("Location: ../../View/Branch.php");
        exit;
    } else {
        do {
            if (empty($name) || empty($location)) {
                $errorMessage = "all the field are required";
                break;
            }
            //add new client to database
            $sql = "INSERT INTO branches (name, location) 
                    VALUES ('$name','$location')";
            $result = $connection->query($sql);


            if (!$result) {
                $errorMessage = "Invalid query: " . $connection->error;
                break;
            }

            $name = "";
            $location = "";

            $successMessage = "New Branch created successfuly!";
            header("Location: ../../View/Branch.php");
            exit;
        } while (false);
    }
}
