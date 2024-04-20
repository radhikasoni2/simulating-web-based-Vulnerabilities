<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $incident = $_POST['incident'];
    $prevention = $_POST['prevention'];

    // Set the recipient email address
    $to = "sonyradhika07@gmail.com"; // Replace with your email address

    // Set the email subject
    $subject = "New Identity Theft Incident Report";

    // Build the email message
    $message = "Identity Theft Incident:\n$incident\n\nPrevention Measures Taken:\n$prevention";

    // Set additional headers
    $headers = "From: sonyradhika07@gmail.com"; // Replace with your email address

    // Send the email
    $mailResult = mail($to, $subject, $message, $headers);

    if ($mailResult) {
        echo "Submission successful! The report has been sent.";
    } else {
        echo "Error sending the report. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
