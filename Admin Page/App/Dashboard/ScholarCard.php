<div class="col-sm-6 mb-3 col-lg-3 col-md-6">
    <div class="card border-0 shadow-sm">
        <div class="card-body d-flex align-items-center justify-content-between fw-bold fs-1 ">
            <div>
                <h6 class="card-title mb-1 fw-bold fs-4">Scholars</h6>
                <?php
                // Assuming you already have a database connection included
                $sql = "SELECT COUNT(*) AS scholar_count FROM recipient"; // Correct SQL syntax
                $result = $connection->query($sql); // Running the query

                if ($result) {
                    $row = $result->fetch_assoc();
                    $scholar_count = $row['scholar_count']; // Fetching the count
                } else {
                    $scholar_count = 0; // Default if there's an error
                }
                // Display the employee count
                echo '<p class="card-text fw-bold fs-1 mx-3">' . $scholar_count . '</p>';
                ?>
            </div>
            <i class="lni lni-graduation"></i>

        </div>
        <a href="./recipients.php" class="card-link m-2 text-end mt-0">view</a>
    </div>
</div>