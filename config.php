<?php
$dsn = 'pgsql:host=dpg-cugoj62j1k6c73b07urg-a.oregon-postgres.render.com;port=5432;dbname=todoapp_g77m';
$user = 'todoapp_g77m_user';
$password = 'MJovArDsluu5fbHq1ww6SzLD2wADkCAq';

try {
    $pdo = new PDO($dsn, $user, $password);
    echo "Connected to the database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>