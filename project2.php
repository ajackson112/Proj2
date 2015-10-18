<!DOCTYPE html>
<html>
<head>
<?php
   $background = $_POST['background'];
   $card = $_POST['card'];
?>
<style>
body{
	background:url("<?php print $_POST["background"]?>");	 	
	background-size:cover;
}
</style>
<title>ROBOT SOLITAIRE GAME</title>
<link rel="stylesheet" type="text/css" href="project2.css" />
</head>

<body>

<div id="head">
<h1> SOLITAIRE </h1>
<div id="menubar">

		<ul>
			<li><a href="project1.html">START A NEW GAME</a></li></li>
		</ul>
		
	</div>
</div>

<div id="game">
<table class="center">
<tr>
<td><a href="project2m.html"><img class="images" src=<?php print $_POST["card"]?>></a> </td>
<td class="blank"></td>
<td class="blank"></td>
<td><img class="images" src="two.png" > </td>
<td><img class="images" src="ace.png" > </td>
<td><img class="images" src="jacks.png" > </td>
<td><img class="images" src="king.png" > </td>
</tr>
<tr>
<td><img class="images" src="<?php print $_POST["card"]?>" > </td>
<td><img class="images" src="<?php print $_POST["card"]?>" > </td>
<td><img class="images" src="<?php print $_POST["card"]?>" > </td>
<td><img class="images" src="<?php print $_POST["card"]?>" > </td>
<td><img class="images" src="<?php print $_POST["card"]?>" > </td>
<td><img class="images" src="<?php print $_POST["card"]?>" > </td>
<td><img class="images" src="<?php print $_POST["card"]?>" > </td>
</tr>
</table>
</div>

</body>
<h6>ROBOT SOLITAIRE</h6>

</html>