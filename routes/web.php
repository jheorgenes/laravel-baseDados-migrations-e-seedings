<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexão com a base de dados: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Não foi possível conectar com a base de dados. Erro: " . $e->getMessage());
    }
});

Route::get('/sqlite', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexão com a base de dados: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Não foi possível conectar com a base de dados. Erro: " . $e->getMessage());
    }
});

Route::get('/mysql_test_two_databases', function () {
    try {
        DB::connection('mysql_users')->getPdo();
        DB::connection('mysql_app')->getPdo();
        echo "Conexão com a base de dados: " . DB::connection('mysql_users')->getDatabaseName();
        echo "<br>";
        echo "Conexão com a base de dados: " . DB::connection('mysql_app')->getDatabaseName();
    } catch (\Exception $e) {
        die("Não foi possível conectar com a base de dados. Erro: " . $e->getMessage());
    }
});
