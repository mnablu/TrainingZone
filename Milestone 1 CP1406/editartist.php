<?php
include("dbconnect.php")

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Artists</title>
<style type="text/css">
.subtleSet {
	border-radius:25px;
	width: 30em;
}
.deleteButton {
	color: red;
}

.button {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#0b2e45), to(#65a9d7));
   background: -webkit-linear-gradient(top, #0b2e45, #65a9d7);
   background: -moz-linear-gradient(top, #0b2e45, #65a9d7);
   background: -ms-linear-gradient(top, #0b2e45, #65a9d7);
   background: -o-linear-gradient(top, #0b2e45, #65a9d7);
   padding: 14.5px 29px;
   -webkit-border-radius: 10px;
   -moz-border-radius: 10px;
   border-radius: 10px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #ffffff;
   font-size: 22px;
   font-family: Georgia, Serif;
   text-decoration: none;
   text-align:center;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #28597a;
   background: #28597a;
   color: #ababab;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
.head {
	text-align:center;
	font-family: Georgia, Serif;
	font-size: 50px;
	 color: #ffffff;
   </style> 
</style>
</head>

<body>


<h1>Artists Database</h1>


<fieldset class="subtleSet">
<h2>Current data:</h2>
<?php

$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="artists/dbprocessartists.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' />\n"; 
	echo "<input type='text' name='details' value='$row[details]' />\n";
	echo "<input type='text' name='genre' value='$row[genre]' /> \n";
	echo "<input type='text' name='phone' value='$row[phone]' />\n";
	echo "<input type='text' name='email' value='$row[email]' />\n";
	echo "<input type='text' name='website' value='$row[website]' />\n";
	
	echo "<input type='hidden' name='id' value='$row[id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}
echo "</fieldset>\n";

$dbh = null;
?>
<br>
<a href="index.php"><div class ="button"> Back </div></a>
</body>
</html>