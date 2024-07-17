<?php
$title = 'Scholar Recipient';
$page = 'scholar recipient';

include('../../Core/Includes/header.php');
include('../../../Database/database.php');

// Fetching data from the database
$query = "SELECT id, scholar_name, school, contact_no, admission_date FROM recipient";
$stmt = $pdo->prepare($query);
$stmt->execute();
$recipients = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Handle form submission for adding a new recipient
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $scholarName = $_POST['scholar_name'];
    $school = $_POST['school'];
    $contactNo = $_POST['contact_no'];
    $admissionDate = $_POST['admission_date'];

    // Insert into database
    $insertQuery = "INSERT INTO recipient (scholar_name, school, contact_no, admission_date) VALUES (:scholarName, :school, :contactNo, :admissionDate)";
    $stmt = $pdo->prepare($insertQuery);
    $stmt->execute([
        ':scholarName' => $scholarName,
        ':school' => $school,
        ':contactNo' => $contactNo,
        ':admissionDate' => $admissionDate
    ]);

    // Redirect to refresh the page after inserting
    header("Location: scholar.php");
    exit();
}

// Handle deletion of recipient
if (isset($_GET['delete_id']) && is_numeric($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    
    // Delete from database
    $deleteQuery = "DELETE FROM recipient WHERE id = :id";
    $stmt = $pdo->prepare($deleteQuery);
    $stmt->execute([':id' => $deleteId]);

    // Redirect to refresh the page after deletion
    header("Location: scholar.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>

    <link rel="shortcut icon" href="../../Public/Assets/Images/SEDPfavicon.png" type="image/x-icon">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Public/Assets/Css/sidebar.css">
    <link rel="stylesheet" href="../../Public/Assets/Css/main.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table-actions {
            text-align: center;
        }

        .table-actions .btn {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            background-color: #f0f0f0; /* Background color for the buttons */
            border: none;
        }

        .table-actions .btn-edit {
            background-color: #007bff; /* Edit button background color */
            color: #fff; /* Text color for edit button */
        }

        .table-actions .btn-delete {
            background-color: #dc3545; /* Delete button background color */
            color: #fff; /* Text color for delete button */
        }

        .search-sort-add {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .search-sort-add .form-control {
            width: 100%;
        }

        @media (max-width: 768px) {
            .search-sort-add {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .fixed-width {
            width: 25%;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php include("../../Core/Includes/sidebar.php"); ?>
        <div class="main p-3">
            <div class="container">
                <h1>Scholarship Recipient</h1>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="search-sort-add">
                            <input type="text" class="form-control" placeholder="Search Scholar" readonly>
                            <select class="form-select" disabled>
                                <option selected>Sort By</option>
                                <option value="1">Name</option>
                                <option value="2">School</option>
                                <option value="3">Admission Date</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <!-- Add button -->
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" class="fixed-width">Name</th>
                            <th scope="col" class="fixed-width">School</th>
                            <th scope="col" class="fixed-width">Contact No.</th>
                            <th scope="col" class="fixed-width">Admission Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($recipients) {
                            foreach ($recipients as $row) {
                                echo "<tr>";
                                echo "<td>{$row['id']}</td>";
                                echo "<td>{$row['scholar_name']}</td>";
                                echo "<td>{$row['school']}</td>";
                                echo "<td>{$row['contact_no']}</td>";
                                echo "<td>{$row['admission_date']}</td>";
                                echo "<td class='table-actions'>
                                        <a href='#' class='btn btn-edit btn-sm'>Edit</a>
                                        <a href='scholar.php?delete_id={$row['id']}' class='btn btn-delete btn-sm mt-1'>Delete</a>
                                      </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center'>No records found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="scholar.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add New Recipient</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="scholar_name" class="form-label">Scholar Name</label>
                            <input type="text" class="form-control" id="scholar_name" name="scholar_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="school" class="form-label">School</label>
                            <input type="text" class="form-control" id="school" name="school" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact_no" class="form-label">Contact No.</label>
                            <input type="text" class="form-control" id="contact_no" name="contact_no" required>
                        </div>
                        <div class="mb-3">
                            <label for="admission_date" class="form-label">Admission Date</label>
                            <input type="date" class="form-control" id="admission_date" name="admission_date" required>
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

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
