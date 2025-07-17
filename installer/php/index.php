<?php
session_start();
$step = $_GET['step'] ?? 1;

// Requirements check
$requirements = [
    ['PHP Version (Yours version ' . PHP_VERSION . ')', version_compare(PHP_VERSION, '7.4.0', '>=')],
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
    ['DB Configuration File ("/sql_db.sql/")', is_writable(__DIR__ . '../../sql_db.sql')],
    ['Env Directory ("/env/")', is_writable(__DIR__ . '../../.env')],
    ['Install Lokcker ("/installed.lock/")', is_writable(__DIR__ . '../../installed.lock')],
    ['Uploads Directory ("/uploads/")', is_writable(__DIR__ . '/../uploads')],
    // ['Snapshot Cache Directory ("/core/helpers/site_snapshot/")', is_writable(__DIR__ . '/../core/helpers/site_snapshot')],
];

function isAllPassed($array)
{
    foreach ($array as $item) {
        if (!$item[1]) return false;
    }
    return true;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Installer Wizard</title>
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
        <h2 class="mb-4">Admin Installer</h2>

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

        <?php else: ?>
            <div class="card">
                <div class="card-body">
                    <?php
                    switch ($step) {
                        case 2:
                            include 'step2_config.php';
                            break;
                        case 3:
                            include 'step3_database.php';
                            break;
                        case 4:
                            include 'step4_credential.php';
                            break;
                        case 5:
                            include 'step5_complete.php';
                            break;
                        default:
                            include 'step1_verify.php';
                    }
                    ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>