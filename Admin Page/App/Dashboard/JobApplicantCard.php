<div class="col-sm-6 mb-3 col-lg-3 col-md-6">
    <div class="card border-0 shadow-sm">
        <div class="card-body d-flex align-items-center justify-content-between fw-bold fs-1 ">
            <div>
                <h6 class="card-title mb-1 fw-bold fs-5">Job Applicants</h6>
                <?php
                // Assuming you already have a database connection included
                $sql = "SELECT COUNT(*) AS applicant_count FROM applicants"; // Correct SQL syntax
                $result = $connection->query($sql); // Running the query

                if ($result) {
                    $row = $result->fetch_assoc();
                    $applicant_count = $row['applicant_count']; // Fetching the count
                } else {
                    $applicant_count = 0;
                }

                // Display the employee count
                echo '<p class="card-text fw-bold fs-1 mx-3">' . $applicant_count . '</p>';
                ?>
            </div>
            <i class="bi bi-person-lines-fill"></i>

        </div>
        <a href="../View/JobApplicants.php" class="card-link m-2 text-end mt-0">view</a>
    </div>
</div>