<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["job_id"])) {
        $job_id = $_POST["job_id"];

        // Connection
        include("../../../../Database/db.php");

        // Step 1: Delete the record with the specified job_id
        $sql = "DELETE FROM job WHERE job_id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $job_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Renumber IDs after deletion
            // Step 2: Set a session variable to renumber the ID
            $sql_reorder = "SET @new_id = 0";
            $connection->query($sql_reorder);

            // Step 3: Renumber remaining IDs
            $sql_update_ids = "UPDATE job SET job_id = (@new_id := @new_id + 1) ORDER BY job_id";
            $connection->query($sql_update_ids);

            // Step 4: Reset the AUTO_INCREMENT value
            $sql_reset_ai = "ALTER TABLE job AUTO_INCREMENT = 1";
            $connection->query($sql_reset_ai);

            // Optional: Add a success message
            $successMessage = "job deleted and IDs renumbered successfully.";
        } else {
            $errorMessage = "Failed to delete the job.";
        }

        $stmt->close();
        $connection->close();

        // Redirect back to job.php
        header("location:../../View/ReqcruitmentPage.php");
        exit;
    }
}
