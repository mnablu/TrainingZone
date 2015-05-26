<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>More Events</title>
</head>

<body>
<?php
$database = new SQLiteDatabase('events.db');

$sql = 'CREATE TABLE events (
		eventid INTEGER PRIMARY KEY,
		ename TEXT,
		edescription TEXT, )';

$database->queryExec($sql);

$sql = 'INSERT INTO events (ename, edescription)'.
	'VALUES("OrangeLemons, We are Famous"); ' ;
	$database->queryExec($sql);

$sql = "SELECT * FROM events ORDER BY ename, edescription";
$result = $database->query($sql);

while($row = $result->fetch()){
	echo $row['ename'] . " " . ['edescription'];
}
?>
</body>
</html>