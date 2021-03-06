<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Artist</title>
<style>
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
</head>

<?php
include(".php")
?>


<body>
<h1>Add Event</h1>
<form id="insert" name="insert" method="post" action=".php">
<fieldset class="subtleSet">
    <h2>Insert new event:</h2>
    <p>
      <label for="name">Event Name: </label>
      <input type="text" name="name" id="name">
    </p>
	 <p>
      <label for="band">Band Name: </label>
      <input type="text" name="band" id="band">
    </p>
    <p>
      <label for="details">Description: </label>
      <input type="text" name="details" id="details">
    </p>
   
    <p>
      <input type="submit" name="submit" id="submit" value="Insert Entry">
    </p>
</fieldset>
</form>
<br>
<a href="events.php"><div class ="button"> Back </div></a>
</body>
</html>