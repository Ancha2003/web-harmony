<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
        <form action="logout.php" method="post">
            <button type="submit">Log Out</button>
        </form>
    </div>
</body>
</html>
