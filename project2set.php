<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
   $_SESSION["background"] = $_POST['background'];
   $_SESSION["card"] = $_POST['card'];
?>
</head>
<body>
<meta http-equiv="refresh" content="0;URL=project2.php" />
</body>
</html>