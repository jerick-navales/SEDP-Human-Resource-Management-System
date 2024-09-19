<?php
//connection
$title = 'Dashboard';
$page = 'Applicants';

include("../../../Database/db.php");

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

        <!--add employees-->
        <main class="main">
            <!--header-->
            <?php
            include '../../core/includes/navBar.php';
            ?>

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
                <h3 class="fw-bold fs-3">List Of Employees</h3>
                <hr style="padding-bottom: 1.5rem;">
                <h1>Applicants View</h1>
                <p>Comming Soon..</p>

            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="../../Public/Assets/Js/AdminPage.js"></script>
</body>

</html>