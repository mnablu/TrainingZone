<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<?php
require('config.php');

if (isset($_POST['submit'])){
	$uname = mysql_escape_string($_POST['uname']);
	$pass = mysql_escape_string($_POST['pass']);
	$pass = md5 ($pass);
	
	$sql = mysql_query ("SELECT * FROM `users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
	if(mysql_num_rows($sql)>0){
		echo "you are now logged in.";
		exit();
	}else{
		echo " Wrong U/P combination";
	}
		
	
}else{

$form = <<<EOT
	<from action="login.php" method="POST">
	Username: <input type="text" name="uname" /><br />
	Password: <input type="password" name="pass" /><br />
	<input type="submit" value = "Log in" name="submit" />
	</form>
EOT;
	
echo $form;

}

?>
</body>
</html>