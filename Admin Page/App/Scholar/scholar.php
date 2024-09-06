<?php
session_start();
include('../../../Database/database.php');

// Fetching data from the database
$query = "SELECT id, name, school, contact_no, admission_date FROM recipient";
$stmt = $pdo->prepare($query);
$stmt->execute();
$recipients = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Recipient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <h1>Scholarship Recipient</h1>
        <div class="row mb-3">
            <div class="col-md-6">
                <!-- Search and sort (if needed) -->
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>School</th>
                    <th>Contact No.</th>
                    <th>Admission Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <?php
                foreach ($recipients as $row) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['school']}</td>";
                    echo "<td>{$row['contact_no']}</td>";
                    echo "<td>{$row['admission_date']}</td>";
                    echo "<td>
                            <a href='#' class='btn btn-edit btn-sm' data-id='{$row['id']}' data-bs-toggle='modal' data-bs-target='#editModal'>Edit</a>
                            <a href='#' class='btn btn-delete btn-sm mt-1' data-id='{$row['id']}'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Scholar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addForm">
                        <!-- Form fields here -->
                        <button type="submit" class="btn btn-primary">Add Scholar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Scholar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <input type="hidden" id="edit_id" name="id">
                        <!-- Form fields here -->
                        <button type="submit" class="btn btn-primary">Update Scholar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle add form submission
            document.getElementById('addForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);

                fetch('add_scholar.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        location.reload(); // Reload the page to reflect changes
                    } else {
                        alert('Failed to add scholar.');
                    }
                });
            });

            // Handle edit button click
            document.querySelectorAll('.btn-edit').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');

                    fetch(`edit_scholar.php?id=${id}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('edit_id').value = data.id;
                        document.getElementById('edit_scholar_name').value = data.scholar_name;
                        document.getElementById('edit_school').value = data.school;
                        document.getElementById('edit_contact_no').value = data.contact_no;
                        document.getElementById('edit_admission_date').value = data.admission_date;
                    });
                });
            });

            // Handle edit form submission
            document.getElementById('editForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);

                fetch('edit_scholar.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        location.reload(); // Reload the page to reflect changes
                    } else {
                        alert('Failed to update scholar.');
                    }
                });
            });

            // Handle delete button click
            document.querySelectorAll('.btn-delete').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const id = this.getAttribute('data-id');

                    if (confirm('Are you sure you want to delete this scholar?')) {
                        fetch(`delete_scholar.php?id=${id}`, {
                            method: 'GET'
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                location.reload(); // Reload the page to reflect changes
                            } else {
                                alert('Failed to delete scholar.');
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
