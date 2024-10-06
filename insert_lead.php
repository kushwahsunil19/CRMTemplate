<?php
// Include your database connection file here
include_once('includes/db.php');

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone_number = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $lead_source = filter_input(INPUT_POST, 'lead_source', FILTER_SANITIZE_STRING);
    $lead_status = 'New';
    $lead_stage = 'Initial Contact';

    try {
        // Check if email or phone number already exists
        $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM leads WHERE email = :email OR phone_number = :phone_number");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result['count'] > 0) {
            echo json_encode(array('success' => false, 'message' => 'Error: Email or phone number already exists.'));
        } else {
            // Prepare SQL statement
            $stmt = $conn->prepare("INSERT INTO leads (full_name, email, phone_number, address, lead_source, lead_status, lead_stage) 
                                    VALUES (:full_name, :email, :phone_number, :address, :lead_source, :lead_status, :lead_stage)");

            // Bind parameters
            $stmt->bindParam(':full_name', $full_name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone_number', $phone_number);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':lead_source', $lead_source);
            $stmt->bindParam(':lead_status', $lead_status);
            $stmt->bindParam(':lead_stage', $lead_stage);

            // Execute the prepared statement
            if ($stmt->execute()) {
                // If insertion is successful
                echo json_encode(array('success' => true, 'message' => 'New lead created successfully'));
            } else {
                // If there's an error
                echo json_encode(array('success' => false, 'message' => 'Error: Unable to execute query.'));
            }
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
