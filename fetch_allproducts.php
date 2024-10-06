<?php
// Include your database connection file here
include_once('includes/db.php');

try {
    // Fetch products from the database
    $stmt = $conn->prepare("SELECT product_id AS id, product_name AS name FROM tbl_products");
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Output as JSON
    echo json_encode($products);
} catch (PDOException $e) {
    // Handle PDO exception
    echo json_encode(array('error' => 'Error fetching products: ' . $e->getMessage()));
}

// Close database connection
$conn = null;
?>
