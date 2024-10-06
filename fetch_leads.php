<?php
include_once('includes/db.php');

try {
    // Prepare SQL statement to fetch all leads
    $stmt = $conn->prepare("SELECT * FROM leads ORDER BY created_at DESC");
    $stmt->execute();
    $leads = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
