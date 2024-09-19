<?php
$title = 'Branch';
$page = 'Branch';

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

        <div class="container-fluid shadow p-3 mb-5 bg-body-tertiary rounded-4">
            <h3 class="fw-bold fs-3">Compliances</h3>
            <hr style="padding-bottom: 1.5rem;">
            <div class="d-flex mt">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mx-lg-5 shadow p-2 mb-5 bg-body-tertiary rounded" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../../Public/Assets/Images/narative.png" class="img-fluid rounded-start" alt="..." style="width: 260px;height:240px">
                                    </div>
                                    <div class="col-md-8 col-sm-6">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">Narrative Report</h5>
                                            <p class="card-text">A detailed, chronological account of events or experiences, used to document progress, activities, or findings.</p>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-primary ">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mx-lg-5 shadow p-2 mb-5 bg-body-tertiary rounded" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../../Public/Assets/Images/load.png" class="img-fluid rounded-start" alt="..." style="width: 260px;height:250px">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">Load expenses</h5>
                                            <p class="card-text">Refer to costs incurred for mobile data, calls, and messaging services, typically for personal or business communication.</p>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-primary ">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4 mx-lg-5 shadow p-3 mb-5 bg-body-tertiary roundeds" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 ">
                                        <img src="../../Public/Assets/Images/Book.png" class="img-fluid rounded-start" alt="..." style="width: 300px;height:280px">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">Book expenses</h5>
                                            <p class="card-text">Costs spent on purchasing or acquiring textbooks, reference materials, or other reading resources, often for educational purposes.</p>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-primary ">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mx-lg-5 shadow p-3 mb-5 bg-body-tertiary roundeds" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../../Public/Assets/Images/thesis.png" class="img-fluid rounded-start" alt="..." style="width: 300px;height:280px">
                                    </div>
                                    <div class="col-md-8 col-sm-6">
                                        <div class="card-body ">
                                            <h5 class="card-title fw-bold">Thesis Expenses</h5>
                                            <p class="card-text">The costs associated with research, materials, printing, and other resources needed to complete a thesis or academic project.</p>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-primary "> View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mx-lg-5 shadow p-3 mb-5 bg-body-tertiary roundeds" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../../Public/Assets/Images/registration.png" class="img-fluid rounded-start mt-3" alt="..." style="width: 280px;height:220px">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">Cert.of Reg.</h5>
                                            <p class="card-text ">Official document that verifies an individual's or entity's formal registration with a specific authority or organization, often required for legal, educational, or professional purposes.</p>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-primary ">View more.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mx-lg-5 shadow p-3 mb-5 bg-body-tertiary roundeds" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 ">
                                        <img src="../../Public/Assets/Images/cog.png" class="img-fluid rounded-start" alt="..." style="width: 300px;height:280px">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">Cert.of Grade</h5>
                                            <p class="card-text">Official document that confirms a student's academic performance in a specific course or subject, detailing the grades or marks received.</p>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-primary ">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

        </div>

        <?php
        include('../../../Assets/Js/bootstrap.js')
        ?>
        </body>

        </html>