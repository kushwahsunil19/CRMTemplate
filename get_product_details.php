<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Include your database connection file here
include_once('includes/db.php');

// Check if the product_id parameter is set
if(isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    try {
        // Prepare and execute the SQL statement to fetch product details
        $stmt = $conn->prepare("SELECT  product_id, product_name FROM tbl_products WHERE product_id = :product_id");
        $stmt->bindParam(':product_id', $productId);
        $stmt->execute();
        
        // Fetch the product details
        $productDetails = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Check if product details were found
        if($productDetails) {
            // Return product details as JSON
            echo json_encode($productDetails);
        } else {
            // Product not found
            echo json_encode(array('error' => 'Product not found'));
        }
    } catch (PDOException $e) {
        // Handle database error
        echo json_encode(array('error' => 'Database Error: Unable to fetch product details'));
    }
} else {
    // product_id parameter not set
    echo json_encode(array('error' => 'Product ID not provided'));
}

// Close database connection
$conn = null;
?>
