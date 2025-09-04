<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Share+Tech&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Share+Tech&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>NRH HOSPITAL</title>


	<style type="text/css">
				*{
			margin: 0;
			padding: 0;
			font-family: 'Poppins', sans-serif;
			box-sizing: border-box;
		}

	.header{
	display: flex;
	align-items: center;
	background-color:#FAFAFA;
	padding: 30px 0;
	width: 100%;
	position:sticky;
	top:0;
	left:0;
	z-index:999;
}

	.logo img{
		margin-top: 3px;
		margin-left: 440px;
		width: 130px;
	}

	.logo h1{
	position: absolute;
	color: #451D51;
	font-size: 30px;
	font-weight: 600;
	margin:0 20px;
	margin-top:-5px;
	}

	.logo span{
		color:#B0841A;
	}

.logo-bar{
position: relative;
height: 100%;
max-width: 1000px;
width: 100%;
margin: 0 auto;
padding: 0 30px;
display: flex;
align-items: center;
justify-content: space-between;
}


.logo-bar .siderbaropen{
color:#fff;
font-size:25px;
padding:5px;
cursor:pointer;
display:none;
}

@media (max-width:765px){
	
}

.nav-links{
display: flex;
align-items: center;
}

	.nav-links li{
	list-style-type: none;
	margin: 0 25px;
}


	.nav-links li a{
	text-decoration: none;
	color: #fff;
	font-size: 17px;
	font-weight: 400;
}

	.nav-links li a:hover{
		cursor: pointer;
		transition: all 0.3s ease;
		color: #fff;
		background-color: #451D51;
		padding: 30px 20px;
	}

nav .logo-bar .logo a{
font-size: 25px;
text-decoration: none;
font-weight: 600;
}

