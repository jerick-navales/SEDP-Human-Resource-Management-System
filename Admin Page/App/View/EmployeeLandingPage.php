<?php
$title="Employee List";
$page="employeelist";
include('../../Core/Includes/header.php');
?>
   <?php
    include('../Service/ModalEditEmployee.php');
    ?>
    <div class="wrapper">
        <!--sidebar-->
        <?php
            include_once('../../Core/Includes/sideBar.php');
        ?>
        <!--add employee-->
        <main class="main">
        <!--header-->
        <?php
            include'../../Core/Includes/navBar.php';
        ?>
            <div class="container-fluid shadow p-3 mb-5 bg-white rounded">
                <h3 class="fw-bold fs-3 mx-2">List Of Employees</h3>
                <hr>
                <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="../models/employee/createEmployee.php">Add Employee</a>
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
                            <th>HIRE DATE</th>
                            <th>OPERATIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    //connection
                    include("../../../Database/database.php");
                    //read all row from database table
                    $sql= "SELECT * FROM employees";
                    $result = $connection->query($sql);
        
                    if (!$result) {
                        die("Invalid Query". $connection->error);
                    }
                    //read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo"
                        <tr>
                            <td>$row[employee_id]</td>
                            <td>$row[username]</td>
                            <td>$row[email]</td>
                            <td>$row[department]</td>
                            <td>$row[hire_date]</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                <i class='bi bi-pencil-square'></i>
                                </button>
                                <a class='btn btn-primary btn-sm ' href='../models/employee/editEmployee.php?employee_id=$row[employee_id]'><i class='bi bi-pencil-square'></i></a>
                                <a class='btn btn-danger btn-sm' href='../models/employee/deleteEmployee.php?employee_id=$row[employee_id]'><i class='bi bi-trash'></i></a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="../../Assets/Js/AdminPage.js"></script>
</body>

</html>