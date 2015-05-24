<?php
include("../phonerecords/dbconnect.php")
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Artist</title>
<link href="../phonerecords/mainstyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style type="text/css">
.subtleSet {
	border-radius:25px;
	width: 30em;
}
.deleteButton {
	color: red;
}
</style>
<link href="mainstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="headerh1"><h1>More Artists</h1></div>
    </header>
    <div id="navbar">
        <center><a href="../phonerecords/home.html" target="_self"><img src="../phonerecords/Images/TCMC150100.jpg" alt="Townsville Music Centre Logo"></a></center>
<ul>
	<div class = "tsvh1"> <h1>Townsville <span>Community Music Centre</span></h1> </div> 
	<li><a href="../phonerecords/home.html" target="_self">Home</a></li>
	<li><a href="../phonerecords/announcements.html" target="_self">Announcements</a></li>
	<li><a href="../phonerecords/events.html" target="_self">Events</a></li>
	<li><a href="../phonerecords/artists.html" target="_self">Artists</a></li>            
	<li><a href="../phonerecords/history.html" target="_self">History</a></li>	
     <li><a href="../phonerecords/about.html" target="_self">About/Contact Us</a></li>
	<li><a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534?fref=ts" target="_blank"><img src="../phonerecords/Images/FB_FindUsOnFacebook-114.png" alt="Find us on Facebook"></a></li>
</ul>
    </div>
<form id="insert" name="insert" method="post" action="../phonerecords/dbprocessart.php">
<fieldset class="subtleSet">
    <h2>Insert new artist:</h2>
    <p>
      <label for="name">Name: </label>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="description">Descrition: </label>
      <input type="text" name="description" id="description">
    </p>
    <p>
      <input type="submit" name="submit" id="submit" value="Insert Entry">
    </p>
</fieldset>
</form>

<fieldset class="subtleSet">
<h2>Current artists:</h2>
<?php
// Display what's in the database
$sql = "SELECT * FROM people";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="../phonerecords/dbprocessphone.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' /> <input type='text' name='description' value='$row[description]' />\n";
	echo "<input type='hidden' name='id' value='$row[id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>