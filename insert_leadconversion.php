<?php
// Include your database connection file here
include_once('includes/db.php');

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $lead_id = filter_input(INPUT_POST, 'lead_id', FILTER_VALIDATE_INT);
    $conversion_date = filter_input(INPUT_POST, 'conversion_date', FILTER_SANITIZE_STRING);
    $conversion_notes = filter_input(INPUT_POST, 'conversion_notes', FILTER_SANITIZE_STRING);

    try {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO lead_conversion_metrics (lead_id, conversion_date, conversion_notes) 
                                VALUES (:lead_id, :conversion_date, :conversion_notes)");

        // Bind parameters
        $stmt->bindParam(':lead_id', $lead_id);
        $stmt->bindParam(':conversion_date', $conversion_date);
        $stmt->bindParam(':conversion_notes', $conversion_notes);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // If insertion is successful
            echo json_encode(array('success' => true, 'message' => 'New lead conversion added successfully'));
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
