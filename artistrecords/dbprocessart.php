<?php

include("dbconnect.php");
$debugOn = true;

if ($_REQUEST['submit'] == "X")
{
	$sql = "DELETE FROM people WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: artist.php"); 
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SQLite Database (Artist Records)</title>
</head>

<body>
<h1>Results</h1>
<?php
echo "<h2>Form Data</h2>";
echo "<pre>";
print_r($_REQUEST); 
echo "</pre>";

if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO people (name, description) VALUES ('$_REQUEST[name]', '$_REQUEST[description]')";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Inserted $_REQUEST[name]";
	else
		echo "Not inserted"; 
}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM people WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Deleted $_REQUEST[name]";
	else
		echo "Not deleted";
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE people SET name = '$_REQUEST[name]', description = '$_REQUEST[description]' WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Updated $_REQUEST[name]";
	else
		echo "Not updated";
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
echo "</strong></p>\n";


echo "<h2>Artist Records in Database Now</h2>\n";
$sql = "SELECT * FROM people";
$result = $dbh->query($sql);
$resultCopy = $result;

if ($debugOn) {
	echo "<pre>";	

	$rows = $result->fetchall(PDO::FETCH_ASSOC);
	echo count($rows) . " records in table<br />\n";
	print_r($rows);
	echo "</pre>";
	echo "<br />\n";
}
foreach ($dbh->query($sql) as $row)
{
	print $row[name] .' - '. $row[description] . "<br />\n";
}

 
$dbh = null;
?>
<p><a href="phone.php">Return to database test page</a></p>
</body>
</html>