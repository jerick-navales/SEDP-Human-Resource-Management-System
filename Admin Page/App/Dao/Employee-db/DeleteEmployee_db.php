<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["employee_id"])) {
        $employee_id = $_POST["employee_id"];

        include('../../../../Database/db.php');

        // Step 1 Delete the record with the specified employee_id
        $sql = "DELETE FROM employees WHERE employee_id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $employee_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Step 2: Renumber remaining employee_id values after deletion
            $sql_reorder = "SET @new_id = 0";
            $connection->query($sql_reorder);

            // Update the employee_id by incrementing with new sequential values
            $sql_update_ids = "UPDATE employees SET employee_id = (@new_id := @new_id + 1) ORDER BY employee_id";
            $connection->query($sql_update_ids);

            // Step 3: Reset AUTO_INCREMENT to the correct value
            $sql_reset_ai = "ALTER TABLE employees AUTO_INCREMENT = 1";
            $connection->query($sql_reset_ai);

            $successMessage = "Employee deleted and IDs reordered successfully!";
        } else {
            $errorMessage = "Failed to delete the employee.";
        }

        $stmt->close();
        $connection->close();

        // Redirect back to the employee page
        header("location:../../View/Employee.php");
        exit;
    }
}
