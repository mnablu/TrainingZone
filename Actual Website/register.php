<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link href="register.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>
  <?php
require('config.php');

if(isset($_POST['submit'])){
	///Perform Verification
	$email1 = $_POST['emial1'];
	$enail2 = $_POST['email2'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	
	if($email1 == $email2){
		if ($pass1 == $pass2){
			///All good
			
			$name = mysql_escape_string($_POST['name']);
			$lname = mysql_escape_string($_POST['lname']);
			$uame = mysql_escape_string($_POST['uname']);
			$email1 = mysql_escape_string($_POST['email1']);
			$email2 = mysql_escape_string($_POST['email2']);
			$pass1 = mysql_escape_string($_POST['pass1']);
			$pass2 = mysql_escape_string($_POST['pass2']);
			
			$sql = mysql_query("SELECT * FROM `users` WHERE `uname` = $uname'");
			if(mysql_num_rows($sql) > 0){
				echo "Sorry, that user already exists.";
				exit();
			
			mysql_query("INSERT INTO `users` (`id`, `name`, `lname`, `uname`, `email`, `pass`) VALUES(NULL, '$name', '$lname', '$uname', '$email1', '$pass1',)");
			
			
			
		}else{
			echo "Sorry, your password dont match. <br />";
			exit();
			}
	}else{
		echo "Sorry, your email's dont match. <br /><br />";
		}
}else{
	
$form = <<<EOT
	<from action="register.php" method="POST">
	First Name: <input type="text" name="name" /><br />
	Last Name: <input type="text" name="lname" /><br />
	Username: <input type="text" name="uname" /><br />
	Email: <input type="text" name="email1" /><br />
	Confirm Email: <input type="text" name="email2" /><br />
	Password: <input type="password" name="pass1" /><br />
	Confirm Password: <input type="password" name="pass2" /><br />
	<input type="submit" value="Register" name="submit" /><br />
	</form>	
EOT;
	
echo $form;
}
}else{
	echo "program crashed";
}
?></p>

<p>
<a href="../../membership/Membership applic form2014.pdf"><img src="Images/pdf_icon.png" alt="" width="29" height="29" align="absmiddle"/></a><a href="../../membership/Membership applic form2014.pdf" id="pdf">Download the Registration form as a pdf.file
</a></p>
<p>
 <a href="../../membership/Membership applic form 2015.doc"><img src="Images/Word_2013_Icon.png" alt="" width="29" height="26" align="absmiddle"/></a><a href="../../membership/Membership applic form 2015.doc" id="docx">Download the Registration form as a Word Document
</a></p>

</body>
</html>