.order .logo-toggle{
	display:none;
}

	.nav-links ul{
	display: flex;
	align-items: center;
	justify-content: center;
	padding-left:100px;
	}

	.nav-links li{
	list-style-type: none;
	margin: 0 30px;
	}

	.nav-links li a{
	text-decoration: none;
	color: #451D51;
	font-size: 18px;
	font-weight: 400;
	}


	.banner-container{
	position:relative;
	width:100%;
	overflow:hidden;
	margin:auto;
	background-color:#ddd;
	}

	.banner{
	position:relative;
	width:100%;
	height:600px;
	display:none;  
	}

	.banner img{
	position:absolute;
	height:100%;
	width:100%;
	z-index:1;
	left:0;
/* animation:; */ 
	}

	.banner h1{
	position:absolute;
	left:50%;
	top:27%;
	transform:translate(-50%,50%);
	z-index:3;
	color:#fff;
	font-weight:800;
	font-size:30px;
	text-transform: uppercase;
	}
	
	.banner p{
	position:absolute;
	left:50%;
	top:50%;
	transform:translate(-50%,-50%);
	z-index:3;
	color:#fff;
	font-size:18px;
	width:80%;
	font-weight:400;
	text-align:center;
	}

	.banner button{
	position:absolute;
	top:70%;
	text-transform:uppercase;
	transform:translate(-50%,-50%);
	left:45%;
	z-index:3;
	font-size:18px;
	color:#fff;
	background-color:#451D51;
	font-weight:400;
	border-radius:10px;
	border:none;
	padding:17px;
	}

	.banner button a{
		text-decoration: none;
		color: #fff;
	}

	.banner button#contact{
		background-color: #FAFAFA;
		left: 57%;
	}

	.banner button#contact a{
		color: #000;
	}
	

	.overlay{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background-color:rgba(0,0,0,0.2);
	z-index:2;
	}


	.banner-container button.prev,
	.banner-container button.next{
	z-index:5;
	position:absolute;
	top:50%;
	padding:10px 15px;
	background-color:#451D51;
	color:#fff;
	font-size:20px;
	border:none;
	outline: none;
	cursor:pointer;
	border-radius:10px;
	}

	.banner-container button.prev{
	left:40px;
	}

	.banner-container button.next{
	right:40px;
	}



	.aboutus{
		display: flex;
		background-image: url('image/png.png');
		background-size:contain;
		width:100%;
		height: 1000px;
	}

	.aboutusimg img{
		background-color:#FAFAFA;
		width:350px;
		height: 250px;
		position: absolute;
		z-index: 2;
		border-radius: 10px;
		box-shadow:2px 2px 2px rgba(0, 0, 0, 0.5) ;
		margin:75px;
		animation: img 3s 1s ease infinite;
	}

	@keyframes img{
		0%, 100%{
			transform: translateY(0);
		}

		50%{
			transform: translateY(-10px);
		}

	}

		.aboutusimg1 img{
		background-color:#FAFAFA;
		width:350px;
		height: 250px;
		position: absolute;
		z-index: 2;
		border-radius: 10px;
		box-shadow:2px 2px 2px rgba(0, 0, 0, 0.5) ;
		margin:330px;
		animation: img1 3s 1s ease infinite;
	}

		@keyframes img1{
		0%, 100%{
			transform: translateX(0);
		}

		50%{
			transform: translateX(10px);
		}

	}


		.aboutusimg2 img{
		background-color:#FAFAFA;
		width:350px;
		height: 250px;
		position: absolute;
		z-index: 2;
		border-radius: 10px;
		box-shadow:2px 2px 2px rgba(0, 0, 0, 0.5) ;
		margin:584px;
		margin-left: 75px;
		animation: img2 3s 1s ease infinite;
	}

		@keyframes img2{
		0%, 100%{
			transform: translateY(0);
		}

		50%{
			transform: translateY(10px);
		}

	}

	
	.aboutustext{
		margin-top: 350px;
		margin-left: 750px;
	}

	.aboutustext h1{
		font-size: 23px;
		font-weight: 800;
		color:#B0841A ;
	}

	.aboutustext p{
		padding:10px 0;
		font-size: 17px;
		font-weight:400;
	}



	.services{
		margin-top: 100px;
		padding-top:50px;
		background-color: #FAFAFA;
		width: 100%;
		height: 1000px;
	}

	.services h1{
		color: #B0841A;
		font-size: 27px;
		font-weight: 800;
		text-align: center;
	}

	.services p{
		margin-bottom: 40px;
		font-size: 18px;
		font-weight: 400;
		text-align: center;
	}

	.service-container{
		float: left;
		clear: ;
		margin-left: 30px;
		margin-bottom: 50px;
		cursor: pointer;
		background-color: #451D51;
		box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
		color: #fff;
		width: 300px;
		height: 420px;
		padding:20px;
		border-radius: 10px;
	}

	.service-container:hover{
		transform: scale(1.03);
		background-color: #B0841A;
		transition: all 0.5s ease;
	}

	.service-container i{
		display: flex;
		align-items: center;
		justify-content: center;
		color: #451D51;
		background-color:#FAFAFA;
		font-size: 25px;
		width: 55px;
		height: 55px;
		border-radius: 50px;
		margin:10px 0 10px 95px;
	}

	.service-container h1{
		color: #fff;
		margin: 7px 0;
		font-size: 23px;
		font-weight: 600;
	}

	.service-container p{
	color: #fff;
	margin: 10px 0;
	text-align: left;
	font-size: 15px;
	font-weight: 400;
	}

	.service-container span{
		font-weight: bold;
	}


	.service-foot img{
		float: left;
		clear: ;
		margin-left: 30px;
		width: 630px;
		height: 300px;
		border-radius: 10px;
	}

	.service-foot img:hover{
		transform: scale(1.02);
		transition: all 1s ease;
	}

	.service-foot h1{
		text-align: center;
	}

	.service-foot li{
		list-style-type: none;
	}

	.service-foot li a{
		line-height: 38px;
		font-size: 18px;
		font-weight: 400;
		margin-left: 230px;
		color: #000;
		text-decoration: none;
	}

	.service-foot i{
		color:#B0841A;
		font-size: 18px;
		margin-right:10px;
	}

	.contact{
		margin-top: 150px;
		background-image:linear-gradient(50deg,#451D51 50%,#B0841A 50%);
		width: 100%;
		height: 620px;
		color: #fff;
	}

	.contact h1{
		text-align: center;
		margin-bottom: 20px;
		padding-top: 40px;
		font-size: 27px;
		font-weight: 600;
	}

	.contact li{
		text-align: center;
		list-style-type: none;
	}

	.contact i{
		display: flex;
		align-items: center;
		justify-content: center;
		width: 50px;
		height: 50px;
		font-size: 20px;
		border: 2px solid #000;
		border-radius: 50px;
		background-color: #FAFAFA;
		margin:0 auto;
	}

	.contact i#address{
		color:#f00;
	}

	.contact i#phone{
	color: #00f
	}

	.contact i#whatsapp{
		color: #0f0;

	}

	.contact i#mail{
		color: #000;

	}

	.contact p{
		cursor: not-allowed;
		line-height: 50px;
		font-size: 18px;
		font-weight: 400;
	}

	.contact a{
		color: #fff;
		line-height: 50px;
		font-size: 18px;
		font-weight: 400;
		text-decoration: none;
	}

	.contact h2{
		text-align: center;
		margin-top: 45px;
		color: #FAFAFA;
		font-family: 'Cedarville Cursive', sans-serif;
	}

	</style>


