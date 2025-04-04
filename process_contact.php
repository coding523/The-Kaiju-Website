<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate input
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($message)) {
        $errors[] = "Message is required";
    }

    // If no errors, process the form
    if (empty($errors)) {
        // In a real application, you would:
        // 1. Save to database
        // 2. Send email notification
        // 3. Log the submission

        // For now, we'll just return a success message
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for your message! We will get back to you soon.'
        ]);
        exit;
    } else {
        // Return errors
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'errors' => $errors
        ]);
        exit;
    }
}

// If not a POST request, redirect to home page
header('Location: index.php');
exit;
