<?php
$app = require __DIR__ . '/bootstrap/app.php';
echo "DB_PASSWORD: [" . config('database.connections.mysql.password') . "]\n";
echo "DB_USERNAME: [" . config('database.connections.mysql.username') . "]\n";
echo "DB_HOST: [" . config('database.connections.mysql.host') . "]\n";
