<?php
session_start();

// Security headers
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('X-XSS-Protection: 1; mode=block');

// Envato API settings
define('ENVATO_API_URL', 'https://api.envato.com/v3/market/author/sale?code=');
define('ENVATO_API_TOKEN', 'YOUR_ENVATO_PERSONAL_TOKEN'); // Replace with your Envato API token

// Rate limiting configuration
define('MAX_ATTEMPTS', 5);
define('LOCKOUT_TIME', 3600); // 1 hour in seconds

// Requirements check
$requirements = [
    ['PHP Version (Yours: ' . PHP_VERSION . ')', version_compare(PHP_VERSION, '7.4.0', '>=')],
    ['Mysqli Extension', extension_loaded('mysqli')],
    ['Multibyte String (Mbstring)', extension_loaded('mbstring')],
    ['file_get_contents()', function_exists('file_get_contents')],
    ['PDO Extension', extension_loaded('pdo')],
    ['WHOIS PORT - 43', (bool) @fsockopen("whois.iana.org", 43, $errno, $errstr, 2)],
    ['GD Extension', extension_loaded('gd')],
    ['CURL Extension', extension_loaded('curl')],
    ['XML / DOM Extension', extension_loaded('dom')],
];

$permissions = [
    ['DB Configuration File ("/sql_db.sql")', is_writable(__DIR__ . '/sql_db.sql')],
    ['Env Directory ("/.env")', is_writable(__DIR__ . '/.env')],
    ['Install Lock ("/installed.lock")', is_writable(__DIR__ . '/installed.lock')],
    ['Uploads Directory ("/uploads")', is_writable(__DIR__ . '/uploads')],
];

function isAllPassed($array) {
    foreach ($array as $item) {
        if (!$item[1]) return false;
    }
    return true;
}

// CSRF token generation and validation
function generateCsrfToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validateCsrfToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Rate limiting
function checkRateLimit() {
    if (!isset($_SESSION['install_attempts'])) {
        $_SESSION['install_attempts'] = ['count' => 0, 'first_attempt' => time()];
    }

    if ($_SESSION['install_attempts']['count'] >= MAX_ATTEMPTS) {
        if (time() - $_SESSION['install_attempts']['first_attempt'] < LOCKOUT_TIME) {
            return ['valid' => false, 'error' => 'Too many attempts. Please try again later.'];
        }
        $_SESSION['install_attempts'] = ['count' => 0, 'first_attempt' => time()];
    }
    $_SESSION['install_attempts']['count']++;
    return ['valid' => true];
}

// Validate Envato purchase code
function validateEnvatoPurchaseCode($purchaseCode) {
    if (empty($purchaseCode) || !preg_match("/^(\w{8})-(\w{4})-(\w{4})-(\w{4})-(\w{12})$/", trim($purchaseCode))) {
        return ['valid' => false, 'error' => 'Invalid purchase code format. Use format: xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'];
    }

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => ENVATO_API_URL . urlencode(trim($purchaseCode)),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer " . ENVATO_API_TOKEN,
            "User-Agent: CodeCanyon Installer/1.0"
        ]
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200) {
        return ['valid' => false, 'error' => 'Envato API request failed with status ' . $httpCode];
    }

    $data = json_decode($response, true);
    if (empty($data) || isset($data['error'])) {
        return ['valid' => false, 'error' => 'Invalid purchase code or API error'];
    }

    return [
        'valid' => true,
        'data' => [
            'item_id' => $data['item']['id'] ?? '',
            'item_name' => $data['item']['name'] ?? '',
            'buyer' => $data['buyer'] ?? '',
            'license' => $data['license'] ?? '',
            'sold_at' => $data['sold_at'] ?? '',
            'supported_until' => $data['supported_until'] ?? ''
        ]
    ];
}

