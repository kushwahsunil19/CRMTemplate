<?php
// Include your database connection file here
include_once('includes/db.php');

try {
    // Fetch follow-ups from the database
    $stmt = $conn->query("SELECT * FROM follow_ups");
    $followups = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Fetch full name of the leads associated with each follow-up
    foreach ($followups as &$followup) {
        // Fetch lead's full name
        $lead_id = $followup['lead_id'];
        $stmt = $conn->prepare("SELECT full_name FROM leads WHERE lead_id = :lead_id");
        $stmt->bindParam(':lead_id', $lead_id);
        $stmt->execute();
        $lead = $stmt->fetch(PDO::FETCH_ASSOC);
        $followup['lead_full_name'] = $lead ? $lead['full_name'] : 'Lead Not Found';
        
        // Fetch sales representative's full name
        $rep_id = $followup['assigned_to'];
        $stmt = $conn->prepare("SELECT full_name FROM sales_representatives WHERE rep_id = :rep_id");
        $stmt->bindParam(':rep_id', $rep_id);
        $stmt->execute();
        $sales_rep = $stmt->fetch(PDO::FETCH_ASSOC);
        $followup['sales_rep_full_name'] = $sales_rep ? $sales_rep['full_name'] : 'Sales Rep Not Found';
    }

    // Close the database connection
    $conn = null;

    // Return the follow-ups array
    return $followups;
} catch (PDOException $e) {
    // Handle PDO exception
    echo json_encode(array('success' => false, 'message' => 'Error: ' . $e->getMessage()));
}
?>
