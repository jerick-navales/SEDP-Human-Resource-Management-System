<div class="modal fade" id="Sample" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Branch</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <form action="../Dao/Branch-db/CreateBranch_db.php" method="POST">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label class="col col-form-label">Name</label>
                        <input type="text" class="form-control" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="col col-form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="col col-form-label">Contact Number</label>
                        <input type="text" class="form-control" name="ContactNumber" value="<?php echo htmlspecialchars($ContactNumber); ?>" required>
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

                    <?php if (!empty($errorMessage)) { ?>
                        <div class='alert alert-danger'>
                            <strong><?php echo htmlspecialchars($errorMessage); ?></strong>
                        </div>
                    <?php } ?>

                    <?php if (!empty($successMessage)) { ?>
                        <div class='alert alert-success'>
                            <strong><?php echo htmlspecialchars($successMessage); ?></strong>
                        </div>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>