</head>
<body>

<!--Header-->
	<div class="header">
	<nav>
<div class="logo-bar">

<div class="logo"><h1>NIKLAN ROYALTY <span>HOSPITAL</span></h1><img src="image/logo.png"></div>
<i class="fa-solid fa-bars siderbaropen"></i>


<div class="order">
<div class="logo-toggle">
<div class="logo"><h1>NIKLAN ROYALTY <span>HOSPITAL</span></h1></div>
<i class="fa-solid fa-xmark siderbarclose"></i>
</div>

<div class="nav-links">
<ul>
<li><a href="">Home</a></li>
<li><a href="">About</a></li>
<li><a href="">Services</a></li>
<li><a href="">Contact</a></li>
<li><a href="">FAQs</a></li>

</ul>
</div>

</div>

</div>

</nav>
	
</div>	

<!--Banner-->
	<div class="banner-container" id="banner">

	<button class="prev" onclick="prevSlide()">&#10094</button>
	<button class="next" onclick="nextSlide()">&#10095</button>

	<div class="banner">
	<div class="overlay"></div>
	<h1>Royal Treatment, Exceptional Results</h1>
	<p>Niklan Royalty Hospital offers world-class medical services with <br>
	compassion and care. Our expert team and state-of-the-art facilities <br>
	 ensure personalized attention for every patient. Trust us to deliver <br>
	  exceptional healthcare, fit for royalty.</p>
	<img src="image/png4.png" alt="banner img">
	<button><a href="">Learn More</a></button> <button id="contact"><a href="">Contact Us</a></button>
	</div>
	
 	<div class="banner">
 	<div class="overlay"></div>
	<h1>Niklan Royalty: Best Healthcare</h1>
	<p>Niklan Royalty Hospital provides exceptional healthcare with <br>
	 a royal touch. Our team of experts delivers personalized care <br>
	 with compassion and precision. Experience the best in medical <br>
	services, tailored to your unique needs.</p>
	<img src="image/png7.png" alt="banner img">
	<button><a href="">Learn More</a></button> <button id="contact"><a href="">Contact Us</a></button>
	</div>
	
	
 	<div class="banner">
 	<div class="overlay"></div>
	<h1>Care You Can Trust</h1>
	<p>Niklan Royalty Hospital sets the standard for excellence <br> 
	 in healthcare. With cutting-edge technology and expert <br> 
	care, we prioritize your well-being. Experience royal treatment <br> 
	in every aspect of your medical journey.</p>
	<img src="image/png8.png" alt="banner img">
	<button><a href="">Learn More</a></button> <button id="contact"><a href="">Contact Us</a></button>
	</div>
	
	
 	<div class="banner">
 	<div class="overlay"></div>
	<h1>Royal Health, Best Care</h1>
	<p>Niklan Royalty Hospital offers premium healthcare <br>  
	services with a personal touch.	Our dedicated team provides <br> 
	exceptional care, ensuring your comfort and safety. <br> 
	Experience the royal standard of medical excellence.</p>
	<img src="image/png5.jpg" alt="banner img">
	<button><a href="">Learn More</a></button> <button id="contact"><a href="">Contact Us</a></button>
	</div>

	</div>



	<!--About us-->
	<div class="aboutus">

	<div class="aboutusimg">
	<img src="image/png6.png">
	</div>

	<div class="aboutusimg1">
	<img src="image/png8.png">
	</div>

	<div class="aboutusimg2">
	<img src="image/png9.png">
	</div>

	<div class="aboutustext">
	<h1>About Us</h1>
	<p>Niklan Royalty Hospital is a leading healthcare provider <br> 
	dedicated to delivering exceptional medical services. <br>
	 Our team of experts is committed to providing personalized <br>
	care with compassion and precision. With state-of-the-art facilities, <br>
	 we offer advanced treatments and procedures. We prioritize <br>
	 patient well-being and safety above all else. At Niklan Royalty <br>
	 Hospital, we strive for excellence in every aspect of care.</p>	
	</div>

	</div>


	<!--Services-->
