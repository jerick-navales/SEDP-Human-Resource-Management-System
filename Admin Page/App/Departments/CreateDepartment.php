<div class="modal fade" id="CreateDepartment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Department</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../Dao/Department-db/CreateDepartment_db.php" method="POST">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label class="col col-form-label">Name of Department</label>
                        <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
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
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>