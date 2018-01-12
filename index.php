<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

<script src="js/jquery-3.2.1.js"></script>

</head>
<body>
<br>
<div class="container">
	<div class="row">
		<img class="scaleimage" height="50px"alt="" src="images/disk.png">

		<h1> Welcome to the Disk Inventory </h1>
	</div>
</div>

<br>

<div class="container">

<p>What information do you want to look at?</p>

<form>
<select id="tables">
<option value="artists">Artists</option>
<option value="borrowers">Borrowers</option>
<option value="disks">Disks</option>
</select>
<input type="button" value="Submit" onClick="post();">
</form>

<div id="tables-data">Should replace this</div>

</div>


<script src="js/global.js"></script>

</body>
</html>