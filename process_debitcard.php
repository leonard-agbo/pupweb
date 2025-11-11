<?php
// process_debitcard.php
$host = 'localhost';
$db   = 'pupweb_payments';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Always show failure message and link to payment options
    echo '<h2>Debit card couldn\'t be processed</h2>';
    echo '<p>Your debit card could not be processed. Please proceed to BTC payment option.</p>';
    echo '<a href="payment-options.html" style="color:#e67e22;font-weight:bold;text-decoration:underline;">Back to Payment Options</a>';
} else {
    echo '<h2>Invalid Request</h2>';
}
$conn->close();
?>
