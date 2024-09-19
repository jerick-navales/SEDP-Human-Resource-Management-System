<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>

    <link rel="shortcut icon" href="../../../Assets/Images/SEDPfavicon.png" type="image/x-icon">

    <link rel="stylesheet" href="../../Public/Assets/Css/header.css">

    <!-- Additional Style for Body Paddings -->
    <link rel="stylesheet" href="../../Public/Assets/Css/dashboard.css">

    <!-- Example of using absolute URL for external CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Preconnect links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Example of linking Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    </style>

</head>

<body>
    <header>
        <nav>
            <ul>
                <a href="../../App/View/employee_home.php">
                    <img src="../../../Assets/Images/SEDPlogo.jpg" alt="">
                </a>
                <li class="<?php echo ($page === 'home') ? 'active' : ''; ?>"><a href="../../App/View/employee_home.php">Home</a></li>
                <li class="<?php echo ($page === 'dashboard') ? 'active' : ''; ?>"><a href="../../App/View/dashboard.php">Dashboard</a></li>
            </ul>
            <div class="profile">
                <a href="../../App/View/notification.php"><i class="fa-solid fa-bell"></i></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg></a>
                <a href="#"><i class="fa-solid fa-angle-down"></i></a>
            </div>
        </nav>
    </header>
</body>

</html>