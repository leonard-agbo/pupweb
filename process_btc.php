<?php
// process_btc.php
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
    echo '<h2>BTC payment couldn\'t be processed</h2>';
    echo '<p>Your BTC payment could not be processed. Please try again or contact support.</p>';
    echo '<a href="payment-options.html" style="color:#e67e22;font-weight:bold;text-decoration:underline;">Back to Payment Options</a>';
} else {
    echo '<h2>Invalid Request</h2>';
}
$conn->close();
?>
