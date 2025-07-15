<?php return array(
  'app' =>
  array(
    'name' => 'bdtask',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'available_locales' =>
    array(
      'Bangla' => 'bn',
      'Arabic' => 'ar',
      'Urdu' => 'ur',
      'English' => 'en',
      'Hindi' => 'hi',
      'Chinese' => 'zh',
      'German' => 'de',
      'Spanish' => 'es',
      'Russian' => 'ru',
      'French' => 'fr',
    ),
    'faker_locale' => 'en_US',
    'currency' => 'BDT',
    'key' => 'base64:cu81zT+UPF1a2s/3d9EBfddsSvvIPFvWTdo0jyaUXpM=',
    'cipher' => 'AES-256-CBC',
    'providers' =>
    array(
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Intervention\\Image\\ImageServiceProvider',
      23 => 'Darryldecode\\Cart\\CartServiceProvider',
      24 => 'Milon\\Barcode\\BarcodeServiceProvider',
      25 => 'App\\Providers\\AppServiceProvider',
      26 => 'App\\Providers\\AuthServiceProvider',
      27 => 'App\\Providers\\EventServiceProvider',
      28 => 'App\\Providers\\RouteServiceProvider',
      29 => 'App\\Providers\\BkashServiceProvider',
    ),
    'aliases' =>
    array(
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'Cart' => 'Darryldecode\\Cart\\Facades\\CartFacade',
      'DNS1D' => 'Milon\\Barcode\\Facades\\DNS1DFacade',
      'DNS2D' => 'Milon\\Barcode\\Facades\\DNS2DFacade',
    ),
  ),
  'auth' =>
  array(
    'defaults' =>
    array(
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' =>
    array(
      'web' =>
      array(
        'driver' => 'session',
        'provider' => 'users',
      ),
      'madmin' =>
      array(
        'driver' => 'session',
        'provider' => 'madmins',
      ),
      'mypanel' =>
      array(
        'driver' => 'session',
        'provider' => 'mypanels',
      ),
      'api' =>
      array(
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' =>
    array(
      'users' =>
      array(
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
      'madmins' =>
      array(
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Madmin',
      ),
      'mypanels' =>
      array(
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Customer',
      ),
    ),
    'passwords' =>
    array(
      'users' =>
      array(
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'barcode' =>
  array(
    'store_path' => 'D:\\xampp\\htdocs\\bdtask\\public\\/',
  ),
  'bkash' =>
  array(
    'sandbox' => true,
    'app_key' => NULL,
    'app_secret' => NULL,
    'username' => NULL,
    'password' => NULL,
    'grant_token_url' => NULL,
    'refresh_token_url' => NULL,
    'create_payment_url' => NULL,
    'execute_payment_url' => NULL,
    'payment_status_url' => NULL,
    'search_transaction_url' => NULL,
    'refund_url' => NULL,
    'refund_status_url' => NULL,
    'callback_url' => NULL,
  ),
  'broadcasting' =>
  array(
    'default' => 'log',
    'connections' =>
    array(
      'pusher' =>
      array(
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' =>
        array(
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'ably' =>
      array(
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' =>
      array(
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' =>
      array(
        'driver' => 'log',
      ),
      'null' =>
      array(
        'driver' => 'null',
      ),
    ),
  ),
  'cache' =>
  array(
    'default' => 'file',
    'stores' =>
    array(
      'apc' =>
      array(
        'driver' => 'apc',
      ),
      'array' =>
      array(
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' =>
      array(
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' =>
      array(
        'driver' => 'file',
        'path' => 'D:\\xampp\\htdocs\\bdtask\\storage\\framework/cache/data',
      ),
      'memcached' =>
      array(
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' =>
        array(
          0 => NULL,
          1 => NULL,
        ),
        'options' =>
        array(),
        'servers' =>
        array(
          0 =>
          array(
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' =>
      array(
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' =>
      array(
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'bdtask_cache',
  ),
  'cors' =>
  array(
    'paths' =>
    array(
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' =>
    array(
      0 => '*',
    ),
    'allowed_origins' =>
    array(
      0 => '*',
    ),
    'allowed_origins_patterns' =>
    array(),
    'allowed_headers' =>
    array(
      0 => '*',
    ),
    'exposed_headers' =>
    array(),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' =>
  array(
    'default' => 'mysql',
    'connections' =>
    array(
      'sqlite' =>
      array(
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'hotel_csl',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' =>
      array(
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'hotel_csl',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' =>
        array(),
      ),
      'pgsql' =>
      array(
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'hotel_csl',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' =>
      array(
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'hotel_csl',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' =>
    array(
      'client' => 'phpredis',
      'options' =>
      array(
        'cluster' => 'redis',
        'prefix' => 'bdtask_database_',
      ),
      'default' =>
      array(
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' =>
      array(
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'dompdf' =>
  array(
    'show_warnings' => false,
    'orientation' => 'portrait',
    'defines' =>
    array(
      'font_dir' => 'D:\\xampp\\htdocs\\bdtask\\storage\\fonts/',
      'font_cache' => 'D:\\xampp\\htdocs\\bdtask\\storage\\fonts/',
      'temp_dir' => 'C:\\Users\\Bdtask121\\AppData\\Local\\Temp',
      'chroot' => 'D:\\xampp\\htdocs\\bdtask',
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => true,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => false,
    ),
  ),
  'filesystems' =>
  array(
    'default' => 'local',
    'disks' =>
    array(
      'local' =>
      array(
        'driver' => 'local',
        'root' => 'D:\\xampp\\htdocs\\bdtask\\storage\\app',
      ),
      'public' =>
      array(
        'driver' => 'local',
        'root' => 'D:\\xampp\\htdocs\\bdtask\\storage\\app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' =>
      array(
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
      ),
    ),
    'links' =>
    array(
      'D:\\xampp\\htdocs\\bdtask\\public\\storage' => 'D:\\xampp\\htdocs\\bdtask\\storage\\app/public',
    ),
  ),
  'geoip' =>
  array(
    'log_failures' => true,
    'include_currency' => true,
    'service' => NULL,
    'services' =>
    array(
      'maxmind_database' =>
      array(
        'class' => 'Torann\\GeoIP\\Services\\MaxMindDatabase',
        'database_path' => 'D:\\xampp\\htdocs\\bdtask\\storage\\app/geoip.mmdb',
        'update_url' => 'https://download.maxmind.com/app/geoip_download?edition_id=GeoLite2-City&license_key=&suffix=tar.gz',
        'locales' =>
        array(
          0 => 'en',
        ),
      ),
      'maxmind_api' =>
      array(
        'class' => 'Torann\\GeoIP\\Services\\MaxMindWebService',
        'user_id' => NULL,
        'license_key' => NULL,
        'locales' =>
        array(
          0 => 'en',
        ),
      ),
      'ipgeolocation' =>
      array(
        'class' => 'Torann\\GeoIP\\Services\\IPGeoLocation',
        'secure' => true,
        'key' => NULL,
        'continent_path' => 'D:\\xampp\\htdocs\\bdtask\\storage\\app/continents.json',
        'lang' => 'en',
      ),
      'ipdata' =>
      array(
        'class' => 'Torann\\GeoIP\\Services\\IPData',
        'key' => NULL,
        'secure' => true,
      ),
      'ipfinder' =>
      array(
        'class' => 'Torann\\GeoIP\\Services\\IPFinder',
        'key' => NULL,
        'secure' => true,
        'locales' =>
        array(
          0 => 'en',
        ),
      ),
    ),
    'cache' =>
    array(
      'enabled' => false,
      'tag' => NULL,
      'ttl' => 30,
    ),
    'cache_tags' =>
    array(
      0 => 'torann-geoip-location',
    ),
    'cache_expires' => 30,
    'default_location' =>
    array(
      'ip' => '127.0.0.0',
      'iso_code' => 'US',
      'country' => 'United States',
      'city' => 'New Haven',
      'state' => 'CT',
      'state_name' => 'Connecticut',
      'postal_code' => '06510',
      'lat' => 41.31,
      'lon' => -72.92,
      'timezone' => 'America/New_York',
      'continent' => 'NA',
      'default' => true,
      'currency' => 'USD',
    ),
  ),
  'hashing' =>
  array(
    'driver' => 'bcrypt',
    'bcrypt' =>
    array(
      'rounds' => 10,
    ),
    'argon' =>
    array(
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'laravel-share' =>
  array(
    'services' =>
    array(
      'facebook' =>
      array(
        'uri' => 'https://www.facebook.com/sharer/sharer.php?u=',
      ),
      'twitter' =>
      array(
        'uri' => 'https://twitter.com/intent/tweet',
        'text' => 'Default share text',
      ),
      'linkedin' =>
      array(
        'uri' => 'https://www.linkedin.com/sharing/share-offsite',
        'extra' =>
        array(
          'mini' => 'true',
        ),
      ),
      'whatsapp' =>
      array(
        'uri' => 'https://wa.me/?text=',
        'extra' =>
        array(
          'mini' => 'true',
        ),
      ),
      'pinterest' =>
      array(
        'uri' => 'https://pinterest.com/pin/create/button/?url=',
      ),
      'reddit' =>
      array(
        'uri' => 'https://www.reddit.com/submit',
        'text' => 'Default share text',
      ),
      'telegram' =>
      array(
        'uri' => 'https://telegram.me/share/url',
        'text' => 'Default share text',
      ),
    ),
    'fontAwesomeVersion' => 5,
  ),
  'logging' =>
  array(
    'default' => 'stack',
    'channels' =>
    array(
      'stack' =>
      array(
        'driver' => 'stack',
        'channels' =>
        array(
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' =>
      array(
        'driver' => 'single',
        'path' => 'D:\\xampp\\htdocs\\bdtask\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' =>
      array(
        'driver' => 'daily',
        'path' => 'D:\\xampp\\htdocs\\bdtask\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' =>
      array(
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' =>
      array(
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' =>
        array(
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' =>
      array(
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' =>
        array(
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' =>
      array(
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' =>
      array(
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' =>
      array(
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' =>
      array(
        'path' => 'D:\\xampp\\htdocs\\bdtask\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' =>
  array(
    'default' => 'smtp',
    'mailers' =>
    array(
      'smtp' =>
      array(
        'transport' => 'smtp',
        'host' => 'mailhog',
        'port' => '1025',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' =>
      array(
        'transport' => 'ses',
      ),
      'mailgun' =>
      array(
        'transport' => 'mailgun',
      ),
      'postmark' =>
      array(
        'transport' => 'postmark',
      ),
      'sendmail' =>
      array(
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' =>
      array(
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' =>
      array(
        'transport' => 'array',
      ),
    ),
    'from' =>
    array(
      'address' => NULL,
      'name' => 'bdtask',
    ),
    'markdown' =>
    array(
      'theme' => 'default',
      'paths' =>
      array(
        0 => 'D:\\xampp\\htdocs\\bdtask\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'queue' =>
  array(
    'default' => 'sync',
    'connections' =>
    array(
      'sync' =>
      array(
        'driver' => 'sync',
      ),
      'database' =>
      array(
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' =>
      array(
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' =>
      array(
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' =>
      array(
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' =>
    array(
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' =>
  array(
    'mailgun' =>
    array(
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' =>
    array(
      'token' => NULL,
    ),
    'ses' =>
    array(
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' =>
  array(
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'D:\\xampp\\htdocs\\bdtask\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'Store' => NULL,
    'lottery' =>
    array(
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'bdtask_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'shopping_cart' =>
  array(
    'format_numbers' => false,
    'decimals' => 0,
    'dec_point' => '.',
    'thousands_sep' => ',',
    'storage' => NULL,
    'events' => NULL,
  ),
  'sslcommerz' =>
  array(
    'projectPath' => NULL,
    'apiDomain' => 'https://securepay.sslcommerz.com',
    'apiCredentials' =>
    array(
      'store_id' => 'jagopowerlive',
      'store_password' => '62E8D13650CD765549',
    ),
    'apiUrl' =>
    array(
      'make_payment' => '/gwprocess/v4/api.php',
      'transaction_status' => '/validator/api/merchantTransIDvalidationAPI.php',
      'order_validate' => '/validator/api/validationserverAPI.php',
      'refund_payment' => '/validator/api/merchantTransIDvalidationAPI.php',
      'refund_status' => '/validator/api/merchantTransIDvalidationAPI.php',
    ),
    'connect_from_localhost' => false,
    'success_url' => '/success',
    'failed_url' => '/fail',
    'cancel_url' => '/cancel',
    'ipn_url' => '/ipn',
  ),
  'view' =>
  array(
    'paths' =>
    array(
      0 => 'D:\\xampp\\htdocs\\bdtask\\resources\\views',
    ),
    'compiled' => 'D:\\xampp\\htdocs\\bdtask\\storage\\framework\\views',
  ),
  'debugbar' =>
  array(
    'enabled' => NULL,
    'except' =>
    array(
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' =>
    array(
      'enabled' => true,
      'driver' => 'file',
      'path' => 'D:\\xampp\\htdocs\\bdtask\\storage\\debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' =>
    array(
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
    ),
    'options' =>
    array(
      'auth' =>
      array(
        'show_name' => true,
      ),
      'db' =>
      array(
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' =>
        array(),
        'timeline' => false,
        'explain' =>
        array(
          'enabled' => false,
          'types' =>
          array(
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
      ),
      'mail' =>
      array(
        'full_log' => false,
      ),
      'views' =>
      array(
        'timeline' => false,
        'data' => false,
      ),
      'route' =>
      array(
        'label' => true,
      ),
      'logs' =>
      array(
        'file' => NULL,
      ),
      'cache' =>
      array(
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
  ),
  'pdf' =>
  array(
    'mode' => '',
    'format' => 'A4',
    'default_font_size' => '12',
    'default_font' => 'sans-serif',
    'margin_left' => 10,
    'margin_right' => 10,
    'margin_top' => 10,
    'margin_bottom' => 10,
    'margin_header' => 0,
    'margin_footer' => 0,
    'orientation' => 'P',
    'title' => 'Laravel mPDF',
    'subject' => '',
    'author' => '',
    'watermark' => '',
    'show_watermark' => false,
    'show_watermark_image' => false,
    'watermark_font' => 'sans-serif',
    'display_mode' => 'fullpage',
    'watermark_text_alpha' => 0.1,
    'watermark_image_path' => '',
    'watermark_image_alpha' => 0.2,
    'watermark_image_size' => 'D',
    'watermark_image_position' => 'P',
    'custom_font_dir' => '',
    'custom_font_data' =>
    array(),
    'auto_language_detection' => false,
    'temp_dir' => 'D:\\xampp\\htdocs\\bdtask\\storage\\app',
    'pdfa' => false,
    'pdfaauto' => false,
    'use_active_forms' => false,
  ),
  'flare' =>
  array(
    'key' => NULL,
    'reporting' =>
    array(
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' =>
      array(
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' =>
    array(
      0 => 'password',
    ),
  ),
  'ignition' =>
  array(
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' =>
    array(
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'image' =>
  array(
    'driver' => 'gd',
  ),
  'datatables' =>
  array(
    'search' =>
    array(
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
      'starts_with' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' =>
    array(
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
      'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
    ),
    'builders' =>
    array(),
    'nulls_last_sql' => ':column :direction NULLS LAST',
    'error' => NULL,
    'columns' =>
    array(
      'excess' =>
      array(
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' =>
      array(
        0 => 'action',
      ),
      'blacklist' =>
      array(
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' =>
    array(
      'header' =>
      array(),
      'options' => 0,
    ),
  ),
  'trustedproxy' =>
  array(
    'proxies' => NULL,
    'headers' => 30,
  ),
  'tinker' =>
  array(
    'commands' =>
    array(),
    'alias' =>
    array(),
    'dont_alias' =>
    array(
      0 => 'App\\Nova',
    ),
  ),
);
