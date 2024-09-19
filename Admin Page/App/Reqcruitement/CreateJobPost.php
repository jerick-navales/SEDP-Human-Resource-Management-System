        <!-- Modal -->
        <div class="modal fade" id="CreateJobPost" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Post Job</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form method="post">
                        <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                            <div class="form-group mb-3">
                                <label class="col-form-label">Job title</label>
                                <input required type="text" class="form-control" name="title" value="<?php echo $title; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-form-label">Job Description</label>
                                <textarea required class="form-control" name="JobDescription"><?php echo $JobDescription; ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-form-label">Qualification</label>
                                <input type="text" class="form-control" name="qualification" value="<?php echo $qualification; ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-form-label">Location</label>
                                <input type="text" class="form-control" name="location" value="<?php echo $location; ?> " required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-form-label">Salary range</label>
                                <input type="number" class="form-control" name="salary" value="<?php echo $salary; ?> " required>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-form-label">Employee Type</label>
                                <select class="form-select" name="EmployeeType">
                                    <option value="PartTime">Part time</option>
                                    <option value="FullTime">Full time</option>
                                    <option value="freelance">Freelance</option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>