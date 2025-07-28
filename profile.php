<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>User Profile</h1>
</header>

<main>
    <h2>Hello, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="index.php">Back to Home</a> |
    <a href="logout.php">Logout</a>
</main>

</body>
</html>
