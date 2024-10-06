<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include your database connection file here
include_once('includes/db.php');

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $lead_id = filter_input(INPUT_POST, 'lead_id', FILTER_SANITIZE_NUMBER_INT);
    $quote_amount = filter_input(INPUT_POST, 'total_amount', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    // Format and sanitize the quotation date
    $quotation_date = DateTime::createFromFormat('d-m-Y', $_POST['quotation_date']);
    $quotation_date = $quotation_date ? $quotation_date->format('Y-m-d') : null;

    // Sanitize and format the due date
    $due_date = DateTime::createFromFormat('d-m-Y', $_POST['due_date']);
    $due_date = $due_date ? $due_date->format('Y-m-d') : null;
    $status = 'Pending'; // Default status
    $notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
    $terms_and_conditions = filter_input(INPUT_POST, 'terms_and_conditions', FILTER_SANITIZE_STRING);
    $signature_name = filter_input(INPUT_POST, 'signature_name', FILTER_SANITIZE_STRING);
    $signature_image = filter_input(INPUT_POST, 'signature_image', FILTER_SANITIZE_STRING);
    $bank_id = filter_input(INPUT_POST, 'bank_id', FILTER_SANITIZE_NUMBER_INT);

    // Process product details from the form
    $product_ids = isset($_POST['product_id']) ? $_POST['product_id'] : [];
    $quantities = isset($_POST['quantity']) ? $_POST['quantity'] : [];
    $rates = isset($_POST['rate']) ? $_POST['rate'] : [];
    $discounts = isset($_POST['discount']) ? $_POST['discount'] : [];
    $taxes = isset($_POST['tax']) ? $_POST['tax'] : [];
    $amounts = isset($_POST['amount']) ? $_POST['amount'] : [];

    try {
        // Begin transaction
        $conn->beginTransaction();

        // Prepare SQL statement to insert quotation details
        $stmt = $conn->prepare("INSERT INTO quotes (lead_id, quote_amount, quote_date, valid_until, status, notes, terms_and_conditions, signature_name, signature_image, bank_id) 
            VALUES (:lead_id, :quote_amount, :quote_date, :valid_until, :status, :notes, :terms_and_conditions, :signature_name, :signature_image, :bank_id)");

        // Bind parameters
        $stmt->bindParam(':lead_id', $lead_id);
        $stmt->bindParam(':quote_amount', $quote_amount);
        $stmt->bindParam(':quote_date', $quotation_date);
        $stmt->bindParam(':valid_until', $due_date);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':notes', $notes);
        $stmt->bindParam(':terms_and_conditions', $terms_and_conditions);
        $stmt->bindParam(':signature_name', $signature_name);
        $stmt->bindParam(':signature_image', $signature_image);
        $stmt->bindParam(':bank_id', $bank_id);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // Get the last inserted quote ID
            $quote_id = $conn->lastInsertId();

            // Prepare SQL statement to insert product details
            $productStmt = $conn->prepare("INSERT INTO tbl_quotes_products (quote_id, product_id, quantity, rate, discount, tax, amount, created_at) VALUES (:quote_id, :product_id, :quantity, :rate, :discount, :tax, :amount, CURRENT_TIMESTAMP)");

           foreach ($product_ids as $key => $product_id) {
    // Create variables for each array element
    $quantity = $quantities[$key];
    $rate = $rates[$key];
    $discount = $discounts[$key];
    $tax = $taxes[$key];
    $amount = $amounts[$key];
    
    // Bind product details
    $productStmt->bindParam(':quote_id', $quote_id);
    $productStmt->bindParam(':product_id', $product_id);
    $productStmt->bindParam(':quantity', $quantity);
    $productStmt->bindParam(':rate', $rate);
    $productStmt->bindParam(':discount', $discount);
    $productStmt->bindParam(':tax', $tax);
    $productStmt->bindParam(':amount', $amount);

                // Execute the prepared statement for each product
                if (!$productStmt->execute()) {
                    // If there's an error inserting product, throw an exception
                    throw new PDOException('Error inserting product details');
                }
            }

            // Commit the transaction
            $conn->commit();
            // If insertion is successful
            echo json_encode(array('success' => true, 'message' => 'Quotation and products added successfully'));
        } else {
            // If there's an error inserting quotation, throw an exception
            throw new PDOException('Error inserting quotation details');
        }
    } catch (PDOException $e) {
        // Rollback the transaction in case of error
        $conn->rollBack();
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
