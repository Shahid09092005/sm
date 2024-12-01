<?php
// Check if the form data is sent via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prepare data to be saved in JSON format
    $formData = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message,
        'submittedAt' => date('Y-m-d H:i:s')
    );

    // Path to the file where the form data will be stored
    $filePath = 'try.json';

    // Read the existing data from the file (if any)
    if (file_exists($filePath)) {
        $existingData = json_decode(file_get_contents($filePath), true);
    } else {
        $existingData = array();
    }

    // Add the new form data
    $existingData[] = $formData;

    // Save the updated data back to the file
    file_put_contents($filePath, json_encode($existingData, JSON_PRETTY_PRINT));

    // Display success message (you can redirect or show a message here)
    echo 'Form submitted successfully!';
}
?>
