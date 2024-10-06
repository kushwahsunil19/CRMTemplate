<?php
include_once('includes/db.php');

try {
    // Prepare SQL statement to fetch all quotations
    $stmt = $conn->prepare("SELECT * FROM quotes ORDER BY created_at DESC");
    $stmt->execute();
    $quotations = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Fetch full name of the leads associated with each quotation
    foreach ($quotations as &$quotation) {
        // Fetch lead's full name
        $lead_id = $quotation['lead_id'];
        $stmt = $conn->prepare("SELECT full_name FROM leads WHERE lead_id = :lead_id");
        $stmt->bindParam(':lead_id', $lead_id);
        $stmt->execute();
        $lead = $stmt->fetch(PDO::FETCH_ASSOC);
        $quotation['lead_full_name'] = $lead ? $lead['full_name'] : 'Lead Not Found';
    }

    // Close the database connection
    $conn = null;

    // Return the quotations array
    return $quotations;
} catch (PDOException $e) {
    // Handle PDO exception
    echo json_encode(array('success' => false, 'message' => 'Error: ' . $e->getMessage()));
}
?>
