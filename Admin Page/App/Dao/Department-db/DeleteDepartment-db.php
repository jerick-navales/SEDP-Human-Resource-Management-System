<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["department_id"])) {
        $department_id = $_POST["department_id"];

        // Connections
        include("../../../../Database/db.php");

        // Step 1: Delete the record with the specified department_id
        $sql = "DELETE FROM departments WHERE department_id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $department_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Renumber IDs after deletion
            // Step 2: Set a session variable to renumber the IDs
            $sql_reorder = "SET @new_id = 0";
            $connection->query($sql_reorder);

            // Step 3: Renumber remaining IDs
            $sql_update_ids = "UPDATE departments SET department_id = (@new_id := @new_id + 1) ORDER BY department_id";
            $connection->query($sql_update_ids);

            // Step 4: Reset the AUTO_INCREMENT value
            $sql_reset_ai = "ALTER TABLE departments AUTO_INCREMENT = 1";
            $connection->query($sql_reset_ai);

            // Optional: Add a success message
            $successMessage = "department deleted and IDs renumbered successfully.";
        } else {
            $errorMessage = "Failed to delete the department.";
        }

        $stmt->close();
        $connection->close();

        // Redirect back to department.php
        header("location:../../View/Department.php");
        exit;
    }
}