<div class="services">
<h1>Services</h1>
<p>At Niklan Royalty Hospital, we offer a comprehensive range <br> 
of medical services to cater to the diverse needs of our patients. Our services include:</p>

<div class="service-container">
<i class="fa-solid fa-kit-medical"></i>
<h1>Medical Specialties</h1>
<p><span>Cardiology</span>: Advanced cardiac care, including diagnosis, treatment, and management of heart conditions.<br>
<span>Neurology</span>: Expert care for neurological disorders, including stroke, epilepsy, and more.<br>
<span>Pediatrics</span>: Specialized care for infants, children, and adolescents.</p>
</div>

<div class="service-container">
<i class="fa-solid fa-stethoscope"></i>
<h1>Diagnostic Services</h1>
<p><span>Imaging</span>: State-of-the-art imaging services, including MRI, CT scans, and X-rays.<br>
<span>Laboratory</span>: Advanced laboratory testing, including blood work and pathology.<p>
</div>

<div class="service-container">
<i class="fa-solid fa-user-nurse"></i>
<h1>Treatment Services</h1>
<p><span>Surgery</span>: Expert surgical care, including minimally invasive procedures.<br>
<span>Rehabilitation</span>: Comprehensive rehabilitation services, including physical, occupational, and speech therapy.
<br>
<span>Emergency Care</span>: 24/7 emergency services, staffed by experienced professionals.</p>
</div>

<div class="service-container">
<i class="fa-solid fa-staff-snake"></i>
<h1>Wellness Services</h1>
<p><span>Health Check-ups</span>: Customized health check-ups and screenings.<br>
 <span>Wellness Programs</span>: Personalized wellness programs, including nutrition and fitness planning.</p>		
 </div>

<div class="service-foot">	
<img src="image/png11.jpg">
<h1>Why Choose Us?</h1>
<ul>
<li><a href=""><i class="fa-solid fa-staff-snake"></i>Expert medical team</a></li>
<li><a href=""><i class="fa-solid fa-staff-snake"></i>State-of-the-art facilities</a></li>
<li><a href=""><i class="fa-solid fa-staff-snake"></i>Personalized care</a></li>
<li><a href=""><i class="fa-solid fa-staff-snake"></i>24/7 emergency services</a></li>
<li><a href=""><i class="fa-solid fa-staff-snake"></i>Multidisciplinary Approach</a></li>
<li><a href=""><i class="fa-solid fa-staff-snake"></i>Advanced Technology</a></li>
<li><a href=""><i class="fa-solid fa-staff-snake"></i>Patient-Centric Approach</a></li>
</ul>
</div>

</div>


<!--Contact-->
<div class="contact">
	<h1>Contact Us</h1>
<li><i class="fa-solid fa-location-pin" id="address"></i><p>10, Zone A Boripe Community, Rinsayo,
Egbedore L. G. A., Osogbo, Osun State.</p></li>

<li><a href="tel:+2349134741050"><i class="fa-solid fa-phone" id="phone"></i>+234 913 474 1050</a> / 
	<a href="tel:+2348052473286">+234 805 247 3286</a></li>

<li><a href="https://wa.me/2349134741050"><i class="fa-brands fa-whatsapp" id="whatsapp">
</i>+234 913 474 1050</a> / <a href="https://wa.me/2348052473286">+234 805 247 3286</a></li>

<li><a href="mailto:niklanroyaltyhospital@gmail.com">
<i class="fa-solid fa-envelope" id="mail"></i>niklanroyaltyhospital@gmail.com</a></li>

<h2>Motto: Your Health, Our Priority</h2>


</div>


<!--FAQs-->
<div class="faq">



</div>










<!--
<img src="image/image.jpg">
-->





<script type="text/javascript">

	const banners = document.querySelectorAll(".banner");
	let currentSlide = 0;
	
	
	function showSlide(index){
	//hide all banners
	for(let i=0; i<banners.length; i++){
	banners[i].style.display = "none";
	}	
	
	//show current banners
	banners[index].style.display = "block";
	}
	
	function nextSlide(){
	currentSlide++
	
	if(currentSlide >= banners.length){
	currentSlide = 0;
	}
	
	showSlide(currentSlide);
	
	}


	
	function prevSlide(){
	currentSlide--;
	if(currentSlide < 0){
	currentSlide0 = banners.length - 1;
	}
	
	showSlide(currentSlide);
	
	}
	
	document.addEventListener("DOMContentLoaded", function(){
	showSlide(currentSlide);
	
	setInterval(nextSlide, 10000);
	
	})

</script>


</body>
</html>