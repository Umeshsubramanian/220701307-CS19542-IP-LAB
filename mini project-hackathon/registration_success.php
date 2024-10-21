<?php
session_start(); // Start the session to access registration data

// Check if registration data is available
if (!isset($_SESSION['registration'])) {
    // Redirect to the registration form if no data is found
    header('Location: register.html'); // Change to your registration page
    exit();
}

// Retrieve registration data
$registration = $_SESSION['registration'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaeaea; /* Light gray background */
            color: #000000; /* Black text */
            padding: 20px;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #000000; /* Black heading */
            margin-bottom: 20px;
        }

        .data-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff; /* White background for the data */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <h1>Registration Successful!</h1>
    
    <div class="data-container">
        <h2>Your Registration Details:</h2>
        <p><strong>Driver Name:</strong> <?php echo htmlspecialchars($registration['name']); ?></p>
        <p><strong>FIA Racing License:</strong> <?php echo htmlspecialchars($registration['licenseStatus']); ?></p>
        <p><strong>License Number:</strong> <?php echo htmlspecialchars($registration['license']); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($registration['gender']); ?></p>
        <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($registration['dob']); ?></p>
        <p><strong>Age:</strong> <?php echo htmlspecialchars($registration['age']); ?></p>
        <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($registration['phone']); ?></p>
        <p><strong>Selected Series:</strong> <?php echo htmlspecialchars($registration['series']); ?></p>
        <p><strong>Years of Experience:</strong> <?php echo htmlspecialchars($registration['experience']); ?></p>
        <p><strong>Race Date:</strong> <?php echo htmlspecialchars($registration['raceDate']); ?></p>
        <p><strong>Chosen Track:</strong> <?php echo htmlspecialchars($registration['track']); ?></p>
    </div>

    <?php
    // Clear the session data
    unset($_SESSION['registration']);
    ?>
</body>
</html>
