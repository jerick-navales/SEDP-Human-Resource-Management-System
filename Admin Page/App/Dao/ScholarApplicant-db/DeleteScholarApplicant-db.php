<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["scholar_id"])) {
        $scholar_id = $_POST["scholar_id"];

        include('../../../../Database/db.php');

        // Step 1: Delete the record with the specifieds scholar_id
        $sql = "DELETE FROM scholar_applicant WHERE scholar_id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $scholar_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Step 2: Renumber remaining scholar_id values after deletion
            $sql_reorder = "SET @new_id = 0";
            $connection->query($sql_reorder);

            // Update the scholar_id by incrementing with new sequential values
            $sql_update_ids = "UPDATE scholar_applicant SET scholar_id = (@new_id := @new_id + 1) ORDER BY scholar_id";
            $connection->query($sql_update_ids);

            // Step 3: Reset AUTO_INCREMENT to the correct value
            $sql_reset_ai = "ALTER TABLE scholar_applicant AUTO_INCREMENT = 1";
            $connection->query($sql_reset_ai);

            $successMessage = "scholar deleted and IDs reordered successfully!";
        } else {
            echo "hello";
            $errorMessage = "Failed to delete the scholar.";
        }

        $stmt->close();
        $connection->close();

        // Redirect back to the scholar page
        header("location:../../View/ScholarApplicant.php");
        exit;
    }
}
