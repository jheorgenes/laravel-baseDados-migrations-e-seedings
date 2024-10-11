<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/mysql_test', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexão com a base de dados: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Não foi possível conectar com a base de dados. Erro: " . $e->getMessage());
    }
});

// Route::get('/sqlite', function () {
//     try {
//         DB::connection()->getPdo();
//         echo "Conexão com a base de dados: " . DB::connection()->getDatabaseName();
//     } catch (\Exception $e) {
//         die("Não foi possível conectar com a base de dados. Erro: " . $e->getMessage());
//     }
// });

// Route::get('/mysql_test_two_databases', function () {
//     try {
//         DB::connection('mysql_users')->getPdo();
//         DB::connection('mysql_app')->getPdo();
//         echo "Conexão com a base de dados: " . DB::connection('mysql_users')->getDatabaseName();
//         echo "<br>";
//         echo "Conexão com a base de dados: " . DB::connection('mysql_app')->getDatabaseName();
//     } catch (\Exception $e) {
//         die("Não foi possível conectar com a base de dados. Erro: " . $e->getMessage());
//     }
// });

// Route::get('/mysql_test_dinamic_connection', function () {
//     try {

//         Config::set('database.connections.mysql', [
//             'driver' => 'mysql',
//             'url' => '',
//             'host' => 'localhost',
//             'port' => 3306,
//             'database' => 'laravel_mysql_auth',
//             'username' => 'user_laravel_mysql_database',
//             'password' => 'SomAXefir7gOBu3ICes87ujAf3XudO',
//             'unix_socket' => env('DB_SOCKET', ''),
//             'charset' => env('DB_CHARSET', 'utf8mb4'),
//             'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
//             'prefix' => '',
//             'prefix_indexes' => true,
//             'strict' => true,
//             'engine' => null,
//             'options' => extension_loaded('pdo_mysql') ? array_filter([
//                 PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
//             ]) : [],
//         ]);

//         DB::connection('mysql')->getPdo();
//         echo 'Ligação OK';
//     } catch (\Throwable $th) {
//         echo 'Deu erro';
//     }
// });
