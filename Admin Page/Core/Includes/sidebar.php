<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>

    <link rel="shortcut icon" href="../../Public/Assets/Images/SEDPfavicon.png" type="image/x-icon">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Public/Assets/Css/sidebar.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex" id="sideheader">
                <button class="toggle-btn" type="button">
                <img class="logo" src="../../../Assets/Images/SEDPlogo.jpg" alt="">
                </button>
                <div class="sidebar-logo">
                    <a href="#">SEDP HRMS</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-link">
                    <p>Human Resource MS</p>
                </li>
                <li class="sidebar-item">
                    <a href="../../App/Employee/employee.php" class="sidebar-link">
                        <i class="lni lni-users"></i>
                        <span>Employee's</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../../App/Employee/job_applicant.php" class="sidebar-link">
                        <i class="lni lni-search"></i>
                        <span>Job Applicants</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-consulting"></i>
                        <span>Recruitment</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Branches</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="../../App/Branches/branch.php" class="sidebar-link">Branch</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../../App/Branches/department.php" class="sidebar-link">Department</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../../App/Branches/job_position.php" class="sidebar-link">Job position</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-link">
                    <p>Scholarship MS</p>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-graduation"></i>
                        <span>Scholar</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="../../App/Scholar/scholar.php" class="sidebar-link">Scholars</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../../App/Scholar/program.php" class="sidebar-link">Programs</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../../App/Scholar/compliance.php" class="sidebar-link">Compliance</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../../App/Scholar/request.php" class="sidebar-link">Requests</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="../../../index.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="../../Public/Assets/Js/main.js"></script>
</body>

</html>