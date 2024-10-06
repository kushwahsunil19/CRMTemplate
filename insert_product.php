<?php
// Include your database connection file here
include_once('includes/db.php');

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $item_type = filter_input(INPUT_POST, 'item_type', FILTER_SANITIZE_STRING);
    $product_name = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_STRING);
    $product_description = filter_input(INPUT_POST, 'product_description', FILTER_SANITIZE_STRING);
    // Additional sanitization for file upload, if needed
    
    try {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO tbl_products (item_type, product_name, product_description) 
                                VALUES (:item_type, :product_name, :product_description)");

        // Bind parameters
        $stmt->bindParam(':item_type', $item_type);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':product_description', $product_description);
        // Bind additional parameters for file upload, if needed
        
        // Execute the prepared statement
        if ($stmt->execute()) {
            // If insertion is successful
            echo json_encode(array('success' => true, 'message' => 'New product added successfully'));
        } else {
            // If there's an error
            echo json_encode(array('success' => false, 'message' => 'Error: Unable to execute query.'));
        }
    } catch (PDOException $e) {
        // Handle PDO exception
        echo json_encode(array('success' => false, 'message' => 'Error: ' . $e->getMessage()));
    }

    // Close database connection
    $conn = null;
} else {
    // If the request method is not POST, return an error message
    echo json_encode(array('success' => false, 'message' => 'Error: Method not allowed'));
}
?>
