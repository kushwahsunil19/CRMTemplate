<?php
// Include your database connection file here
include_once('includes/db.php');

// Check if the lead ID is provided via POST request
if(isset($_POST['lead_id'])) {
    // Sanitize the lead ID
    $leadId = filter_input(INPUT_POST, 'lead_id', FILTER_SANITIZE_NUMBER_INT);

    try {
        // Prepare SQL statement to fetch lead details
        $stmt = $conn->prepare("SELECT * FROM leads WHERE lead_id = :lead_id");
        $stmt->bindParam(':lead_id', $leadId);
        $stmt->execute();
        $leadDetails = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if lead details are found
        if ($leadDetails) {
            // Return lead details as JSON response
            echo json_encode($leadDetails);
        } else {
            // If lead not found, return error message
            echo json_encode(array('error' => 'Lead not found'));
        }
    } catch (PDOException $e) {
        // Handle PDO exception
        echo json_encode(array('error' => 'Database error: ' . $e->getMessage()));
    }

    // Close database connection
    $conn = null;
} else {
    // If lead ID is not provided, return error message
    echo json_encode(array('error' => 'Lead ID is required'));
}
?>
