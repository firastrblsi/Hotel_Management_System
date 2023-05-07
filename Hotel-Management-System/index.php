<!DOCTYPE>
<html>
	<head>
		<title>
			The Deluxe Hotel
		</title>
	</head>
	<style>
		*{
			scroll-behavior:smooth;
		}
		body {
			margin: 0px;
		}
		
		.border {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 5px;
			padding: 4px;
		}
		ul
		{
  			list-style-type: none;
			background-color: rgba(09,41,98,0.9);
			margin-bottom: 10px;
			color: white;
			margin-top: -38px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			/*margin-right: -10px;*/
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		li
		{
			display: inline;
			float: left;
		}
		h1
		{
			background-color: rgba(09,41,98,0.9);
			color: white;
			border: 10px;
			margin-left: -10px;
			/*margin-right: -10px;*/
			margin-top: -10px;
			padding-top:10px;
			padding: 15px;
			font-size: 60px;
			text-align: center;
			font-family: "Times New Roman";
		}
		h2
		{
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
		}
		a:link, a:visited 
		{
			color: white;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

		a:hover, a:active 
		{
			background-color: white;
			color: #094198;
		}
		.reserve_room
		{
			color: #000;
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}

		.headings
		{
			color: black;
			font-family: "Times New Roman";
			text-decoration: none;
		}

		.welcome1
		{
			color: black;
			font-family: "Courier New, monospace";
			font-size: 28px;
		}
		.welcome2
		{
			color: black;
			font-family: Snell Roundhand, cursive;
			font-size: 24px;
			color: teal;
		}
		.basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
		.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
			text-align:center;
		}
		

		* {box-sizing: border-box;}
		body {font-family: Verdana, sans-serif;}
		.mySlides {display: none;}
		img {
			vertical-align: middle;
			background-size: cover;
		}
		.reserve_room:hover
		{
			color: #000;
			border: 10px;
			padding: 14px;
			font-size: 35px;
			text-align: center;
			text-shadow: 1px 1px black;
			background-color: #4AB8F9;
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}
		
		.slideshow-container {
		  max-width: 10000px;
		  position: relative;
		  margin: auto;
		  padding: 0px;
		}

	
		.text {
		  color: #f2f2f2;
		  font-size: 30px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-shadow: 4px 4px black;
		  text-align: center;
		}

		
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: white;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active {
		  background-color: #717171;
		}

		
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}


	footer .footer_main{
		width: 100%;
		background: rgba(09,41,98,0.9);
		display: flex;
		justify-content: space-around;
	}

	footer .footer_main .tag{
		margin: 10px 0;
	}

	footer .footer_main .tag .center{
		text-align: center;
	}

	footer .footer_main .tag h2{
		font-size: 25px;
		margin: 25px 0;
		color: white;
		letter-spacing: 1px;
	}

	footer .footer_main .tag a{
		display: block;
		color: black;
		text-decoration: none;
		margin: 9px 0;
	}

	footer .footer_main .tag a i{
		padding: 0 10px;
		transition: 0.3;
	}

	footer .footer_main .tag a i:hover{
		color: #c72092;
	}

	footer .footer_main .tag .social_link{
		display: flex;
	}

	footer .footer_main .tag .social_link a{
		width: 30px;
		height: 30px;
		border-radius: 50%;
		text-align: center;
		text-decoration: none;
		color: black;
		box-shadow: 0 0 20px 10px rgba(0,0,0,0.05);
		position: relative;
		margin: 0 5px;
		z-index: 10;
		overflow: hidden;
	}

	footer .footer_main .tag .social_link a .fa-brands{
		font-size: 15px;
		line-height: 30px;
		z-index: 10;
		position: relative;
		transition: 0.5s;
	}

	footer .footer_main .tag .social_link a:hover i{
		color: white;
	}

	footer .footer_main .tag .social_link a::after{
		content: '';
		width: 100%;
		height: 100%;
		top: 0;
		left: -90px;
		background: linear-gradient(-45deg, #c72092 , #6c14d0);
		position: absolute;
		z-index: -10;
		transition: 0.5s;
	}

	footer .footer_main .tag .social_link a:hover::after{
		left: 0;
	}

	footer .footer_main .tag .search_bar{
		width: 230px;
		height: 30px;
		background: rgb(202, 202, 202);
		border-radius: 25px;
	}

	footer .footer_main .tag .search_bar input{
		width: 200px;
		padding: 2px 0;
		position: relative;
		top: 17%;
		left: 6%;
		border: none;
		background: none;
		outline: none;
		font-size: 13px;
	}

	footer .footer_main .tag .search_bar button{
		padding: 7px 15px;
		background: linear-gradient(to right, #c72092 , #6c14d0);
		border: none;
		margin-top: 15px;
		border-radius: 25px;
		color: white;
		cursor: pointer;
	}
	#sss:hover{
		background-color: rgba(09,41,98,0.9);
	}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}
	</style>

	<body style="background: #f2f2f2;">
		
		<h1>THE <p style="color: #e6b800; display: inline; ">DELUXE</p> HOTEL</h1>

		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="#roooms">ROOM GALLERY</a></li>
			<li><a href="image_gallery.php">IMAGE GALLERY</a>
			<li style="float: right;"><a href="#fotter">Contact Details</a></li>
		</ul>

		<div class="slideshow-container">

		<div class="mySlides fade">
		  <img id="1" src="Images/1.jpg" style="width:100%">
		  <div class="text">ENJOY THE DREAM EXPERIENCE</div>
		</div>

		<div class="mySlides fade">
		  <img id="2" src="Images/2.jpg" style="width:100%">
		  <div class="text">REDEFINE LUXURY</div>
		</div>

		<div class="mySlides fade">
		  <img id="3" src="Images/3.jpg" style="width:100%">
		  <div class="text">SAVOUR EVERY SERVE, EVERY SERVICE</div>
		</div>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 4500); // Change image every 4.5 seconds
		}
		</script>
		<br><br>
		<a class="reserve_room" href="user_login.php">RESERVE A ROOM</a><br>

		<h2 class="welcome1">Experience a good stay, enjoy fantastic offers</h2><br>
		<h2 class="welcome2">Find our friendly welcoming reception</h2><br>
		<div id="roooms">
			<h2 class="r_room">OUR ROOMS</h2><br>
			<div id="rooms_and_rates" class="basic_box">
				<div class="row">
					<div class="column">
						<img src="images/1.jpg" alt="Snow" style="width:100%">
					</div>
					<div class="column">
						<img src="images/2.jpg" alt="Forest" style="width:100%">
					</div>
					<div class="column">
						<img src="images/3.jpg" alt="Mountains" style="width:100%">
					</div>
				</div>
				<div class="row">
					<div class="column">
						<h3>Deluxe Room</h3>
					</div>
					<div class="column">
						<h3>Executive Room</h3>
					</div>
					<div class="column">
						<h3>Standard Room</h3>
					</div>
				</div>
		</div>
		</div><br>
		<footer>
		<div id="fotter">
			<div class="footer_main">
				<div class="tag">
					<h2>Contact</h2>
					<a id="sss" href="#"><i class="fa-solid fa-house"></i>Gammarth,Tunisia</a>
					<a id="sss" href="#"><i class="fa-solid fa-phone"></i>+216 68 461 598</a>
					<a id="sss" href="#"><i class="fa-solid fa-envelope"></i>deluxehotel@gmail.com</a>
				</div>

				<div class="tag">
					<h2>Get Help</h2>
					<a id="sss" href="#" class="center">FAQ</a>
					<a id="sss" href="#" class="center">Guide</a>
					<a id="sss" href="#" class="center">Cancelling</a>
					<a id="sss" href="#" class="center">Payment Options</a>
				</div>

				<div class="tag">
					<h2>Our Branchs</h2>
					<a id="sss" href="#" class="center">Gammarth</a>
					<a id="sss" href="#" class="center">Hammamet</a>
					<a id="sss" href="#" class="center">Alger,Algeria</a>
					<a id="sss" href="#" class="center">Ibiza,Spain</a>
				</div>

				<!--<div class="tag">
					<h2>Follw Us</h2>
					<div class="social_link">
						<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#"><i class="fa-brands fa-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
						<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>                    
					</div>
				</div> 

			</div>
		</div>
    </footer>
	</body>
</html>