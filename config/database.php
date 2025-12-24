<?php

use Illuminate\Support\Str;

// Parse Heroku database URL if available
$databaseUrl = env('DATABASE_URL');

$dbConnection = env('DB_CONNECTION', 'mysql');
$dbHost = env('DB_HOST', '127.0.0.1');
$dbPort = env('DB_PORT', '3306');
$dbDatabase = env('DB_DATABASE', 'forge');
$dbUsername = env('DB_USERNAME', 'forge');
$dbPassword = env('DB_PASSWORD', '');

if ($databaseUrl) {
    $url = parse_url($databaseUrl);
    $scheme = $url['scheme'] ?? 'mysql';

    // Determine driver from URL scheme
    if ($scheme === 'postgres' || $scheme === 'postgresql') {
        $dbConnection = 'pgsql';
        $dbPort = $url['port'] ?? '5432';
    } else {
        $dbConnection = 'mysql';
        $dbPort = $url['port'] ?? '3306';
    }

    $dbHost = $url['host'] ?? '127.0.0.1';
    $dbDatabase = ltrim($url['path'] ?? '', '/');
    $dbUsername = $url['user'] ?? 'forge';
    $dbPassword = $url['pass'] ?? '';
}

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    */

    'default' => $dbConnection,

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => $dbConnection === 'mysql' ? $dbHost : env('DB_HOST', '127.0.0.1'),
            'port' => $dbConnection === 'mysql' ? $dbPort : env('DB_PORT', '3306'),
            'database' => $dbConnection === 'mysql' ? $dbDatabase : env('DB_DATABASE', 'forge'),
            'username' => $dbConnection === 'mysql' ? $dbUsername : env('DB_USERNAME', 'forge'),
            'password' => $dbConnection === 'mysql' ? $dbPassword : env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => $dbConnection === 'pgsql' ? $dbHost : env('DB_HOST', '127.0.0.1'),
            'port' => $dbConnection === 'pgsql' ? $dbPort : env('DB_PORT', '5432'),
            'database' => $dbConnection === 'pgsql' ? $dbDatabase : env('DB_DATABASE', 'forge'),
            'username' => $dbConnection === 'pgsql' ? $dbUsername : env('DB_USERNAME', 'forge'),
            'password' => $dbConnection === 'pgsql' ? $dbPassword : env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'require',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
