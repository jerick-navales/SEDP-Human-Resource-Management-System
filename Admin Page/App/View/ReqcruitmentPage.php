<?php
$title = "Reqcruitment | SEDP HRMS";
$page = "reqcruitment";
include('../../Core/Includes/header.php');
include('../../../Database/db.php');

// Initialize variables
$title = "";
$JobDescription = "";
$qualification = "";
$location = "";
$salary = "";
$EmployeeType = "";

$errorMessage = "";
$successMessage = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $JobDescription = $_POST['JobDescription'] ?? '';
    $qualification = $_POST['qualification'] ?? '';
    $location = $_POST['location'] ?? '';
    $salary = $_POST['salary'] ?? '';
    $EmployeeType = $_POST['EmployeeType'] ?? '';

    // Validate required field
    if (empty($title) || empty($JobDescription) || empty($qualification) || empty($location) || empty($salary) || empty($EmployeeType)) {
        $errorMessage = "All fields are required";
    } else {
        // Insert into the database
        $sql = "INSERT INTO job (title, JobDescription, qualification, location, salary, EmployeeType) 
                VALUES ('$title', '$JobDescription', '$qualification', '$location', '$salary', '$EmployeeType')";

        if (mysqli_query($connection, $sql)) {
            $successMessage = "New job added successfully!";
            header("Location: ReqcruitmentPage.php");
            exit;
        } else {
            $errorMessage = "Error: " . mysqli_error($connection);
        }
    }
}
?>

<div class="wrapper">
    <!-- Sidebar -->
    <?php include '../../Core/Includes/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main">
        <!-- Header -->
        <?php include '../../Core/Includes/navbar.php'; ?>

        <!-- Main Content -->
        <div class="container-fluid">
            <div class="d-flex justify-content-end mx-lg-5 gap-2">
                <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#CreateJobPost">Post Job</button>
                <a href="../../../JobPage/Jobpage.php" class="btn btn-info">View</a>
            </div>

            <!-- Job Offers Section -->
            <section>
                <div class="container my-5 bg-light">
                    <div class="row">
                        <h1 class="text-center fw-bold fs-3 my-3">Company Current Job Offers:</h1>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <?php
                        // Read all rows from the database
                        $sql = "SELECT * FROM job";
                        $result = $connection->query($sql);

                        if (!$result) {
                            die("Invalid Query: " . $connection->error);
                        }

                        // Display each job
                        while ($row = $result->fetch_assoc()) {
                            $modalId = "editJobPost" . $row['job_id'];
                            echo "
                                <div class='col-lg-6'>
                                    <div class='card mb-3 shadow'>
                                        <div class='card-body'>
                                            <h5 class='card-title'><i class='bi bi-briefcase-fill'></i> {$row['title']}</h5>
                                            <p class='card-text'><i class='bi bi-card-checklist'></i> Job Description: {$row['JobDescription']}</p>
                                            <p class='card-text'><i class='bi bi-clipboard-check'></i> Qualification: {$row['qualification']}</p>
                                            <div class='d-flex justify-content-end mx-2 gap-2'>
                                                <!-- Edit Button -->
                                                <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#$modalId'>
                                                <i class='bi bi-pencil-square'></i>
                                                </button>

                                                <!-- Edit Modal -->
                                                <div class='modal fade' id='$modalId' tabindex='-1' aria-labelledby='editJobPostLabel' aria-hidden='true'>
                                                    <div class='modal-dialog modal-dialog-centered'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <h1 class='modal-title fs-5' id='editJobPostLabel'>Edit Job</h1>
                                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                            </div>
                                                            <form method='POST' action='../Dao/Reqcruitement/EditJobPost.php'>
                                                                <div class='modal-body'>
                                                                    <input type='hidden' name='job_id' value='{$row['job_id']}'>
                                                                    <div class='form-group mb-3'>
                                                                        <label class='col-form-label'>Job Title</label>
                                                                        <input type='text' class='form-control' name='title' value='{$row['title']}'>
                                                                    </div>
                                                                    <div class='form-group mb-3'>
                                                                        <label class='col-form-label'>Job Description</label>
                                                                        <textarea class='form-control' name='JobDescription'>{$row['JobDescription']}</textarea>
                                                                    </div>
                                                                    <div class='form-group mb-3'>
                                                                        <label class='col-form-label'>Qualification</label>
                                                                        <input type='text' class='form-control' name='qualification' value='{$row['qualification']}'>
                                                                    </div>
                                                                    <div class='form-group mb-3'>
                                                                        <label class='col-form-label'>Location</label>
                                                                        <input type='text' class='form-control' name='location' value='{$row['location']}'>
                                                                    </div>
                                                                    <div class='form-group mb-3'>
                                                                        <label class='col-form-label'>Salary</label>
                                                                        <input type='text' class='form-control' name='salary' value='{$row['salary']}'>
                                                                    </div>
                                                                    <div class='form-group mb-4'>
                                                                        <label class='col-form-label'>Employee Type</label>
                                                                        <select class='form-select' name='EmployeeType'>
                                                                            <option value='PartTime'>Part-time</option>
                                                                            <option value='FullTime'>Full-time</option>
                                                                            <option value='freelance'>Freelance</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class='modal-footer'>
                                                                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cancel</button>
                                                                    <button type='submit' class='btn btn-primary'>Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Delete Button -->
                                                <button type='button' class='btn btn-danger btn-sm' data-bs-toggle='modal' 
                                                        data-bs-target='#DeleteJob' onclick='setJobIdForDelete($row[job_id])'>
                                                    <i class='bi bi-trash'></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>

        <!-- Create Job Post Modal -->
        <?php
        include('../Reqcruitement/CreateJobPost.php');
        include('../Reqcruitement/DeleteJobPost.php');
        ?>
    </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../../public/assets/javascript/AdminPage.js"></script>
</body>

</html>