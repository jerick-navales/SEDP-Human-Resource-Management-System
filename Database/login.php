<?php
include 'database.php';  // Ensure this path is correct

$pdo = $database->connect();  // Use the $database variable to get the PDO instance
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // To store userType
    $userType = '';

    // Debugging: check received POST data
    var_dump($username, $password);

    // Function to perform case-sensitive search
    function findUserType($pdo, $username, $password, $table) {
        $stmt = $pdo->prepare("SELECT usertype FROM $table WHERE username = BINARY :username AND password = BINARY :password");
        $stmt->execute(['username' => $username, 'password' => $password]);
        return $stmt->fetchColumn();
    }

    // Check in scholar_login
    $userType = findUserType($pdo, $username, $password, 'scholar_login');
    if (!$userType) {
        // Check in employee_login
        $userType = findUserType($pdo, $username, $password, 'employee_login');
        if (!$userType) {
            // Check in admin_login
            $userType = findUserType($pdo, $username, $password, 'admin_login');
        }
    }

    // Debugging: check the determined userType
    var_dump($userType);

    if ($userType) {
        $_SESSION["username"] = $username;

        switch ($userType) {
            case "scholar":
                $_SESSION['login_success'] = "Welcome $username!";
                $_SESSION['redirect_to'] = "./Scholar Page/App/View/scholar_home.php";
                break;

            case "employee":
                $_SESSION['login_success'] = "Welcome $username!";
                $_SESSION['redirect_to'] = "./Employee Page/App/View/employee_home.php";
                break;

            case "admin":
                $_SESSION['login_success'] = "Welcome $username!";
                $_SESSION['redirect_to'] = "./Admin Page/App/View/admin_home.php";
                break;
        }
        header("Location: ./index.php");
    } else {
        $_SESSION['login_error'] = "Username or password incorrect";
        header("Location: ./index.php");
    }
    exit();
}
?>
