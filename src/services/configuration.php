<?php
include("./src/dao/mysql.adapter.php");
$migration = new Migration(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_PORT']
);

$migration->migrateFromSqlFile("./db.sql");
