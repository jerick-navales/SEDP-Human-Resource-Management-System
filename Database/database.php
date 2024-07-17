<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'human resource management system';
    private $username = 'root';
    private $password = '';
    private $charset = 'utf8mb4';
    public $pdo;

    public function connect() {
        $this->pdo = null;

        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }

        return $this->pdo;
    }
}

$database = new Database();
$pdo = $database->connect();

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];    

    $stmt = $pdo->prepare("SELECT * FROM login WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION["username"] = $username;

        if ($user["usertype"] == "user") {
            $_SESSION['login_success'] = "Welcome $username!";
            $_SESSION['redirect_to'] = "./User/App/View/user_home.php";
            header("Location: ./index.php");
        } elseif ($user["usertype"] == "admin") {
            $_SESSION['login_success'] = "Welcome $username!";
            $_SESSION['redirect_to'] = "./Admin/App/View/admin_home.php";
            header("Location: ./index.php");
        }
    } else {
        $_SESSION['login_error'] = "Username or password incorrect";
        header("Location: ./index.php");
    }
    exit();
}

?>
