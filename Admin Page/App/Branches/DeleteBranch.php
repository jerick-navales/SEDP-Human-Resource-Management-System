<!-- Delete Confirmation Modal -->
<div class="modal fade" id="DeleteBranch" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this branch?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="POST" action="../Dao/Branch-db/DeleteBranch_db.php">
                    <!-- Use hidden input to pass branch_id -->
                    <input type="hidden" id="branch_id" name="branch_id" value="">
                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to set the branch_id in the modal before openings
    function setBranchIdForDelete(branchId) {
        document.getElementById('branch_id').value = branchId;
    }
</script>