<?php
include('./Database/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="shortcut icon" href="./User/Public/Assets/Images/SEDPfavicon.png" type="image/x-icon">

    <!-- Custom CSS -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .title-container {
            text-align: center;
            margin-bottom: 40px;
        }

        .title-container h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #343a40;
        }

        .login-form-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            border-radius: 50px;
            padding: 10px 20px;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-login {
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1rem;
            background: #007bff;
            border: none;
        }

        .btn-login:hover {
            background: #0056b3;
        }

        .input-group {
            position: relative;
        }

        .input-group .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px; /* Adjusted for spacing */
            transform: translateY(-50%);
            cursor: pointer;
            color: #ccc;
            background-color: transparent;
            border: none;
            z-index: 10; /* Ensure eye icon is above input border */
        }

        .input-group .toggle-password:hover {
            color: #007bff;
        }

        /* Adjust border-radius for password input */
        .form-control-password {
            border-top-right-radius: 50px !important;
            border-bottom-right-radius: 50px !important;
        }

        @media (max-width: 768px) {
            .admin-login-message {
                display: block;
            }
        }

        .admin-login-message {
            display: none;
            color: red;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6 text-center title-container">
            <h1>SEDP Human Resource Management System</h1>
        </div>
        <div class="col-md-6 login-form-container">
            <form action="index.php" method="POST" onsubmit="return checkScreenSize()">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control form-control-password" name="password" id="password" required>
                        <span class="input-group-append">
                            <span class="input-group-text toggle-password">
                                <i class="fas fa-eye" id="eye-icon" onclick="togglePasswordVisibility()"></i>
                            </span>
                        </span>
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
<script>
    function checkScreenSize() {
        const username = document.getElementById('username').value;
        const isAdmin = username.toLowerCase() === 'admin'; // Adjust this as per your actual admin username logic
        if (isAdmin && window.innerWidth <= 768) {
            document.getElementById('admin-login-message').style.display = 'block';
            return false;
        }
        return true;
    }

    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>
</body>
</html>
