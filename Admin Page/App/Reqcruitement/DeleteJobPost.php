<!-- Delete Confirmation Modal -->
<div class="modal fade" id="DeleteJob" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                Are you sure you want to delete this Post?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="POST" action="../Dao/Reqcruitement/DeleteJobPost_db.php">
                    <!-- Use hidden input to pass job_id -->
                    <input type="hidden" id="job_id" name="job_id" value="">
                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to set the job_id in the modal before opening
    function setJobIdForDelete(jobId) {
        document.getElementById('job_id').value = jobId;
    }
</script>