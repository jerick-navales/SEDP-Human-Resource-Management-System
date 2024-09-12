<?php include('./Database/login.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login into the site | SEDP HRMS</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./Assets/Images/SEDPfavicon.png" type="image/x-icon">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./Assets/Css/login page.css">
</head>
<body>
<div class="header"> <!-- Light green header -->
    <?php include('./Scholar Page/Core/Includes/svg.php'); ?>
    <ul>
        <li><a href="./Assets/Php/apply.php">Apply</a></li>
        <li><a href="#">About</a></li>
    </ul>
</div>

<div class="container-fluid ">
    <div class="row align-items-center" style="margin: 10rem 0 0 10rem;">
        <div class="col-md-6 text-start title-container">
            <h1>SEDP <br> Human Resource <br> Management</h1>
        </div>
        <div class="col-md-4 login-form-container" >
            <form action="index.php" method="POST" onsubmit="return checkScreenSize()">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control form-control-password" name="password" id="password" required>
                        <div class="input-group-append">
                            <span class="input-group-text toggle-password">
                                <i class="fas fa-eye" id="eye-icon" onclick="togglePasswordVisibility()"></i>
                            </span>
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-login btn-block">Login</button>
                <div class="admin-login-message" id="admin-login-message">
                    Admin login is restricted on smaller screens.
                </div>
            </form>
        </div>
    </div>
</div>

<?php if (isset($_SESSION['login_success'])): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Login Successful',
            text: '<?php echo $_SESSION['login_success']; ?>',
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location.href = '<?php echo $_SESSION['redirect_to']; ?>';
        });
        <?php 
        unset($_SESSION['login_success']); 
        unset($_SESSION['redirect_to']); 
        ?>
    </script>
<?php elseif (isset($_SESSION['login_error'])): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Login Failed',
            text: '<?php echo $_SESSION['login_error']; ?>',
            showConfirmButton: true,
            confirmButtonText: 'OK'
        });
        <?php unset($_SESSION['login_error']); ?>
    </script>
<?php endif; ?>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="./Assets/Js/login.js"></script>

</body>
</html>
