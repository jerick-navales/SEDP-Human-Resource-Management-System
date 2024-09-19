<?php
if (isset($_GET["applicant_id"])) {
    $applicant_id = $_GET["applicant_id"];

    // Connections
    include("../../../Database/db.php");

    // Step 1: Delete the record with the specified applicant_id
    $sql = "DELETE FROM applicants WHERE applicant_id = $applicant_id";
    $connection->query($sql);

    // Step 2: Renumber the remaining records (run it separately)
    $sql_reorder = "SET @new_id = 0";
    $connection->query($sql_reorder); // First query to set the variable

    $sql_update_ids = "UPDATE applicants SET applicant_id = (@new_id := @new_id + 1) ORDER BY applicant_id";
    $connection->query($sql_update_ids); // Second query to update the IDs

    // Step 3: Reset the AUTO_INCREMENT to correct the next id (run it separately)
    $sql_reset_ai = "ALTER TABLE applicants AUTO_INCREMENT = 1";
    $connection->query($sql_reset_ai);

    // Redirect back to applicant.php
    header("location:../View/JobApplicants.php");
    exit;
}
