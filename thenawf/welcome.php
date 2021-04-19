<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THENAWF</title>
</head>
<body>
<body style="color:white"background="bg.jpg">
    <?php echo "<h1>WELCOME TO 'THENAWF' " . $_SESSION['username'] . "</h1>";?>
  <h2> This is the index page.</h2>
    <a href="logout.php">Logout</a>
</body>
</html>