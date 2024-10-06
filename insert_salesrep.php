<?php
// Include your database connection file here
include_once('includes/db.php');

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone_number = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_STRING);
    $department = filter_input(INPUT_POST, 'department', FILTER_SANITIZE_STRING);

    try {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO sales_representatives (full_name, email, phone_number, department) 
                                VALUES (:full_name, :email, :phone_number, :department)");

        // Bind parameters
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':department', $department);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // If insertion is successful
            echo json_encode(array('success' => true, 'message' => 'New sales representative added successfully'));
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
