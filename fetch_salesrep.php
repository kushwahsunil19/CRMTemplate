<?php
// Include your database connection file here
include_once('includes/db.php');

try {
    // Fetch sales representatives from the database
    $stmt = $conn->query("SELECT * FROM sales_representatives");
    $sales_reps = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Close the database connection
    $conn = null;

    // Return the sales representatives array
    return $sales_reps;
} catch (PDOException $e) {
    // Handle PDO exception
    echo json_encode(array('success' => false, 'message' => 'Error: ' . $e->getMessage()));
}
?>
