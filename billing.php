<?php
// billing.php - Billing and Payment Page
// Connect to MySQL database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pupweb';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $puppy = $conn->real_escape_string($_POST['puppy']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $payment = $conn->real_escape_string($_POST['payment']);
    $sql = "INSERT INTO orders (name, email, address, puppy, amount, payment) VALUES ('$name', '$email', '$address', '$puppy', '$amount', '$payment')";
    if ($conn->query($sql) === TRUE) {
        $msg = "Order placed successfully!";
    } else {
        $msg = "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing & Payment - PupWeb</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <header>
        <h1>PupWeb</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="adopt.html">Free Puppies to Adopt</a>
            <a href="checkout.html">Checkout</a>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h2>Billing & Payment</h2>
            <p>Enter your details to complete your puppy purchase or adoption.</p>
        </section>
        <section class="billing-form" style="max-width:500px;margin:2rem auto;background:#23242a;padding:2rem;border-radius:16px;box-shadow:0 2px 16px rgba(0,0,0,0.18);">
            <?php if(isset($msg)) { echo '<p style="color:#27ae60;text-align:center;">'.$msg.'</p>'; } ?>
            <form method="post">
                <label for="name">Full Name</label><br>
                <input type="text" id="name" name="name" required style="width:100%;margin-bottom:1rem;"><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required style="width:100%;margin-bottom:1rem;"><br>
                <label for="address">Address</label><br>
                <input type="text" id="address" name="address" required style="width:100%;margin-bottom:1rem;"><br>
                <label for="puppy">Puppy Name</label><br>
                <input type="text" id="puppy" name="puppy" required style="width:100%;margin-bottom:1rem;" value="<?php echo isset($_GET['puppy']) ? htmlspecialchars($_GET['puppy']) : ''; ?>"><br>
                <label for="amount">Total Amount ($)</label><br>
                <input type="number" id="amount" name="amount" required style="width:100%;margin-bottom:1rem;" value="<?php echo isset($_GET['amount']) ? htmlspecialchars($_GET['amount']) : ''; ?>"><br>
                <label for="payment">Payment Method</label><br>
                <select id="payment" name="payment" required style="width:100%;margin-bottom:1rem;">
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                </select><br>
                <button type="submit" style="width:100%;background:#e67e22;color:#fff;padding:0.7rem;font-size:1rem;border:none;border-radius:5px;">Pay Now</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 PupWeb. All rights reserved.</p>
    </footer>
    <script>
    // Prefill from sessionStorage if not set by query string
    window.addEventListener('DOMContentLoaded', function() {
      if (!document.getElementById('puppy').value && window.sessionStorage) {
        document.getElementById('puppy').value = sessionStorage.getItem('puppyName') || '';
      }
      if (!document.getElementById('amount').value && window.sessionStorage) {
        document.getElementById('amount').value = sessionStorage.getItem('puppyAmount') || '';
      }
    });
    </script>
</body>
</html>
