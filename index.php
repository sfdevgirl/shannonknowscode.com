
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"> 
		<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Poiret+One|Shadows+Into+Light|Dancing+Script|Special+Elite' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway|Indie+Flower' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans+Condensed:300|Fjalla+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Dosis|Abel|Crafty+Girls|Just+Another+Hand|Poiret+One|Cabin+Sketch|Armata|Lobster|Fredoka+One|Gloria+Hallelujah|Just+Me+Again+Down+Here|Indie+Flower|Pacifico|Dancing+Script|Special+Elite|Rock+Salt|Amatic+SC|Chewy|Playball|Nothing+You+Could+Do|Englebert' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Permanent+Marker|Poiret+One|Amatic+SC:400,700|Comfortaa' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Poiret+One|Quicksand|Montserrat+Alternates|Josefin+Slab|Raleway|Comfortaa' rel='stylesheet' type='text/css'>
		<title>Web Design & Development by Shannon Smith</title>

	
</head>

<BODY>
<div id="head-tag" class="tag">
<center>
<h1>Shannon Knows Code</h1>
<a href="index.php">
<h2> <?php


						$d = array("Daring", "Dazzling", "Delightful", "Detailed", "Dramatic", "Dynamic", "Attractive", "Bold", "Bright", "Chic", "Classic", "Colorful");
						$e = array("Eccentric", "Epic", "Efficient", "Elegant",  "Enchanting",  "Energetic", "Exciting", "Exuberant", "Creative", "Custom", "Glamorous", "Hip");
						$f = array("Fabulous", "Fancy", "Fashionable", "Fierce",  "Formal", "Fresh",  "Fun", "Modern", "Radiant", "Smart", "Stunning", "Stylish", "Unique");


						$rand_d = array_rand($d);
						$rand_e = array_rand($e);
						$rand_f = array_rand($f);

						print "<h2> $d[$rand_d].  ";
						print "$e[$rand_e].  ";
						print "$f[$rand_f]. </h2>";

					?></h2></a>
<h3>{Website Designs + Development}</h3>

</center>
</div>
<div class="barnav">
		<figure class="front-nav">
			<a href="about-me.html"><img src="http://i1144.photobucket.com/albums/o489/shannones1104/Photobucket%20Desktop%20-%20PrettyBitchs%20MacBook%20Air/Downloads/png/authorship_zpsf570708e.png"  />
				<figcaption>About Me</figcaption></a>
		</figure>

		<figure class="front-nav">
			<a href="portfolio.html"><img src="http://i1144.photobucket.com/albums/o489/shannones1104/Photobucket%20Desktop%20-%20PrettyBitchs%20MacBook%20Air/Downloads/png/light59_zps777f7c2e.png"  />
				<figcaption class="even">My Work</figcaption></a>
		</figure>

		<figure class="front-nav">
			<a href="contact.html"><img src="http://i1144.photobucket.com/albums/o489/shannones1104/Photobucket%20Desktop%20-%20PrettyBitchs%20MacBook%20Air/Downloads/png/comment25_zps5cf2b3c3.png"  />
				<figcaption class="even">Contact</figcaption></a>
		</figure>

		<figure class="front-nav">
			<a href="http://www.shannonknowscode.com/blog"><img src="http://i1144.photobucket.com/albums/o489/shannones1104/Photobucket%20Desktop%20-%20PrettyBitchs%20MacBook%20Air/Downloads/png/press4_zps04aba3b1.png"  />
				<figcaption>Blog</figcaption></a>
		</figure>
	</div>
</BODY>
</HTML>