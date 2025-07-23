<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$success = false;
$error = '';
$dbConfig = $_SESSION['db'] ?? null;
$appConfig = $_SESSION['app'] ?? null;

if ($dbConfig) {
    $host = $dbConfig['host'];
    $db   = $dbConfig['db'];
    $user = $dbConfig['user'];
    $pass = $dbConfig['pass'];

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlFile = __DIR__ . '/../sql_db.sql';
        if (file_exists($sqlFile)) {
            $sql = file_get_contents($sqlFile);
            $pdo->exec($sql);
        }

        $envPath = __DIR__ . '/../.env';
        $envContent = "APP_NAME=" . $appConfig['name'] . "
";
        $envContent .= "APP_URL=" . $appConfig['url'] . "
";
        $envContent .= "DB_HOST=$host
DB_DATABASE=$db
DB_USERNAME=$user
DB_PASSWORD=$pass
";

        file_put_contents($envPath, $envContent);
        file_put_contents(__DIR__ . '/../installed.lock', 'Installed');

        $success = true;
    } catch (PDOException $e) {
        $error = "Installation failed: " . $e->getMessage();
    }
} else {
    $error = "Database configuration not found.";
}
?>

<?php if ($success): ?>
    <div class="alert alert-success">
        <h4 class="alert-heading">Installation Complete!</h4>
        <p>Your application has been installed and configured successfully.</p>
        <hr>
        <a href="../login.php" class="btn btn-success">Go to Login</a>
    </div>
<?php else: ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>