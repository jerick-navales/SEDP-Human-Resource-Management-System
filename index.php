<?php
include('./Database/login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login into the site | SEDP HRMS</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./Assets/Images/SEDPfavicon.png" type="image/x-icon">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./Assets/Css/login.css">
    <link rel="stylesheet" href="./Assets/Css/sweetAlert.css">
</head>
<<<<<<< HEAD

    <body>
    <div class="login-background">
        <div class="header">
            <?php include('./Scholar Page/Core/Includes/svg.php'); ?>
            <ul>
                <li><a href="./Scholar Page/App/ScholarshipCriteria.php">SCHOLARSHIP</a></li>
                <li><a href="./JobPage/Jobpage.php">JOB</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </div>

        <body>
            <div class="login-background">
                <div class="header">
                    <?php include('./Scholar Page/Core/Includes/svg.php'); ?>
                    <ul>
                        <li><a href="./Assets/Php/apply.php">Apply</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>

                <div class="container-fluid mt-4" style="background: transparent;">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center title-container">
                            <img src="./Assets/Images/loginLogo.png" alt="Company Logo" style="width: 130px; padding: 2.5rem 0 0.50rem;">
                            <h1>SEDP <br> Human Resource <br> Management</h1>
                        </div>
                        <div class="col-md-5 login-form-container px-5 shadow-lg ">
                            <h3 class="text-center font-weight-bold mb-5 pt-3" style="color: #003c3c;">Sign in</h3>
                            <form action="index.php" method="POST">
                                <div class="form-group mb-5">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                                    <label for="username">Username</label>
                                </div>
                                <div class="form-group">
                                    <div class="input-container">
                                        <input type="password" class="form-control form-control-password" name="password" id="password" placeholder="Password" required>
                                        <label for="password">Password</label>
                                        <i class="fas fa-eye toggle-password" id="eye-icon" onclick="togglePasswordVisibility()"></i>
                                    </div>
                                    <div class="text-right">
                                        <a href="#" class="forgot-password">Forgot Password?</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-login btn-block">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php if (isset($_SESSION['login_success'])): ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Successful',
                            text: '<?php echo addslashes($_SESSION['login_success']); ?>',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            window.location.href = '<?php echo $_SESSION['redirect_to']; ?>';
                        });
                    });
                </script>
                <?php
                unset($_SESSION['login_success']);
                unset($_SESSION['redirect_to']);
                ?>
            <?php elseif (isset($_SESSION['login_error'])): ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Login Failed',
                            text: '<?php echo addslashes($_SESSION['login_error']); ?>',
                            showConfirmButton: true,
                            confirmButtonText: 'OK'
                        });
                    });
                </script>
                <?php unset($_SESSION['login_error']); ?>
            <?php endif; ?>

            <!-- Include Bootstrap JS and dependencies -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <!-- Custom JS -->
            <script src="./Assets/Js/login.js"></script>

            <!-- Floating Placeholder Animation -->
            <script>
                function togglePasswordVisibility() {
                    const passwordInput = document.getElementById("password");
                    const eyeIcon = document.getElementById("eye-icon");
                    if (passwordInput.type === "password") {
                        passwordInput.type = "text";
                        eyeIcon.classList.remove("fa-eye");
                        eyeIcon.classList.add("fa-eye-slash");
                    } else {
                        passwordInput.type = "password";
                        eyeIcon.classList.remove("fa-eye-slash");
                        eyeIcon.classList.add("fa-eye");
                    }
                }
            </script>

        </body>

</html>