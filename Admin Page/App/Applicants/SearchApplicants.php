<?php
$title = "Job Applicants | SEDP HRMS";
$page = "jobapplicants";
include('../../Core/Includes/header.php');
?>
<div class="wrapper">
    <!--sidebars-->
    <?php
    include_once('../../Core/Includes/sidebar.php');
    ?>
    <!--add employee-->
    <main class="main">
        <?php
        include '../../Core/Includes/navbar.php';
        ?>
        <div class="container-fluid shadow p-3 mb-5 bg-body-tertiary rounded-4">
            <h3 class="fw-bold">List Of Applicants</h3>
            <hr>
            <div class="row">
                <div class="col-4 ms-auto">
                    <form action="#" method="GET">
                        <div class="input-group mb-3 ">
                            <input type="text" name="search" value="" class="form-control" placeholder="Search Name Of Applicant">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>APPLIED DATE</th>
                        <th>OPERATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Connection
                    include("../../../Database/db.php");

                    // Check if search term is set and not empty
                    $search = isset($_GET['search']) ? $_GET['search'] : '';

                    // Prepare SQL query
                    if (!empty($search)) {
                        $searchTerm = $connection->real_escape_string($search);
                        $sql = "SELECT * FROM applicants WHERE name LIKE '%$searchTerm%' ORDER BY applicant_id ASC";
                    } else {
                        $sql = "SELECT * FROM applicants ORDER BY applicant_id ASC";
                    }

                    $result = $connection->query($sql);

                    if (!$result) {
                        die("Invalid Query: " . $connection->error);
                    }

                    // Read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>{$row['applicant_id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['applied_date']}</td>
                            <td>
                                <a class='btn btn-danger btn-sm' href='./DeleteApplicants.php?applicant_id=$row[applicant_id]'><i class='bi bi-trash'></i></a>
                            </td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="../../public/assets/javascript/AdminPage.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

</html>