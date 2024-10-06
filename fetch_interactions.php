<?php
// Include your database connection file here
include_once('includes/db.php');

try {
    // Fetch interactions from the database
    $stmt = $conn->query("SELECT * FROM lead_interactions");
    $interactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Fetch full name of the leads associated with each interaction
    foreach ($interactions as &$interaction) {
        $lead_id = $interaction['lead_id'];
        $stmt = $conn->prepare("SELECT full_name FROM leads WHERE lead_id = :lead_id");
        $stmt->bindParam(':lead_id', $lead_id);
        $stmt->execute();
        $lead = $stmt->fetch(PDO::FETCH_ASSOC);
        $interaction['full_name'] = $lead ? $lead['full_name'] : 'Lead Not Found';
    }

    // Close the database connection
    $conn = null;

    // Return the interactions array
    return $interactions;
} catch (PDOException $e) {
    // Handle PDO exception
    echo json_encode(array('success' => false, 'message' => 'Error: ' . $e->getMessage()));
}
?>
