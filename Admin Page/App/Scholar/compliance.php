<?php
$title='Branch';
$page='Branch';

include('../../Core/Includes/header.php');

?>
<div class="wrapper">
        <?php 
            include("../../Core/Includes/sidebar.php");
        ?>
        <div class="main p-3">
            <div class="container">
                <h1>Scholar Program</h1>
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
                            <th scope="col">Description</th>
                            <th scope="col">Requirements</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Unknown</td>
                            <td>Unknown</td>
                            <td>2024-07-17</td>
                            <td class="table-actions horizontal-align">
                                <button class="btn btn-link"><i class="fas fa-ellipsis-v"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>Unknown</td>
                            <td>Unknown</td>
                            <td>2024-07-17</td>
                            <td class="table-actions horizontal-align">
                                <button class="btn btn-link"><i class="fas fa-ellipsis-v"></i></button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php 
    include('../../../Assets/Js/bootstrap.js')
    ?>
</body>

</html>
