<div class="col-sm-6 mb-3 col-lg-3 col-md-6">
    <div class="card border-0 shadow-sm">
        <div class="card-body d-flex align-items-center justify-content-between fw-bold fs-1">
            <div>
                <h6 class="card-title mb-1 fw-bold fs-4">Employees</h6>
                <?php
                // Assuming you already have a database connection included
                $sql = "SELECT COUNT(*) AS employee_count FROM employees"; // Correct SQL syntax
                $result = $connection->query($sql); // Running the query

                if ($result) {
                    $row = $result->fetch_assoc();
                    $employee_count = $row['employee_count']; // Fetching the count
                } else {
                    $employee_count = 0;
                }

                // Display the employee count
                echo '<p class="card-text fw-bold fs-1 mx-3">' . $employee_count . '</p>';
                ?>
            </div>
            <i class="lni lni-users"></i>
        </div>
        <a href="./Employee.php" class="card-link m-2 text-end mt-0">view</a>
    </div>
</div>