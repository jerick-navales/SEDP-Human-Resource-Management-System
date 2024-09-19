        <!-- Modal -->
        <div class="modal fade" id="AddRecipient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Recipient</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="../Dao/Scholar-db/AddRecipient-db.php" method="Post">
                        <div class="modal-body">

                            <input type="hidden" name="recipient_id" value="<?php echo htmlspecialchars($recipient_id); ?>">
                            <div class="form-group mb-2">
                                <label class="col-sm-6 col-form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label class="col-sm-6 col-form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                            </div>

                            <div class="form-group mb-2">
                                <label class="col-sm-6 col-form-label">School</label>
                                <input type=" text" class="form-control" name="school" value="<?php echo $school; ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label class="col-sm-6 col-form-label">Contact Number</label>
                                <input type=" number" class="form-control" name="contact" value="<?php echo $contact; ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label class="col col-form-label">GradeLevel</label>
                                <select class="form-select" name="GradeLevel" required>
                                    <option value="">Select</option>
                                    <?php
                                    $sql = "SELECT * FROM grade_level";
                                    $result = $connection->query($sql);

                                    if (!$result) {
                                        die("Invalid Query: " . $connection->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        $selected = ($GradeLevel == $row['name']) ? 'selected' : '';
                                        echo "<option value='{$row['name']}' $selected>{$row['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>