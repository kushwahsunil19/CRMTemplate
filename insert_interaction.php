<?php
// Include your database connection file here
include_once('includes/db.php');

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $lead_id = filter_input(INPUT_POST, 'lead_id', FILTER_VALIDATE_INT);
    $interaction_type = filter_input(INPUT_POST, 'interaction_type', FILTER_SANITIZE_STRING);
    $interaction_date = filter_input(INPUT_POST, 'interaction_date', FILTER_SANITIZE_STRING);
    $notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
    $next_steps = filter_input(INPUT_POST, 'next_steps', FILTER_SANITIZE_STRING);

    try {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO lead_interactions (lead_id, interaction_type, interaction_date, notes, next_steps) 
                                VALUES (:lead_id, :interaction_type, :interaction_date, :notes, :next_steps)");

        // Bind parameters
        $stmt->bindParam(':lead_id', $lead_id);
        $stmt->bindParam(':interaction_type', $interaction_type);
        $stmt->bindParam(':interaction_date', $interaction_date);
        $stmt->bindParam(':notes', $notes);
        $stmt->bindParam(':next_steps', $next_steps);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // If insertion is successful
            echo json_encode(array('success' => true, 'message' => 'New lead interaction added successfully'));
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
