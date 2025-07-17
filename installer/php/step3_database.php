<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = $_POST['host'];
    $db   = $_POST['database'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    try {
        $pdo = new PDO("mysql:host=$host", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("CREATE DATABASE IF NOT EXISTS `$db` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $_SESSION['db'] = compact('host', 'db', 'user', 'pass');
        header("Location: ?step=4");
        exit;
    } catch (PDOException $e) {
        $error = "Connection failed: " . $e->getMessage();
    }
}
?>

<?php if ($error): ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>

<form method="POST">
    <div class="mb-3">
        <label>DB Host</label>
        <input type="text" name="host" class="form-control" required value="localhost">
    </div>
    <div class="mb-3">
        <label>Database</label>
        <input type="text" name="database" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button class="btn btn-primary">Next</button>
</form>
