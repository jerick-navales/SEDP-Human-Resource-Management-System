<?php
$title = 'Department';
$page = 'department';

include('../../Core/Includes/header.php');

?>
<div class="wrapper">
    <?php
    include("../../Core/Includes/sidebar.php");
    ?>
    <div class="main p-3">
        <?php
        include '../../Core/Includes/navBar.php';
        ?>
        <div class="container-fluid shadow-sm rounded">
            <h1 class="fs-3 mx-2 fw-bold">Departments</h1>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="search-sort-add">
                        <input type="text" class="form-control" placeholder="Search Scholar">
                        <select class="form-select">
                            <option selected>Sort By</option>
                            <option value="1">Name</option>
                            <option value="2">School</option>
                            <option value="3">Admission Date</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact No.</th>
                        <th scope="col">Branch Id.</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>123-456-7890</td>
                        <td>1</td>
                        <td class="table-actions horizontal-align">
                            <button class="btn btn-link"><i class="fas fa-ellipsis-v"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>John Doe</td>
                        <td>123-456-7890</td>
                        <td>4</td>
                        <td class="table-actions horizontal-align">
                            <button class="btn btn-link"><i class="fas fa-ellipsis-v"></i></button>
                        </td>
                    </tr>
                    <!-- Add more rows as neededs -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include('../../../Assets/Js/bootstrap.js');
?>
</body>

</html>