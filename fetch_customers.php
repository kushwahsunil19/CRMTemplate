<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'includes/db.php';

$sql = "SELECT id,name, mobile, email, billing_city AS city, created_at FROM customers";
$stmt = $conn->prepare($sql);
$stmt->execute();

$customers = $stmt->fetchAll(PDO::FETCH_ASSOC);

$conn = null;
?>