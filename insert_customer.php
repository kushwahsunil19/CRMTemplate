<?php
// Include your database connection file here
include_once('includes/db.php');

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
    $website = filter_input(INPUT_POST, 'website', FILTER_SANITIZE_URL);
    $notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
    $billing_name = filter_input(INPUT_POST, 'billing_name', FILTER_SANITIZE_STRING);
    $billing_address_line1 = filter_input(INPUT_POST, 'billing_address1', FILTER_SANITIZE_STRING);
    $billing_address_line2 = filter_input(INPUT_POST, 'billing_address2', FILTER_SANITIZE_STRING);
    $billing_country = filter_input(INPUT_POST, 'billing_country', FILTER_SANITIZE_STRING);
    $billing_city = filter_input(INPUT_POST, 'billing_city', FILTER_SANITIZE_STRING);
    $billing_state = filter_input(INPUT_POST, 'billing_state', FILTER_SANITIZE_STRING);
    $billing_pincode = filter_input(INPUT_POST, 'billing_pincode', FILTER_SANITIZE_STRING);
    $shipping_name = filter_input(INPUT_POST, 'shipping_name', FILTER_SANITIZE_STRING);
    $shipping_address_line1 = filter_input(INPUT_POST, 'shipping_address1', FILTER_SANITIZE_STRING);
    $shipping_address_line2 = filter_input(INPUT_POST, 'shipping_address2', FILTER_SANITIZE_STRING);
    $shipping_country = filter_input(INPUT_POST, 'shipping_country', FILTER_SANITIZE_STRING);
    $shipping_city = filter_input(INPUT_POST, 'shipping_city', FILTER_SANITIZE_STRING);
    $shipping_state = filter_input(INPUT_POST, 'shipping_state', FILTER_SANITIZE_STRING);
    $shipping_pincode = filter_input(INPUT_POST, 'shipping_pincode', FILTER_SANITIZE_STRING);
    $bank_name = filter_input(INPUT_POST, 'bank_name', FILTER_SANITIZE_STRING);
    $branch = filter_input(INPUT_POST, 'branch', FILTER_SANITIZE_STRING);
    $account_holder_name = filter_input(INPUT_POST, 'account_holder_name', FILTER_SANITIZE_STRING);
    $account_number = filter_input(INPUT_POST, 'account_number', FILTER_SANITIZE_STRING);
    $ifsc = filter_input(INPUT_POST, 'ifsc', FILTER_SANITIZE_STRING);

    try {
        // Check if email or mobile number already exists
        $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM customers WHERE email = :email OR mobile = :mobile");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result['count'] > 0) {
            echo json_encode(array('success' => false, 'message' => 'Error: Email or mobile number already exists.'));
        } else {
            // Handle profile picture upload
            $profilePicName = '';
            if (isset($_FILES['profile_pic'])) {
                $uploadDir = 'uploads/';
                $profilePicName = basename($_FILES['profile_pic']['name']);
                $targetFilePath = $uploadDir . $profilePicName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                // Check file size
                if ($_FILES['profile_pic']['size'] > 2 * 1024 * 1024) { // 2 MB in bytes
                    echo json_encode(array('success' => false, 'message' => 'Error: File size exceeds 2 MB limit.'));
                    exit();
                }

                // Allow certain file formats
                $allowedExtensions = array('jpg', 'jpeg', 'png');
                if (!in_array($fileType, $allowedExtensions)) {
                    echo json_encode(array('success' => false, 'message' => 'Error: Only JPG, JPEG, and PNG files are allowed.'));
                    exit();
                }

                // Move uploaded file to specified directory
                if (!move_uploaded_file($_FILES['profile_pic']['tmp_name'], $targetFilePath)) {
                    echo json_encode(array('success' => false, 'message' => 'Error: Failed to upload file.'));
                    exit();
                }
            }

            // Prepare SQL statement
            $stmt = $conn->prepare("INSERT INTO customers (name, email, mobile, website, notes, billing_name, billing_address_line1, billing_address_line2, billing_country, billing_city, billing_state, billing_pincode, shipping_name, shipping_address_line1, shipping_address_line2, shipping_country, shipping_city, shipping_state, shipping_pincode, bank_name, branch, account_holder_name, account_number, ifsc, profile_pic) 
                                    VALUES (:name, :email, :mobile, :website, :notes, :billing_name, :billing_address_line1, :billing_address_line2, :billing_country, :billing_city, :billing_state, :billing_pincode, :shipping_name, :shipping_address_line1, :shipping_address_line2, :shipping_country, :shipping_city, :shipping_state, :shipping_pincode, :bank_name, :branch, :account_holder_name, :account_number, :ifsc, :profile_pic)");

            // Bind parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mobile', $mobile);
            $stmt->bindParam(':website', $website);
            $stmt->bindParam(':notes', $notes);
            $stmt->bindParam(':billing_name', $billing_name);
            $stmt->bindParam(':billing_address_line1', $billing_address_line1);
            $stmt->bindParam(':billing_address_line2', $billing_address_line2);
            $stmt->bindParam(':billing_country', $billing_country);
            $stmt->bindParam(':billing_city', $billing_city);
            $stmt->bindParam(':billing_state', $billing_state);
            $stmt->bindParam(':billing_pincode', $billing_pincode);
            $stmt->bindParam(':shipping_name', $shipping_name);
            $stmt->bindParam(':shipping_address_line1', $shipping_address_line1);
            $stmt->bindParam(':shipping_address_line2', $shipping_address_line2);
            $stmt->bindParam(':shipping_country', $shipping_country);
            $stmt->bindParam(':shipping_city', $shipping_city);
            $stmt->bindParam(':shipping_state', $shipping_state);
            $stmt->bindParam(':shipping_pincode', $shipping_pincode);
            $stmt->bindParam(':bank_name', $bank_name);
            $stmt->bindParam(':branch', $branch);
            $stmt->bindParam(':account_holder_name', $account_holder_name);
            $stmt->bindParam(':account_number', $account_number);
            $stmt->bindParam(':ifsc', $ifsc);
            $stmt->bindParam(':profile_pic', $profilePicName);

            // Execute the prepared statement
            if ($stmt->execute()) {
                // If insertion is successful
                echo json_encode(array('success' => true, 'message' => 'New record created successfully'));
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
