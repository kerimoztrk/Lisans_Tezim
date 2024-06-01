<?php
$host = "localhost";
$db = "deneme3";
$charset = "utf8mb4";
$user = "root";
$pass = ""; // Şifrenizin doğru olduğundan emin olun

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $conn = new PDO($dsn, $user, $pass, $options);
   
} catch (\PDOException $e) {
    die("Veritabanına bağlanırken hata oluştu: " . $e->getMessage());
}
?>
