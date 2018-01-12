<!DOCTYPE html>
<html>
<head>
</head>
<body>

<!-------------------------------------------------------------------------
1) Create some html content that can be accessed by jquery
-------------------------------------------------------------------------->
<p>What information do you want to look at?</p>

<select id="tables">
<option value="" selected disabled>Select One</option>
<option value="artists">Artists</option>
<option value="borrowers">Borrowers</option>
<option value="disks">Disks</option>
</select>

<div id="displaydata">Should replace this</div>

<script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script src="js/global.js"></script>

</body>
</html>