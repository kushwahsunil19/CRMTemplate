<?php
include('includes/db.php');

$response = array('success' => false, 'message' => '');

// Check if all required fields are provided
if (isset($_POST['bank_name'], $_POST['account_number'], $_POST['branch_name'], $_POST['ifsc_code'])) {
    $bank_name = $_POST['bank_name'];
    $account_number = $_POST['account_number'];
    $branch_name = $_POST['branch_name'];
    $ifsc_code = $_POST['ifsc_code'];

    try {
        // Check if the bank details already exist
        $checkStmt = $conn->prepare("SELECT COUNT(*) FROM banks WHERE bank_name = :bank_name AND account_number = :account_number AND ifsc_code = :ifsc_code");
        $checkStmt->bindParam(':bank_name', $bank_name);
        $checkStmt->bindParam(':account_number', $account_number);
        $checkStmt->bindParam(':ifsc_code', $ifsc_code);
        $checkStmt->execute();
        $count = $checkStmt->fetchColumn();

        if ($count > 0) {
            $response['message'] = 'Bank details already exist.';
        } else {
            // Prepare and execute the insert statement
            $stmt = $conn->prepare("INSERT INTO banks (bank_name, account_number, branch_name, ifsc_code, created_at, updated_at) VALUES (:bank_name, :account_number, :branch_name, :ifsc_code, NOW(), NOW())");
            $stmt->bindParam(':bank_name', $bank_name);
            $stmt->bindParam(':account_number', $account_number);
            $stmt->bindParam(':branch_name', $branch_name);
            $stmt->bindParam(':ifsc_code', $ifsc_code);
            
            if ($stmt->execute()) {
                $response['success'] = true;
                $response['message'] = 'Bank details added successfully.';
            } else {
                $response['message'] = 'Failed to add bank details.';
            }
        }
    } catch (PDOException $e) {
        $response['message'] = 'Database error: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'All fields are required.';
}

// Close the database connection
$conn = null;

// Return the JSON response
echo json_encode($response);
?>
