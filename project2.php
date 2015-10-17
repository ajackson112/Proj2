<html>
<head>
<html>
<head>
</head>
<body>
<?php
   $background = $_POST['background'];
   $card = $_POST['card'];
   

   echo "<body style='background-image: url($background); background-repeat:no-repeat; background-size:100%'>";
   echo "<img src='$card'>";
?>
</body>
</html>
