# Laravel Studies
Este projeto foi criado no contexto do curso
Laravel Completo - Framework, ecossistema e Projetos Web (Udemy)
@João Ribeiro

# Instalação
Abrir o terminal e executar o seguinte comando:
composer update

# comandos migrations

-- Criando Migrations
(A primeira palavra 'create' é o tipo de atividade que deseja, o segundo é o nome da Tabela e o 'table' é especificando que é tabela, coluna, etc.)
```sh
$ php artisan make:migration create_products_table
```

-- Adicionando coluna em tabelas com Migrations (add)
```sh
$ php artisan make:migration add_picture_products_table
```

-- Alterando uma coluna com Migrations (change)
```sh
$ php artisan make:migration change_description_products_table
```

Executar as migrations
```sh
$ php artisan migrate
```

Desfaz a ultima migration
```sh
$ php artisan migrate:rollback
```


Desfaz todas as migrations desde a criação da base
```sh
$ php artisan migrate:reset
```


Exibe o histórico de quais migrations serão executadas
```sh
$ php artisan migrate --prepend
```

# Comandos para gerar Seeders

Criar um seeder
```sh
$ php artisan make:seeder NomeSeeder
```

Gerar seeders com o comando
```sh
$ php artisan db:seed --class=NomedoSeederGeradp
```
