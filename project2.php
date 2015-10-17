<html>
<head>
<title>SOLITAIRE GAME</title>
<link rel="stylesheet" type="text/css" href="new.css" />
</head>
<body>
<div id="head">
   <h1> SOLITAIRE </h1>
      <div id="menubar">
	     <a href="project1.html">START A NEW GAME</a></li></li>
      </div>
</div>

<?php
   $background = $_POST['background'];
   $card = $_POST['card'];
   

   echo "<body style='background-image: url($background); background-repeat:no-repeat; background-size:100%'>";
   echo "<img src='$card'>";
?>
<body style='background-image: url(); background-repeat:no-repeat; background-size:100%'><body style='background-image: url()'>
</body>
</html>
