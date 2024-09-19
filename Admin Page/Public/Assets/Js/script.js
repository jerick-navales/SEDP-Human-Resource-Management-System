$(document).ready(function() {
    let isSubmitting = false; // Flag to prevent multiple submissions

    fetchRecipients();

    $('#recipientForm').on('submit', function(e) {
        e.preventDefault();

        if (isSubmitting) return; // Prevent multiple submissions

        isSubmitting = true; // Set flag to true

        let formData = $(this).serialize();
        let action = $('#recipientId').val() ? 'update' : 'add';
        $.ajax({
            url: 'crud.php',
            method: 'POST',
            data: formData + '&action=' + action,
            success: function(response) {
                // Handle success
                $('#addEditModal').modal('hide');
                console.log('Modal should be hidden now'); // Debug log
                $('#recipientForm')[0].reset(); // Reset the form
                $('#recipientId').val(''); // Clear the recipientId
                fetchRecipients(); // Refresh the recipient list
                isSubmitting = false; // Reset flag
            },
            error: function() {
                alert('An error occurred. Please try again.');
                isSubmitting = false; // Reset flag on error
            }
        });
    });

    $(document).on('click', '.edit', function() {
        let id = $(this).data('id');
        $.ajax({
            url: 'crud.php',
            method: 'POST',
            data: { id: id, action: 'edit' },
            dataType: 'json',
            success: function(data) {
                $('#recipientId').val(data.id);
                $('#name').val(data.name);
                $('#school').val(data.school);
                $('#contact_no').val(data.contact_no);
                $('#admission_date').val(data.admission_date);
                $('#addEditModal').modal('show');
            },
            error: function() {
                alert('An error occurred. Please try again.');
            }
        });
    });

    $(document).on('click', '.delete', function() {
        if (confirm("Are you sure you want to delete this record?")) {
            let id = $(this).data('id');
            $.ajax({
                url: 'crud.php',
                method: 'POST',
                data: { id: id, action: 'delete' },
                success: function(response) {
                    fetchRecipients();
                },
                error: function() {
                    alert('An error occurred. Please try again.');
                }
            });
        }
    });

    function fetchRecipients() {
        $.ajax({
            url: 'crud.php',
            method: 'POST',
            data: { action: 'fetch' },
            success: function(response) {
                $('#recipientTable').html(response);
            },
            error: function() {
                alert('An error occurred while fetching data.');
            }
        });
    }
});