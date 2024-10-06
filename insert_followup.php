<?php
// Include your database connection file here
include_once('includes/db.php');

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $lead_id = filter_input(INPUT_POST, 'lead_id', FILTER_VALIDATE_INT);
    $follow_up_date = filter_input(INPUT_POST, 'follow_up_date', FILTER_SANITIZE_STRING);
    $follow_up_method = filter_input(INPUT_POST, 'follow_up_method', FILTER_SANITIZE_STRING);
    $assigned_to = filter_input(INPUT_POST, 'assigned_to', FILTER_VALIDATE_INT);

    try {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO follow_ups (lead_id, follow_up_date, follow_up_method, assigned_to) 
                                VALUES (:lead_id, :follow_up_date, :follow_up_method, :assigned_to)");

        // Bind parameters
        $stmt->bindParam(':lead_id', $lead_id);
        $stmt->bindParam(':follow_up_date', $follow_up_date);
        $stmt->bindParam(':follow_up_method', $follow_up_method);
        $stmt->bindParam(':assigned_to', $assigned_to);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // If insertion is successful
            echo json_encode(array('success' => true, 'message' => 'New follow-up scheduled successfully'));
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