// Prevent access if already installed
if (file_exists(__DIR__ . '/installed.lock')) {
    die('Installation has already been completed for this purchase code.');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Code Canyon Installer Wizard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .stepwizard {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stepwizard .step {
            flex: 1;
            text-align: center;
        }
        .step.active {
            font-weight: bold;
            color: green;
        }
        .step.done {
            color: gray;
        }
        .badge-success {
            background-color: #28a745;
        }
        .badge-danger {
            background-color: #dc3545;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4">Code Canyon Installer</h2>

        <div class="stepwizard mb-4">
            <div class="step <?= $step == 1 ? 'active' : ($step > 1 ? 'done' : '') ?>">1. Verification</div>
            <div class="step <?= $step == 2 ? 'active' : ($step > 2 ? 'done' : '') ?>">2. Configurations</div>
            <div class="step <?= $step == 3 ? 'active' : ($step > 3 ? 'done' : '') ?>">3. Database</div>
            <div class="step <?= $step == 4 ? 'active' : ($step > 4 ? 'done' : '') ?>">4. Credential</div>
            <div class="step <?= $step == 5 ? 'active' : '' ?>">5. Complete</div>
        </div>

        <?php if ($step == 1): ?>
            <div class="card mb-4">
                <div class="card-header"><strong>Setup Requirements</strong></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Extension / Application</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($requirements as $i => [$label, $status]): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= htmlspecialchars($label) ?></td>
                                    <td><span class="badge <?= $status ? 'badge-success' : 'badge-danger' ?>">
                                        <?= $status ? 'Available' : 'Missing' ?>
                                    </span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header"><strong>Directory & Permissions</strong></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>File / Folder Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($permissions as $i => [$label, $status]): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= htmlspecialchars($label) ?></td>
                                    <td><span class="badge <?= $status ? 'badge-success' : 'badge-danger' ?>">
                                        <?= $status ? 'Writable' : 'Not Writable' ?>
                                    </span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php if (isAllPassed($requirements) && isAllPassed($permissions)): ?>
                <a href="?step=2" class="btn btn-success">Next Step</a>
            <?php else: ?>
                <div class="alert alert-danger">
                    Please fix the above issues before proceeding to the next step.
                </div>
            <?php endif; ?>

        <?php elseif ($step == 2): ?>
            <div class="card">
                <div class="card-body">
                    <?php
                    $config = $_SESSION['app'] ?? ['name' => '', 'url' => '', 'purchase_code' => ''];
                    $error = '';
                    $rateLimit = checkRateLimit();
                    if (!$rateLimit['valid']) {
                        $error = $rateLimit['error'];
                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (!validateCsrfToken($_POST['csrf_token'])) {
                            $error = 'Invalid CSRF token. Please try again.';
                        } else {
                            $purchaseCode = trim($_POST['purchase_code']);
                            $validation = validateEnvatoPurchaseCode($purchaseCode);

                            if (!$validation['valid']) {
                                $error = $validation['error'];
                            } else {
                                // Check if purchase code is already used
                                try {
                                    $pdo = new PDO("mysql:host=localhost", 'root', '');
                                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $pdo->exec("CREATE DATABASE IF NOT EXISTS temp_install_db");
                                    $pdo = new PDO("mysql:host=localhost;dbname=temp_install_db", 'root', '');
                                    $pdo->exec("CREATE TABLE IF NOT EXISTS purchase_codes (
                                        id INT AUTO_INCREMENT PRIMARY KEY,
                                        purchase_code VARCHAR(36) NOT NULL,
                                        domain VARCHAR(255) NOT NULL,
                                        item_id VARCHAR(50),
                                        item_name VARCHAR(255),
                                        buyer VARCHAR(255),
                                        license VARCHAR(255),
                                        sold_at DATETIME,
                                        supported_until DATETIME,
                                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                                        UNIQUE(purchase_code)
                                    )");

                                    $currentDomain = parse_url($_POST['url'], PHP_URL_HOST);
                                    $stmt = $pdo->prepare("SELECT domain FROM purchase_codes WHERE purchase_code = ?");
                                    $stmt->execute([$purchaseCode]);
                                    $existingDomain = $stmt->fetchColumn();

                                    if ($existingDomain) {
                                        $error = "This purchase code is already used for domain: $existingDomain. Each purchase code can only be used for one installation.";
                                    } else {
                                        $_SESSION['app'] = [
                                            'name' => $_POST['name'],
                                            'url' => rtrim($_POST['url'], '/'),
                                            'purchase_code' => $purchaseCode,
                                            'purchase_data' => $validation['data']
                                        ];
                                        header("Location: ?step=3");
                                        exit;
                                    }
                                } catch (PDOException $e) {
                                    $error = "Database error: " . $e->getMessage();
                                }
                            }
                        }
                    }
                    ?>
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>
                    <form method="POST">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        <div class="mb-3">
                            <label>Envato Username</label>
                            <input type="text" name="name" class="form-control" required value="<?= htmlspecialchars($config['name']) ?>">
                        </div>
                        <div class="mb-3">
                            <label>Purchase Code</label>
                            <input type="text" name="purchase_code" class="form-control" required value="<?= htmlspecialchars($config['purchase_code']) ?>">
                            <small class="form-text text-muted">Format: xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx</small>
                        </div>
                        <div class="mb-3">
                            <label>Application URL</label>
                            <input type="url" name="url" class="form-control" required value="<?= htmlspecialchars($config['url']) ?>">
                        </div>
                        <button class="btn btn-primary">Next</button>
                    </form>
                </div>
            </div>

        <?php elseif ($step == 3): ?>
            <div class="card">
                <div class="card-body">
                    <?php
                    $error = '';
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (!validateCsrfToken($_POST['csrf_token'])) {
                            $error = 'Invalid CSRF token. Please try again.';
                        } else {
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

                                // Create purchase_codes table
                                $pdo->exec("CREATE TABLE IF NOT EXISTS purchase_codes (
                                    id INT AUTO_INCREMENT PRIMARY KEY,
                                    purchase_code VARCHAR(36) NOT NULL,
                                    domain VARCHAR(255) NOT NULL,
                                    item_id VARCHAR(50),
                                    item_name VARCHAR(255),
                                    buyer VARCHAR(255),
                                    license VARCHAR(255),
                                    sold_at DATETIME,
                                    supported_until DATETIME,
                                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                                    UNIQUE(purchase_code)
                                )");

                                $_SESSION['db'] = compact('host', 'db', 'user', 'pass');
                                header("Location: ?step=4");
                                exit;
                            } catch (PDOException $e) {
                                $error = "Connection failed: " . $e->getMessage();
                            }
                        }
                    }
                    ?>
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>
                    <form method="POST">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
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
                </div>
            </div>

        <?php elseif ($step == 4): ?>
            <div class="card">
                <div class="card-body">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (!validateCsrfToken($_POST['csrf_token'])) {
                            $error = 'Invalid CSRF token. Please try again.';
                        } else {
                            $_SESSION['admin'] = [
                                'email' => $_POST['email'],
                                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                            ];
                            header("Location: ?step=5");
                            exit;
                        }
                    }
                    ?>
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>
                    <form method="POST">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        <div class="mb-3">
                            <label>Admin Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Admin Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button class="btn btn-primary">Finish Installation</button>
                    </form>
                </div>
            </div>

        <?php elseif ($step == 5): ?>
            <div class="card">
                <div class="card-body">
                    <?php
                    $success = false;
                    $error = '';
                    $dbConfig = $_SESSION['db'] ?? null;
                    $appConfig = $_SESSION['app'] ?? null;
                    $adminConfig = $_SESSION['admin'] ?? null;

                    if ($dbConfig && $appConfig && $adminConfig) {
                        $host = $dbConfig['host'];
                        $db   = $dbConfig['db'];
                        $user = $dbConfig['user'];
                        $pass = $dbConfig['pass'];

                        try {
                            $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            // Import SQL file
                            $sqlFile = __DIR__ . '/sql_db.sql';
                            if (file_exists($sqlFile)) {
                                $sql = file_get_contents($sqlFile);
                                $pdo->exec($sql);

                                // Insert admin user
                                $stmt = $pdo->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, 'admin')");
                                $stmt->execute([$adminConfig['email'], $adminConfig['password']]);

                                // Store purchase code and domain
                                $stmt = $pdo->prepare("INSERT INTO purchase_codes (purchase_code, domain, item_id, item_name, buyer, license, sold_at, supported_until) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                                $stmt->execute([
                                    $appConfig['purchase_code'],
                                    parse_url($appConfig['url'], PHP_URL_HOST),
                                    $appConfig['purchase_data']['item_id'],
                                    $appConfig['purchase_data']['item_name'],
                                    $appConfig['purchase_data']['buyer'],
                                    $appConfig['purchase_data']['license'],
                                    $appConfig['purchase_data']['sold_at'],
                                    $appConfig['purchase_data']['supported_until']
                                ]);
                            }

                            // Write .env file
                            $envPath = __DIR__ . '/.env';
                            $envContent = "APP_NAME=" . $appConfig['name'] . "\n";
                            $envContent .= "APP_URL=" . $appConfig['url'] . "\n";
                            $envContent .= "DB_HOST=$host\n";
                            $envContent .= "DB_DATABASE=$db\n";
                            $envContent .= "DB_USERNAME=$user\n";
                            $envContent .= "DB_PASSWORD=$pass\n";
                            $envContent .= "ENVATO_PURCHASE_CODE=" . $appConfig['purchase_code'] . "\n";
                            $envContent .= "INSTALLATION_TOKEN=" . bin2hex(random_bytes(16)) . "\n";

                            file_put_contents($envPath, $envContent);
                            file_put_contents(__DIR__ . '/installed.lock', json_encode([
                                'purchase_code' => $appConfig['purchase_code'],
                                'domain' => parse_url($appConfig['url'], PHP_URL_HOST),
                                'installed_at' => date('c')
                            ]));

                            $success = true;

                            // Clear session
                            session_destroy();
                        } catch (PDOException $e) {
                            $error = "Installation failed: " . $e->getMessage();
                        }
                    } else {
                        $error = "Configuration data missing. Please start the installation from the beginning.";
                    }
                    ?>

                    <?php if ($success): ?>
                        <div class="alert alert-success">
                            <h4 class="alert-heading">Installation Complete!</h4>
                            <p>Your application has been installed and configured successfully.</p>
                            <hr>
                            <p>Purchase Code: <?= htmlspecialchars($appConfig['purchase_code']) ?></p>
                            <p>Item: <?= htmlspecialchars($appConfig['purchase_data']['item_name']) ?></p>
                            <p>Buyer: <?= htmlspecialchars($appConfig['purchase_data']['buyer']) ?></p>
                            <p>License: <?= htmlspecialchars($appConfig['purchase_data']['license']) ?></p>
                            <p>Domain: <?= htmlspecialchars(parse_url($appConfig['url'], PHP_URL_HOST)) ?></p>
                            <a href="/login.php" class="btn btn-success">Go to Login</a>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                        <a href="?step=1" class="btn btn-primary">Start Over</a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>