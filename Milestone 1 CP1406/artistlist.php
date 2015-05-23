<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Artists</title>
<link href="mainstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style>
body {
    background-color: white;
    font-family: Georgia, Serif;
}
div {
    column-width: 60%;
    border-style: none;
    overflow: auto;
}

.artistPhotoLeft,
.artistThumbLeft
 {
    margin-left: 2.5em;
    margin-right: 2.5em;
    margin-bottom: 1.5em;
}

.artistPhotoLeft,

{
    border-top-right-radius: 2em;
    border-top-left-radius: 2em;
    border-bottom-left-radius: 2em;
    border-bottom-right-radius: 2em;
}

.artistPhotoLeft,
.artistThumbLeft  {
    float: left;
}


div.artistList {
    margin: none;
    padding: none;
    background-color: white;
    border-style: none;
    overflow: auto;
}


.artistForm {
    align-text: left;
}


label {
    float: left;
    width: 6em;
    text-align:
    right;
    margin-right: 10px;
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
</head>

<body>
<header>
        <div id="signUpButton"><a href="#" target="_self">Sign Up</a></div>
        <div id="LogInButton"><a href="#" target="_self">Log In</a></div>
        <div class="headerh1"><h1>Featured Artists</h1></div>
    </header>
    <div id="navbar">
        <center><a href="home.html" target="_self"><img src="Images/TCMC150100.jpg" alt="Townsville Music Centre Logo"></a></center>
<ul>
    <div class = "tsvh1"> <h1>Townsville <span>Community Music Centre</span></h1> </div>
	<li><a href="home.html" target="_self">Home</a></li>
	<li><a href="announcements.html" target="_self">Announcements</a></li>
	<li><a href="events.php" target="_self">Events</a></li>
	<li><a href="artistlist.php" target="_self">Artists</a></li>            
	<li><a href="history.html" target="_self">History</a></li>	
    <li><a href="about.html" target="_self">About/Contact Us</a></li>
	<li><a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534?fref=ts" target="_blank"><img src="Images/FB_FindUsOnFacebook-114.png" alt="Find us on Facebook"></a></li>
</ul>
    </div>
<div class="headerh1"><h1>Featured Artists</h1></div>

<div><h2>Celtic Fyre</h2><br><br><img src='musos/Celtic-Fyre-Wall-with-Fire8.jpg' width="350" height="221" class='artistPhotoLeft'><p>They will break your heart with the mournful and eerie sounds of the Great Highland Bagpipe and then crank it up real hard and rock you 'til you drop.<br><br>Genre: Traditional Celtic/Rock Fusion<br><br><a href='artistDisplay.php?artistId=4'>More info</a></p></div>

<div><h2>Rosewood Guitar Quartet</h2><br><br><img src='musos/Rosewood01.jpg' width="264" height="257" class='artistPhotoLeft'><p>Add some elegance to your next social event! Have the Rosewood Guitar Quartet provide that special atmosphere by playing for your guests<br><br>Genre: Classical Guitar<br><br><a href='artistDisplay.php?artistId=8'>More info</a></p></div>

<div><h2>Wassa</h2><br><br><img src='musos/Wassa01.jpg' width="298" height="191" class='artistPhotoLeft'><p>Wassa is a six-piece percussion group performing traditional rhythms from West Africa on traditional instruments.<br><br>Genre: African Percussion<br><br><a href='artistDisplay.php?artistId=10'>More info</a></p></div>

<div><h2>Aquapella</h2><br><br><img src='musos/Aquapella01.jpg' width="358" height="198" class='artistPhotoLeft'><p>Aquapella are 50 singers from the Townsville area bringing you a cappella world music at its very best: inspiring and uplifting harmonies from around the globe.<br><br>Genre: Clasical Choral<br><br><a href='artistDisplay.php?artistId=2'>More info</a></p></div>

<div><h2>Stokes Nicholson Big Band</h2><br><br><img src='musos/SNBB1.jpg' width="316" height="179" class='artistPhotoLeft'><p>The Stokes-Nicholson Big Band is a not for profit community 22 piece Big Band playing Jazz and Big Band music<br><br>Genre: Big Band Jazz/Swing<br><br><a href='artistDisplay.php?artistId=11'>More info</a></p></div>

<div><h2>Harbourside Duo</h2><br><br><img src='musos/Harbourside.jpg' width="258" height="209" class='artistPhotoLeft'><p>Harbourside Duo is available for Corporate Functions,<br> Weddings and private gatherings.<br><br>Genre: Latin/Jazz/Celtic<br><br><a href='artistDisplay.php?artistId=6'>More info</a></p></div>

<div><h2>Poms From Oz</h2><br><br><img src='musos/Poms.jpg' width="258" height="226" class='artistPhotoLeft'><p>A family of solo vocalists from North Queensland, Australia. All are dinky di Oz with Judy and Kathy being descendents of First Fleeters.<br><br>Genre: Contemporary/Traditional A Capella Vocals<br><br><a href='artistDisplay.php?artistId=7'>More info</a></p></div>

<div><h2>The Dirty Dozen</h2><br><br><img src='musos/DD600400.png' width="219" height="170" class='artistPhotoLeft'><p>Townsville's dynamic 12-piece Stage Band! Jazz, rock, blues and modern top-40 songs featuring vocalists, trumpets, saxophones, trombone, drums, piano/keyboard and guitars.<br><br>Genre: Classic Jazz/Rock/Blues<br><br><a href='artistDisplay.php?artistId=5'>More info</a></p></div>

<div><h2>The Camerata Singers</h2><br><br><img src='musos/Camerata.jpg' width="283" height="180" class='artistPhotoLeft'><p>The concept of the Camerata Singers originated in the 1980s when Susan Grinsell<br><br>Genre: Contemporary and Classical Choral<br><br><a href='artistDisplay.php?artistId=3'>More info</a></p></div>

<div><h2>Aviva Quartet</h2><br><br><img src='musos/AVIVA-LANE500.jpg' width="262" height="171" class='artistPhotoLeft'><p>Four talented musicians combine their skills in a variety of musical styles including fiery Rhumbas, Tangos, Serenades - a mixture of the most devine and swoon-worthy pieces, guaranteed to delight the senses.<br><br>Genre: String Quartet/Chamber Music<br><br><a href='artistDisplay.php?artistId=1'>More about Aviva Quartet</a></p></div>

<div><h2>Townsville Concert Band</h2><br><br><img src='musos/TCBSaxLogo800.jpg' width="322" height="199" class='artistPhotoLeft'><p>A local community band who meet once a week for rehearsals and who play gigs around town throught the year.<br><br>Genre: Concert Band<br><br><a href='artistDisplay.php?artistId=9'>More info</a></p></div>
</body>



<footer class="footer-distributed">

	<div class="footer-left">

	<h3>Townsville<span>Community Music Centre</span></h3>

			<p class="footer-links">
			<a href="#">Home</a>
			|
			<a href="#">Announcements</a>
			|
			<a href="#">Events</a>
			|
			<a href="#">Artists</a>
			|
            <a href="#">History</a>
			|
			<a href="#">About/Contact Us!</a>
			</p>

<p class="footer-company-name">Graphica &copy; 2015</p>
	</div>

<div class="footer-center">

	<div>
<i class="fa fa-map-marker"></i>
	<p><span>PO Box 1006,4810 </span>		 			 Townsville, Qld</p>
	</div>
<br>
<div>
	<i class="fa fa-phone"></i>
	<p>Phone:  07 4724 2086 <br>
       Mobile: 0402 255 182</p>
</div>

<div>
	<i class="fa fa-envelope"></i>
	<p><a href="mailto:admin@townsvillemusic.org.au">				admin@townsvillemusic.org.au</a></p>
</div>

</div>
<div class="footer-right">

<p class="footer-company-about">
	<span>About the Community Music Centre</span>
Blah blah blah blah.Blah blah blah blah.Blah blah blah blah.Blah blah blah blah.Blah blah blah blah.
	</p>

<div class="footer-icons">

<a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534?fref=ts" target="_blank"><img src="Images/FB_FindUsOnFacebook-114.png" alt="Find us on Facebook"></a>
</div>
</div>
</footer>
</body>
</html>