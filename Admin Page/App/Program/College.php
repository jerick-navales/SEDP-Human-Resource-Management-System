<?php
//connection
$title = 'Dashboard';
$page = 'Employee';

include("../../../Database/db.php");

$username = "";
$email = "";
$ContactNumber = "";
$department = "";
$password = "";

$errorMessage = "";
$successMessage = "";
?>

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
                <h3 class="fw-bold fs-3">List Of College Scholars</h3>
                <hr style="padding-bottom: 1.5rem;">
                <div class="d-flex mt ">
                    <form action="../Scholar/SearchRecipient.php" method="GET">
                        <div class="input-group mb-3 ">
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
                </div>

                <br>
                <div class="table-responsive-md">
                    <table class="table table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>GRADE LEVEL</th>
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
                                $modalId = "editRecipientModal" . $row['recipient_id'];
                                echo "
                            <tr>
                                <td>$row[recipient_id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[GradeLevel]</td>
                                <td>$row[school]</td>
                                <td>$row[contact]</td>
                                <td>$row[admission_date]</td>
                                <td>
                                    <!-- Edit Button (Opens Modal) -->
                                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#$modalId'>
                                        <i class='bi bi-pencil-square'></i>
                                    </button>

                                    <!-- Modal for Editing Recipient -->
                                    <div class='modal fade' id='$modalId' tabindex='-1' aria-labelledby='editRecipientLabel' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='editRecipientLabel'>Edit Recipient</h5>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                </div>
                                                <form action='../Scholar/EditRecipient.php' method='POST'>
                                                    <div class='modal-body'>
                                                        <input type='hidden' name='recipient_id' value='$row[recipient_id]'>

                                                        <div class='mb-3'>
                                                            <label for='name' class='form-label'>Name</label>
                                                            <input type='text' class='form-control' name='name' value='$row[name]' required>
                                                        </div>

                                                        <div class='mb-3'>
                                                            <label for='email' class='form-label'>Email</label>
                                                            <input type='email' class='form-control' name='email' value='$row[email]' required>
                                                        </div>

                                                        <div class='mb-3'>
                                                            <label for='school' class='form-label'>School</label>
                                                            <input type='text' class='form-control' name='school' value='$row[school]' required>
                                                        </div>

                                                        <div class='mb-3'>
                                                            <label for='contact' class='form-label'>Contact Number</label>
                                                            <input type='text' class='form-control' name='contact' value='$row[contact]' required>
                                                        </div>
                                                        <div class='mb-3'>
                                                            <label for='GradeLevel' class='form-label'>Grade Level</label>
                                                            <input type='text' class='form-control' name='GradeLevel' value='$row[GradeLevel]' required>
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
                                    <!-- Delete Button -->
                                    <a class='btn btn-danger btn-sm' href='../Scholar/DeleteRecipient.php?recipient_id=$row[recipient_id]'>
                                        <i class='bi bi-trash'></i>
                                    </a>
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
    include("../Employee/SampleCreate.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="../../Public/Assets/Js/AdminPage.js"></script>
</body>

</html>