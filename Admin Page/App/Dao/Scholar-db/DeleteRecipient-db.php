<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["recipient_id"])) {
        $recipient_id = $_POST["recipient_id"];

        include('../../../../Database/db.php');

        // Step 1: Delete the records with the specified recipient_id
        $sql = "DELETE FROM recipient WHERE recipient_id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $recipient_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Step 2: Renumber remaining recipient_id values after deletion
            $sql_reorder = "SET @new_id = 0";
            $connection->query($sql_reorder);

            // Update the recipient_id by incrementing with new sequential values
            $sql_update_ids = "UPDATE recipient SET recipient_id = (@new_id := @new_id + 1) ORDER BY recipient_id";
            $connection->query($sql_update_ids);

            // Step 3: Reset AUTO_INCREMENT to the correct value
            $sql_reset_ai = "ALTER TABLE recipient AUTO_INCREMENT = 1";
            $connection->query($sql_reset_ai);

            $successMessage = "recipient deleted and IDs reordered successfully!";
        } else {
            $errorMessage = "Failed to delete the recipient.";
        }

        $stmt->close();
        $connection->close();

        // Redirect back to the recipient page
        header("location:../../View/recipients.php");
        exit;
    }
}
