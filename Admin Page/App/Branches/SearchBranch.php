<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branch Page</title>

    <link rel="stylesheet" href="../../public/assets/css/AdminStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
</head>

<body>
    <div class="wrapper">
        <!--sidebars-->
        <?php
        include_once('../../core/includes/sidebar.php');
        ?>

        <!--add employee-->
        <main class="main">
            <!--header-->
            <?php
            include '../../core/includes/navBar.php';
            ?>

            <div class="container-fluid shadow p-3 mb-5 bg-body-tertiary rounded-4" my-4>
                <br>
                <h3>List Of Branches</h3>
                <hr>
                <div class="row">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end px-6">
                        <form action="../models/branch/search-branch.php" method="GET">
                            <div class="input-group mb-2">
                                <input type="text" name="search" value="" class="form-control" placeholder="Search Branch">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                        <div class="ms-auto me-3">
                            <button type='button' class='btn btn-primary btn-md' data-bs-toggle='modal' data-bs-target='#CreateBranch'>
                                Create Branch
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <table class="table table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>LOCATION</th>
                            <th>CREATED DATE</th>
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
                            $sql = "SELECT * FROM branches WHERE name LIKE '%$searchTerm%' ORDER BY branch_id DESC";
                        } else {
                            $sql = "SELECT * FROM branches ORDER BY branch_id DESC";
                        }

                        $result = $connection->query($sql);

                        if (!$result) {
                            die("Invalid Query: " . $connection->error);
                        }
                        //read data of each row
                        while ($row = $result->fetch_assoc()) {

                            echo "
                        <tr>
                            <td>$row[branch_id]</td>
                            <td>$row[name]</td>
                            <td>$row[location]</td>
                            <td>$row[created_date]</td>
                            <td>
                                <!-- Edit Button (Opens Modal) -->
                                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#EditBranch'>
                                        <i class='bi bi-pencil-square'></i>
                                    </button>

                                    <!-- Modal for Editing Employee -->
                                    <div class='modal fade' id='EditBranch' tabindex='-1' aria-labelledby='editBranchLabel' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='editBranchLabel'>Edit Branch</h5>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                </div>
                                                <form action='../Branches/EditBranch.php' method='POST'>
                                                    <div class='modal-body'>
                                                        <input type='hidden' name='branch_id' value='$row[branch_id]'>

                                                        <div class='mb-3'>
                                                            <label for='name' class='form-label'>Name</label>
                                                            <input type='text' class='form-control' name='name' value='$row[name]' required>
                                                        </div>

                                                        <div class='mb-3'>
                                                            <label for='location' class='form-label'>Location</label>
                                                            <input type='text' class='form-control' name='location' value='$row[location]' required>
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
                                     <button type='button' class='btn btn-danger btn-sm' data-bs-toggle='modal' 
                                            data-bs-target='#DeleteBranch' onclick='setBranchIdForDelete($row[branch_id])'>
                                           <i class='bi bi-trash'></i>
                                    </button>
                                </td>
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
    <!-- Modal Add branch-->
    <?php
    include("./CreateBranche.php");
    include("./DeleteBranch.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="../../Public/Assets/Js/AdminPage.js"></script>
</body>

</html>