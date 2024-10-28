<?php
// Start the session
session_start();

// Prevent caching
header('Expires: Thu, 1 Jan 1970 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Receipt</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body id="receipt">

    <div class="container-receipt">
        <h2>Your Submitted Message</h2>

        <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        // Check if data is in session
        if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
            $name = test_input($_SESSION['name']);
            $email = test_input($_SESSION['email']);
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
        } else {
            // GET request
            if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['recipient']) && isset($_GET['message'])) {
                $name = test_input($_GET['name']);
                $email = test_input($_GET['email']);
                $recipient = test_input($_GET['recipient']);
                $message = test_input($_GET['message']);

                // Store name and email in session
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;

                // Set cookies to remember user data for 30 days
                setcookie('user_name', $name, time() + (86400 * 30), "/"); // 30 days
                setcookie('user_email', $email, time() + (86400 * 30), "/"); // 30 days

                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Recipient:</strong> $recipient</p>";
                echo "<p><strong>Message:</strong> $message</p>";
            } else {
                echo "<p>No data received.</p>";
            }
        }

        header("refresh:11;url=index.php");
        ?>

        <p>You'll be redirected in about</p>
        <div class="countdown" id="countdown">10</div>
        <p>secs. If not, click the button below</p>
        <a href="index.php"><i class="fas fa-arrow-left"></i> Go Back to the Form</a>

    </div>
    <script>
        // JavaScript Countdown
        let count = 10; 
        const countdownElement = document.getElementById('countdown');

        const countdown = setInterval(() => {
            countdownElement.textContent = count;
            count--;

            if (count < 0) {
                clearInterval(countdown); 
                countdownElement.textContent = "0"; 
            }
        }, 1000);
    </script>
</body>
</html>
