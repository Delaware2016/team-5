<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Hackathon</title>'

		<link href="favicon.ico" rel="icon" type="image/x-icon" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
		<link rel='stylesheet' href='style-index.css' />
		<link rel='stylesheet' href='team5Font.css' />
		<link rel='stylesheet' href='inputbox.css' />
		
		<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
		<link rel="manifest" href="/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>
		
		<!-- NavBar -->
		<?php include 'preloginNavbar.php';?>
	
	
		
		<!-- Home -->
		<div id="section1" class="container-fluid text-center " style="color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
			<!-- 
			<a href="https://crookedwarden.bandcamp.com/album/bisy-backson-ep" target="_blank" class="epLink releases">
				<h2>&#9834 BISY asdsad &#9834</h2>
				<h3>Out Now</h3>
				<img class="img-responsive center-block " src="crookedwardenlogo.png" width="400" height="auto">
			</a>
			-->
			<span class="header">Welcome to Accelerate Delaware</span>
				<br />
				<span class="subsubheader">Social Networking for Professionals</span>
				<br /><br /><br /><br />
					<span class="subheader">Sign In</span>
					<!--<p style="font-size: 16px; color: #d6d6d6;">Important News</p>-->
					<br>
					<form style="color: black;" class="form" role="form"  method="post"> 
						<!--<label id="icon" for="name"><i class="icon-envelope "></i></label>-->
						<input class="inputbox" type="text" name="email" id="name" placeholder="Username" required/>
						<br>
							<span> </span>
						<br>
						<!--<label id="icon" for="name"><i class="icon-user"></i></label>-->
						<input class="inputbox" type="text" name="name" id="name" placeholder="Password" required/>
						<br>
							<span>  </span>
						<br>
						<!-- <a href="process.php" name="submit" class="button">Register</a> -->
						<input type="submit" class="button" value="Login"> <!-- sends to database -->
						<p style="font-size: 18px; color: white;">New user? <a  href="accounts.php" color="#ffff00"><span style="color:yellow">Click here</span></a>
						
						<br>
						<p> </p>
						<!--
						<label id="icon" for="name"><i class="icon-shield"></i></label>
						<input type="password" name="name" id="name" placeholder="Password" required/>
						-->
					</form>
			
		</div>
		<!-- Bisy Backson (Bandcamp) -->
		<!-- hidden-xs -->
		<!-- 
		<div id="section2" class="container-fluid hidden-xs">
			<div style="border-radius: 15px; width: 350px; overflow: hidden;" class="center-block">
				<iframe class="center-block" style="border: 0; width: 350px; height: 600px;" src="https://bandcamp.com/EmbeddedPlayer/album=3779963216/size=large/bgcol=333333/linkcol=4ec5ec/transparent=true/" seamless><a href="http://crookedwarden.bandcamp.com/album/bisy-backson-ep">Bisy Backson EP by Crooked Warden</a></iframe>
			</div>
		</div>
						<!-- Bisy Backson (Bandcamp)
						<!-- visible-xs 
						<div id="section2" class="container-fluid visible-xs">
							
								<iframe class="center-block" style="border: 0; border-radius: 15px; width: 300px; height: 600px;" src="https://bandcamp.com/EmbeddedPlayer/album=3779963216/size=large/bgcol=333333/linkcol=e99708/transparent=true/" seamless><a href="http://crookedwarden.bandcamp.com/album/bisy-backson-ep">Bisy Backson EP by Crooked Warden</a></iframe>
							
						</div>
		-->
		
		
		<!-- Bio (The Man) -->
		<div id="section3" class="container-fluid ">
			<div style="border-radius: 15px; width: 80%; overflow: hidden; background-color: #FFFFFF; padding-top:50px; padding-bottom: 50px;" class="center-block text-center"> <!-- Background #f1f1f1 -->
				<h1 class="BioWords">Our Mission</h1>
				<br>

				<p class="BioWords">Accelerate Delaware (AD)'s mission is to provide a community </p>
				<p class="BioWords">where young professionals engage and connect in meaningful  </p>
				<p class="BioWords">relationships that advance social, civic, and professional growth.</p>
				<br>
				
				
				
				<!--
				<p class="PoemWords">Our core mission is to engage </p>
				<p class="PoemWords">the next generation of leaders </p>
				<p class="PoemWords">in Delaware by accelerating their </p>
				<p class="PoemWords">professional and social journey in the state</p>
				-->
			</div>
		</div>
						<!-- visible-xs  -->
						<!--
						<div id="section3" class="container-fluid visible-xs">
							<div style="border-radius: 15px; width: 350px; overflow: hidden; background-color: #FFFFFF;" class="center-block text-center">
								<h1 class="BioWords">THE MAN</h1>
								<br>
								<p class="BioWords">Eric conceptualizes from his influences</p>
								<p class="BioWords">of classical rock, alternative rock,</p>
								<p class="BioWords">electronica, and drum and bass and his</p>
								<p class="BioWords">studies at University of Maryland in</p>
								<p class="BioWords">Economics and Computer Science</p>
								<p class="BioWords">to create his strain of edgy Electro,</p>
								<p class="BioWords">Hip Hop, and Bass Heavy Trance.</p>
							</div>
						</div>
						-->
		
		
		
		<!-- Releases -->
		
	
	
	
		<!-- Start carousel -->
<div id="section4" class="container-fluid">
		
	<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
      <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>

	
        </ol>   
		
       <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item" style="cursor: pointer;" onclick="window.location='gullCode.php';">
              <img class="img-rounded img-responsive center-block"  src="guysHandshaking.jpg" align="center"width="450" height="450"></img>
                <div class="carousel-caption">
				  <br/><br/><br/><br/>
                  <h2>Success Stories</h2>
	
                  <p >Come out to the coding competition to test your skills against other CS and Math students!</p>
                </div>
            </div>

			
           <div class="item" style="cursor: pointer;" onclick="window.location='whatsNew.php';">
              <img class="img-rounded img-responsive center-block"  src="ladiesLaughing.jpg" width="450" height="450"></img>
			   
                <div class="carousel-caption">
                  <h2>Club Events</h2>
                  <p>Hang out with your classmates in a fun social atmosphere!</p>
                </div>
            </div>
            
			
          
			
        </div>

        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
	</div>
			
		<!--
		<div id="section4" class="container-fluid hidden-xs">
			<h1 class="BioWords text-center">Success Stories</h1>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="col-lg-4">
					
						<img class="img-responsive text-center releases" src="guysHandshaking.jpg" width="350" height="350" style="margin: 0 auto;"> 
						
				</div>
				<div class="col-lg-4">
					
						<img class="img-responsive text-center releases" src="couple.jpg" width="350" height="350" style="margin: 0 auto;">
					
				</div>
				<div class="col-lg-4">
					
						<img class="img-responsive text-center releases" src="ladiesLaughing.jpg" width="350" height="350" style="margin: 0 auto;">
						
				</div>
			</div>
		</div>
		-->

		
		

		
		
		<div style="height:1px; background-color: black; color: #595959; padding-top: 2px; padding-bottom: 30px;">
			<p class="text-center">@ 2016 Team 5 LLC ALL RIGHTS RESERVED</p>
		</div>
		
	</body>
</html>


