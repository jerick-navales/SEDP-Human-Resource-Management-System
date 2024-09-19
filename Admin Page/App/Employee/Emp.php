<?php
include '../../../Database/db.php';

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $ContactNumber = mysqli_real_escape_string($connection, $_POST['ContactNumber']);
    $department = mysqli_real_escape_string($connection, $_POST['department']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $cpassword = password_hash($_POST['cpassword'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    // Check if user exist
    $select = "SELECT * FROM employees WHERE email = '$email' AND ContactNumber = '$ContactNumber' AND department = '$department'";
    $result = mysqli_query($connection, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exists!';
    } else {
        if (!password_verify($_POST['password'], $cpassword)) {
            $error[] = 'passwords do not match!';
        } else {
            $insert = "INSERT INTO employees(name, email, password, ContactNumber, department, role) VALUES('$username','$email','$password','$ContactNumber','$department','$role')";
            if (mysqli_query($connection, $insert)) {
                header('Location: ../View/Employee.php');
                exit;
            } else {
                echo "Error: " . mysqli_error($connection);
            }
        }
    }
}
?>



<div class="modal fade" id="Employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="POST">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <input type='hidden' name='rele' value='employee'>
                        <label class="col col-form-label">Name</label>
                        <input type="text" class="form-control" name="username" minlength="3" maxlength="50" value="<?php echo htmlspecialchars($username); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="col col-form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="col col-form-label">Contact Number</label>
                        <input type="number" class="form-control" name="ContactNumber" maxlength="12" value="<?php echo htmlspecialchars($ContactNumber); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="col col-form-label">Department</label>
                        <select class="form-select" name="department" required>
                            <option value="">Select</option>
                            <?php
                            $sql = "SELECT * FROM departments";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid Query: " . $connection->error);
                            }
                            while ($row = $result->fetch_assoc()) {
                                $selected = ($department == $row['name']) ? 'selected' : '';
                                echo "<option value='{$row['name']}' $selected>{$row['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label class="col col-form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="<?php echo htmlspecialchars($password); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="col col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" value="<?php echo htmlspecialchars($password); ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>