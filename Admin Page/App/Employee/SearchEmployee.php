<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Page</title>

    <link rel="stylesheet" href="../../public/assets/css/AdminStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
</head>

<body>
    <div class="wrapper">
        <!--sidebar-->
        <?php
        include_once('../../core/includes/sidebar.php');
        ?>

        <!--add employee-->
        <main class="main">
            <!--header-->
            <?php
            include '../../core/includes/navBar.php';
            ?>

            <div class="container-fluid shadow p-3 mb-5 bg-body-tertiary rounded-4">
                <h3 class="fw-bold fs-3">List Of Employees</h3>
                <hr style="padding-bottom: 1.5rem;">
                <div class="d-flex mt">
                    <form action="#" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" name="search" value="" class="form-control" placeholder="Search here!">
                            <button type="submit" class="btn btn-primary btn-md"><i class="bi bi-search"></i></button>
                        </div>
                    </form>

                    <div class="mx-3 mt-0">
                        <div class="form-group">
                            <select class="form-select" id="sort">
                                <option>select</option>
                                <?php
                                //connection
                                include("../../../Database/db.php");
                                //read all row from database table
                                $sql = "SELECT * FROM departments";
                                $result = $connection->query($sql);

                                if (!$result) {
                                    die("Invalid Query" . $connection->error);
                                }
                                //read data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "
                                    <option>$row[name]</option>

                            ";
                                }
                                ?>


                            </select>
                        </div>

                    </div>

                    <div class="ms-auto me-3">
                        <button type='button' class='btn btn-primary btn-md' data-bs-toggle='modal' data-bs-target='#AddEmployee'>
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
                                <th>DEPARTMENT</th>
                                <th>CONTACT</th>
                                <th>HIRE DATE</th>
                                <th>OPERATIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //connection
                            include("../../../Database/db.php");
                            //read all row from database table
                            $search = isset($_GET['search']) ? $_GET['search'] : '';

                            // Prepare SQL query
                            if (!empty($search)) {
                                $searchTerm = $connection->real_escape_string($search);
                                $sql = "SELECT * FROM employees WHERE username LIKE '%$searchTerm%' ORDER BY employee_id DESC";
                            } else {
                                $sql = "SELECT * FROM employees ORDER BY employee_id DESC";
                            }

                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid Query: " . $connection->error);
                            }
                            //read data of each row
                            while ($row = $result->fetch_assoc()) {
                                $modalId = "editEmployeeModal" . $row['employee_id'];
                                echo "
                            <tr>
                                <td>$row[employee_id]</td>
                                <td>$row[username]</td>
                                <td>$row[email]</td>
                                <td>$row[department]</td>
                                <td>$row[ContactNumber]</td>
                                <td>$row[hire_date]</td>
                                <td>
                                    <!-- Edit Button (Opens Modal) -->
                                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#$modalId'>
                                        <i class='bi bi-pencil-square'></i>
                                    </button>

                                    <!-- Modal for Editing Employee -->
                                    <div class='modal fade' id='$modalId' tabindex='-1' aria-labelledby='editEmployeeLabel' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='editEmployeeLabel'>Edit Employee</h5>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                </div>
                                                <form action='./EditEmployee.php' method='POST'>
                                                    <div class='modal-body'>
                                                        <input type='hidden' name='employee_id' value='$row[employee_id]'>

                                                        <div class='mb-3'>
                                                            <label for='username' class='form-label'>Name</label>
                                                            <input type='text' class='form-control' name='username' value='$row[username]' required>
                                                        </div>

                                                        <div class='mb-3'>
                                                            <label for='email' class='form-label'>Email</label>
                                                            <input type='email' class='form-control' name='email' value='$row[email]' required>
                                                        </div>

                                                        <div class='mb-3'>
                                                            <label for='department' class='form-label'>Department</label>
                                                            <input type='text' class='form-control' name='department' value='$row[department]' required>
                                                        </div>

                                                        <div class='mb-3'>
                                                            <label for='ContactNumber' class='form-label'>Contact Number</label>
                                                            <input type='text' class='form-control' name='ContactNumber' value='$row[ContactNumber]' required>
                                                        </div>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                                        <button type='submit' class='btn btn-primary'>Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Direct Edit Button (Link) -->
                                    <a class='btn btn-warning btn-sm' href='#'>
                                        <i class='bi bi-archive'></i>
                                    </a>
                                    
                                    <!-- Delete Button -->
                                     <button type='button' class='btn btn-danger btn-sm' data-bs-toggle='modal' 
                                            data-bs-target='#DeleteEmployee' onclick='setEmployeeIdForDelete($row[employee_id])'>
                                           <i class='bi bi-trash'></i>
                                    </button>
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
    <!-- Modal Add Employee-->

    <?php
    include("./AddEmployee.php");
    include("./DeleteEmployee.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="../../Public/Assets/Js/AdminPage.js"></script>
</body>

</html>