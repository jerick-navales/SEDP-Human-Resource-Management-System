<div class="modal fade" id="CreateBranch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Branch</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="../Dao/Branch-db/CreateBranch_db.php" method="POST">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="col-form-label">Location</label>
                        <input type="text" class="form-control" name="location" value="<?php echo htmlspecialchars($location); ?>" required>
                    </div>

                    <!-- Error messages -->
                    <?php if (!empty($errorMessage)) { ?>
                        <div class='alert alert-danger'>
                            <strong><?php echo htmlspecialchars($errorMessage); ?></strong>
                        </div>
                    <?php } ?>

                    <!-- Success message -->
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