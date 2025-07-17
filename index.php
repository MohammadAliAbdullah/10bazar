<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is maintenance / demo mode via the "down" command we
| will require this file so that any prerendered template can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists(__DIR__ . '/storage/framework/maintenance.php')) {
    require __DIR__ . '/storage/framework/maintenance.php';
}

// Autoload classes
require __DIR__ . '/vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__ . '/bootstrap/app.php';

// // Check if database connection exists
// try {
//     $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

//     // Attempt a DB connection
//     \DB::connection()->getPdo();

//     // Optional: check if a required table exists (e.g., `cs_settings`)
//     if (!\Schema::hasTable('cs_settings')) {
//         header("Location: /install");
//         exit;
//     }
// } catch (\Exception $e) {
//     // Redirect to installer if DB not connected
//     header("Location: /install");
//     exit;
// }

// Try database connection before full app loads
try {
    $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

    $connection = config('database.default');
    $dbName = config("database.connections.$connection.database");

    // Check if DB is empty or still placeholder like "{DATABASE}"
    if ($dbName == '' || $dbName == '{DATABASE}') {
        throw new Exception('Database name not set.');
    }

    // Try connecting to DB
    \DB::connection()->getPdo();

    // Optional: you can also check if the `settings` table exists
    // if (!\Schema::hasTable('settings')) {
    //     throw new Exception('Missing required table.');
    // }

} catch (Exception $e) {
    // Redirect to installer if DB isn't set or connection fails
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
        (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
        ? 'https://' : 'http://';

    $dirname = rtrim(dirname($_SERVER['PHP_SELF']), '/') . '/';
    $installerUrl = $protocol . $_SERVER['HTTP_HOST'] . $dirname . 'installer';

    header('Location: ' . $installerUrl);
    exit;
}

$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

$kernel->terminate($request, $response);
