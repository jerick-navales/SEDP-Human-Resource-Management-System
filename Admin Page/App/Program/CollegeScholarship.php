<?php
$title = 'Scholars';
$page = 'scholar';

include('../../Core/Includes/header.php');
?>
<div class="wrapper">
    <?php
    include("../../Core/Includes/sidebar.php");
    ?>
    <div class="main p-3">
        <?php
        include('../../Core/Includes/navBar.php');
        ?>

        <!--Main Container-->
        <main class="main">

            <?php
            if (!empty($errorMessage)) {
                echo "
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                    </div>
                    ";
            }
            ?>
            <?php
            if (!empty($successMessage)) {
                echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-2 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>$successMessage</strong>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                            </div>
                        </div>
                    </div>  
                ";
            }
            ?>

            <div class="container-fluid shadow p-3 mb-5 bg-body-tertiary rounded-4">
                <h3 class="fw-bold fs-3">List Of Scholars</h3>
                <hr style="padding-bottom: 1.5rem;">
                <div class="d-flex mt">
                    <form action="../models/employee/searchEmployee.php" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" name="search" value="" class="form-control" placeholder="Search here!">
                            <button type="submit" class="btn btn-primary btn-md"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                    <div class="mx-2 mt-0">
                        <div class="form-group">
                            <select class="form-select" id="sort">
                                <option value="name">Select</option>
                                <option value="department">Department</option>
                                <option value="hiredate">Hire Date</option>
                            </select>
                        </div>

                    </div>

                    <div class="ms-auto">
                        <button type='button' class='btn btn-primary btn-md' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                            Add Employee
                        </button>
                    </div>
                </div>

                <br>

                <div class="table-responsive-md">
                    <table class="table table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>SCHOOL</th>
                                <th>CONTACT NO</th>
                                <th>ADMISSION DATE</th>
                                <th>OPERATIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //connection
                            include("../../../Database/db.php");
                            //read all row from database table
                            $sql = "SELECT * FROM recipient";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid Query" . $connection->error);
                            }
                            //read data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "
                        <tr>
                            <td>$row[recipient_id]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[school]</td>
                            <td>$row[contact]</td>
                            <td>$row[admission_date]</td>
                            <td>
                                <a class='btn btn-primary btn-sm ' href='../EditRecipient.php?recipient_id=$row[recipient_id]'><i class='bi bi-pencil-square'></i></a>
                                <a class='btn btn-danger btn-sm' href='../DeleteRecipient.php?recipient_id=$row[recipient_id]'><i class='bi bi-trash'></i></a>
                            </td>
                        </tr>
                            ";
                            }
                            ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </main>
    </div>
</div>
<?php
include('../../../Assets/Js/bootstrap.js')
?>
</body>

</html>