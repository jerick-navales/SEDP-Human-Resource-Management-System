<?php
$title = "Dashboard | SEDP HRMS";
$page = "admindashboard";
include('../../Core/Includes/header.php');
include('../../../Database/db.php');
?>
<div class="wrapper">
    <?php
    include_once('../../Core/Includes/sidebar.php');
    ?>

    <div class="main overflow-y-scroll">
        <!--header-->
        <?php
        include('../../Core/Includes/navBar.php');
        ?>
        <!--Cards-->
        <div class="section">
            <div class="container-fluid">
<<<<<<< HEAD
                <div class="row">
                    <!--Employee Card-->
                    <?php
                    include('../Dashboard/EmployeeCard.php');
                    ?>

                    <!--Scholar Card-->
                    <?php
                    include('../Dashboard/ScholarCard.php');
                    ?>

                    <!--Job Applicant Card-->
                    <?php
                    include('../Dashboard/JobApplicantCard.php');
                    ?>

                    <!--Scholar Applicant Card-->
                    <?php
                    include('../Dashboard/ScholarApplicantCard.php');
                    ?>

=======
            <div class="row">
                
            <div class="col-sm-6 mb-3 col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex align-items-center justify-content-between fw-bold fs-1 ">
                        <div>
                            <h6 class="card-title mb-1 fw-bold fs-4">Employees</h6>
                            <p class="card-text fw-bold fs-1">23</p>
                        </div>
                            <i class="lni lni-users"></i>
                            
                    </div>
                    <a href="EmployeeLandingPage.php" class="card-link m-2 text-end mt-0" style="color: #003c3c;">view</a>
                </div>
            </div>
            

            <div class="col-sm-6 mb-3 col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex align-items-center justify-content-between fw-bold fs-1 ">
                        <div>
                            <h6 class="card-title mb-1 fw-bold fs-4">Scholars</h6>
                            <p class="card-text fw-bold fs-1">15</p>
                        </div>
                        <i class="lni lni-graduation"></i>
                            
                    </div>
                    <a href="../Scholar/scholar.php" class="card-link m-2 text-end mt-0" style="color: #003c3c;">view</a>
                </div>
            </div>

            <div class="col-sm-6 mb-3 col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex align-items-center justify-content-between fw-bold fs-1 ">
                        <div>
                            <h6 class="card-title mb-1 fw-bold fs-5">Job Applicants</h6>
                            <p class="card-text fw-bold fs-1">13</p>
                        </div>
                            <i class="bi bi-person-lines-fill"></i>
                            
                    </div>
                    <a href="ReqcruitmentPage.php" class="card-link m-2 text-end mt-0" style="color: #003c3c;">view</a>
                </div>
            </div>

            <div class="col-sm-6 mb-3 col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex align-items-center justify-content-between fw-bold fs-1 ">
                        <div>
                            <h6 class="card-title mb-1 fw-bold fs-5">Scholar Applicants</h6>
                            <p class="card-text fw-bold fs-1">20</p>
                        </div>
                        <i class="bi bi-mortarboard-fill"></i>
                            
                    </div>
                    <a href="../Scholar/request.php" class="card-link m-2 text-end mt-0" style="color: #003c3c;">view</a>
                </div>
            </div>
>>>>>>> 6e4f438f31ec5fd85c1486c567b9c526f4b10d18
                </div>
            </div>
        </div>

        <!--chart-->
        <div class="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3 overflow-hidden shadow-md" style="border-radius: 5px;">
                        <div id="donutchart" style="width: 680px; height: 360px;"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title ms-2" style="font-weight: bold;">Upcoming Interview</h5>
                                <ul class="list-group list-group-flush">
                                    <!-- First Interview -->
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <small class="text-muted ms-4">09/06/24 - 9:30 am</small>
                                        </div>
                                        <div class="d-flex align-items-center flex-grow-1 ms-5">
                                            <img src="../../Public/Assets/Images/profile.jpg" alt="Applicant Photo" class="rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
                                            <div>
                                                <strong class="d-block text-truncate" style="max-width: 150px;">Juasssssssn Tamad</strong>
                                                <small class="text-muted">Job applicant</small>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </div>
                                    </li>
                                    <!-- Second Interview -->
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <small class="text-muted ms-4">09/06/24 - 3:30 pm</small>
                                        </div>
                                        <div class="d-flex align-items-center flex-grow-1 ms-5">
                                            <img src="../../Public/Assets/Images/profile.jpg" alt="Applicant Photo" class="rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
                                            <div>
                                                <strong class="d-block text-truncate" style="max-width: 150px;">Sarah Cruz</strong>
                                                <small class="text-muted">Job applicant</small>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </div>
                                    </li>
                                    <!-- Third Interview -->
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <small class="text-muted ms-4">09/06/24 - 3:30 pm</small>
                                        </div>
                                        <div class="d-flex align-items-center flex-grow-1 ms-5">
                                            <img src="../../Public/Assets/Images/profile.jpg" alt="Applicant Photo" class="rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
                                            <div>
                                                <strong class="d-block text-truncate" style="max-width: 150px;">ans Cruz</strong>
                                                <small class="text-muted">Scholar applicant</small>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </div>
                                    </li>
                                    <!-- Fourth Interview -->
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <small class="text-muted ms-4">09/06/24 - 3:30 pm</small>
                                        </div>
                                        <div class="d-flex align-items-center flex-grow-1 ms-5">
                                            <img src="../../Public/Assets/Images/profile.jpg" alt="Applicant Photo" class="rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
                                            <div>
                                                <strong class="d-block text-truncate" style="max-width: 150px;">Hssans Cruz</strong>
                                                <small class="text-muted">Scholar applicant</small>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-3 text-end">
                                    <a href="#" class="text-primary">view more.</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>



    </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work', 11],
            ['Eat', 2],
            ['Commute', 2],
            ['Watch TV', 2],
            ['Sleep', 7]
        ]);

        var options = {
            title: 'My Daily Activities',
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="../../Public/Assets/Js/AdminPage.js"></script>
<script src="../../Public/Assets/JssideBarScript.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

</html>