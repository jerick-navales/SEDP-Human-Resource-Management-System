<?php
$title = 'Scholar Program';
$page = 'scholar program';

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
        <!--Main Containers-->
        <div class="container-fluid shadow p-2 mb-5 bg-body-tertiary rounded-4">
            <h3 class="fw-bold fs-3">Program</h3>
            <hr style="padding-bottom: 1.5rem;">
            <div class="d-flex mt">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="card mb-4 mx-lg-5 shadow p-3 mb-5 bg-body-tertiary roundeds md-sm-4" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 ">
                                        <img src="../../Public/Assets/Images/college.png" class="img-fluid rounded-start" alt="..." style="width: 300px; height:240px">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">College/Tertiary Scholarhip</h5>
                                            <p class="card-text">Financial aid to students pursuing higher education, covering tuition and other expenses, supporting academic achievement and career development.</p>
                                            <div class="card-body">
                                                <a href="../Program/College.php" class="btn btn-primary ">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mx-lg-5 shadow p-3 mb-5 bg-body-tertiary rounded" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 ">
                                        <img src="../../Public/Assets/Images/elementary.png" class="img-fluid rounded-start" alt="..." style="width: 300px;height:250px">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">Primary Education Scholarship</h5>
                                            <p class="card-text">Offer financial support for young students, covering tuition and essentials, ensuring access to quality education and equal opportunities.</p>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-primary ">Comming soon..</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<?php
include('../../../Assets/Js/bootstrap.js')
?>
</body>

</html>