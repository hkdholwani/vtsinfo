<!DOCTYPE html>
<html lang="en">
<head>
  <title>Various Technologies Solutions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  .maindiv{
	 background-image: url('resorces/Curcit.jpg');
	 height:550px;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #3399ff;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #3399ff;
      font-size: 50px;
  }
  .logo {
      color: #3399ff;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #3399ff;
  }
  .carousel-indicators li {
      border-color: #3399ff;
  }
  .carousel-indicators li.active {
      background-color: #3399ff;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .social_icons{
  text-decoration:none;
  float:left;
  margin: 5px  auto;
  padding: 10px;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #3399ff; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #3399ff;
      background-color: #fff !important;
      color: #3399ff;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #3399ff !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #3399ff;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #3399ff;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #3399ff !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #3399ff;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>


  
</head>
<body id="VTS" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#VTS" style="font-family:'Charm', cursive;">
	  Various Technologies Solutions</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
			<li><a href="#about">ABOUT</a></li>
			<li><a href="#services">SERVICES</a></li>
			<li><a href="#contact">CONTACT</a></li>
			<li >
				<!---
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Social<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li> --->
							<a href="https://www.facebook.com/Various-Technologies-Solutions-246604928749884/">
							<i class="fab fa-facebook-square fa-2x" ></i>
							</a>
						</li>
						<li>	
							<a href="https://api.whatsapp.com/send?phone=919950461371">	
							<i class="fab fa-whatsapp fa-2x" style="color: #00ff00" ></i></a>
						</li>
						<li>	
							<a href="https://www.youtube.com/channel/UCACzQh1r55FXuJ1KpMZv6Ug?sub_confirmation=1">		
							<i class="fab fa-youtube fa-2x" style="color:Red"></i>					</a>
						</li>
			  
					</ul>
			</li>
			
	  
	  </ul>
				
				
			
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  
	
</div>

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>We Provide</h2><br>
      <h4><ul>	
			<li>Mobile Accessories</li>
			<li>Mobile Software Solutions</li>
			<li>Computer Software Solutions</li>
			<li>Data Recovery</li>
		</ul>
		</h4><br>
       </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span><img src="/resorces/pendrive.png"></span>
      <h4>Data Recovery From Pen-drives</h4>
      <p>Recover Data From Accidental Deleted</p>
      <p>Recover Data From Formatted Pen-drive</p>
	  <p>Recover Data From Physical Damaged Pen-drive</p>
    </div>
    <div class="col-sm-4">
      <span><img src="/resorces/Microsd.png"></span>
      <h4>Data Recovery From Memory Card</h4>
		<p>Recover Data From Accidental Deleted</p>
		<p>Recover Data From Formatted MemoryCard</p>
		<p>Recover Data From Virus Damage Memory Card</p>
		<p>Recover Data From Corrupted Memory Card </p>
    </div>
    <div class="col-sm-4">
      <span><img src="/resorces/Data-Transfer.png"></span>
      <h4>Mobile To Mobile Data Transfer</h4>
      <p>Transfer Your Phone-book From Old Phone to New Ones</p>
	  <p>Transfer Your SMS From Old Phone to New Ones</p>
	  <p>Transfer Your Photos Videos From Old Phone to New Ones</p>
	  <p>Backup Your Phonebook, Photos, Videos, Music From Phone to Pen-drive or Memory Card</p>
	  
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
		<span >	<img src="/resorces/Phone-icon.png"> 
				<span class="glyphicon glyphicon-arrow-right"></span> 
				<img src="/resorces/paper_print.png">
		</span>
      <h4>Phonebook Printing</h4>
      <p>Print Contacts </p>
    </div>
    <div class="col-sm-4">
		<span >
				<img src="/resorces/SMS.png"> 
				<span class="glyphicon glyphicon-arrow-right"></span> 
				<img src="/resorces/paper_print.png">
		</span>
      <h4>SMS Printing</h4>
      <p>Pritn SMS</p>
    </div>
    <div class="col-sm-4">
      <span ><img src="/resorces/Computer_repair.png"></span>
      <h4 style="color:#303030;">Laptop & Mobile Repair</h4>
      <p>Laptop Repair</p>
	  <p>Mobile Repair</p>
    </div>
  </div>
</div>
<div id="contact" class="container-fluid bg-grey">
<!---
			<div style="width:70%; margin: 0 auto">
					<h4 style="text-align:center"> Subscribe US </h4>
					  <form action=/"Subscribe.php">
						<div class="input-group">
						  <input type="email" class="form-control" size="50%" placeholder="Email Address" required>
						  <div class="input-group-btn">
							<button type="button" class="btn btn-primary">Subscribe</button>
						  </div>
						</div>
					  </form>
			</div>
	<br>
--->	
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><a href="https://www.google.com/maps/dir//Various+Technologies+Solution's,+Medical+College+Road,+Jaljog+Circle,+Sindhi+Colony,+Sector-E,+Shastri+Nagar,+Jodhpur,+Rajasthan/@26.2717368,72.9365207,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39418c3ae80ba2f3:0xf224a5921f4d7ada!2m2!1d73.0065617!2d26.2717538"> <span class="glyphicon glyphicon-map-marker">	</span> </a> </br>Various Technologies Solutions
														<br> 	 87,Sindhi Colony, Near Medical College</br>
														 Jodhpur (Raj.) 342003</br></p>
      <p><a href="tel:+919950461371"><span class="glyphicon glyphicon-phone"></span>   +91 9950461371</a><br>
			<a href="tel:+912912436465"><span class="glyphicon glyphicon-phone-alt"></span>   +91 291 2436465</a></br></p>
      <p><a href="mailto:support@vtsinfo.com"><span class="glyphicon glyphicon-envelope"></span> support@vtsinfo.com</a></p>
	  <div id="social"><ul class="nav navbar-nav"> 
	  <li><a href="https://www.facebook.com/Various-Technologies-Solutions-246604928749884/">
					<i class="fab fa-facebook-square fa-2x" ></i>
				</a></li>
				<li><a href="https://api.whatsapp.com/send?phone=919950461371">		
					<i class="fab fa-whatsapp fa-2x" style="color: #00ff00" ></i>
				
				</a></li>
				<li><a href="https://www.youtube.com/channel/UCACzQh1r55FXuJ1KpMZv6Ug?sub_confirmation=1">		
					<i class="fab fa-youtube fa-2x" style="color:Red"></i>
				
				</a></li>
	  
	  
	  
	  </ul></div>
    </div>



    <div class="col-sm-7 slideanim">
		<form action="/Thankyou.php" method="POST">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
		  </form>
        </div>
      </div>
    </div>
  </div>
</div>



<footer class="container-fluid text-center">
  
  <a href="#VTS" title="To Top" class="text-center">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyright &copy Various Technologies Solutions</p>
  
  
</footer>

<script>
$(document).ready(function(){
   $(".navbar a, footer a[href='#VTS']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})


function Get_in_Touch(){
	window.open('https://api.whatsapp.com/send?phone=919950461371', '_blank')
}
</script>

</body>
</html>
