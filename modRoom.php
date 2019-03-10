
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Health Plus a Medical Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" Department="" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/ziehharmonika.css" rel="stylesheet" type="text/css">
<link href="css/JiSlider.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
</head>
	
<body>
<div class="main" id="home">
<!-- banner -->

		<div class="header-bottom">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><a class="navbar-brand" href="index.html"><span>H</span>ealth <i class="fa fa-plus" aria-hidden="true"></i> <p>Quality Care 4U</p></a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1"> <a href="index.html" class="menu__link"> Home </a></li>
						<li class="m_nav_item menu__item" id="moble_nav_item_3 dropdown"> <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown">Doctor<b class="caret"></b></a> 
							<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="addDoc.php">Add Doctor</a></li>
									<li><a href="modDoc.php">Modify Doctor</a></li>
							</ul>
						</li>
						<li class="m_nav_item menu__item" id="moble_nav_item_3 dropdown"> <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown">Patient<b class="caret"></b></a> 
							<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="addPat.php">Add Patient</a></li>
									<li><a href="modPat.php">Modify Patient</a></li>
							</ul>
						</li>
						<li class="m_nav_item menu__item" id="moble_nav_item_3 dropdown"> <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown">Room<b class="caret"></b></a> 
							<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="addRoom.php">Add Room</a></li>
									<li><a href="modRoom.php">Modify Room</a></li>
							</ul>
						</li>
						<li class="m_nav_item menu__item" id="moble_nav_item_3 dropdown"> <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown">Test<b class="caret"></b></a> 
							<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="addTest.php">Add Test</a></li>
									<li><a href="modTest.php">Modify Test</a></li>
									<li><a href="addT.php">Test Appointment</a></li>
									<li><a href="genTestBill.php">Generate Test Bill</a></li>
							</ul>
						</li>
						<li class="m_nav_item menu__item" id="moble_nav_item_3 dropdown"> <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown">Consultation<b class="caret"></b></a> 
							<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="addConsult.php">Consultation Appointment</a></li>
									<li><a href="genConsultBill.php">Generate Consultation Bill</a></li>
							</ul>
						</li>
						<li class="m_nav_item menu__item" id="moble_nav_item_3 dropdown"> <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown">Admission<b class="caret"></b></a> 
							<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="addR.php">Admission Appointment</a></li>
									<li><a href="genAdmissionBill.php">Generate Admission Bill</a></li>
							</ul>
						</li>
					</ul>
				</nav>

				</div>
				<!-- /.navbar-collapse -->
			</nav>
	 </div>
</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a><i>></i></li>
				<li>Room<i>></i></li>
				<li>Modify Room</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
			<p class="sub_t_agileits"><b><u>Modify Room Details</u></b></p>

			<div class="book-appointment">
				<form action="modRoomFetch_proc.php" method="post">
					<div class="left-agileits-w3layouts same">
						<div class="gaps">
							<p>Room Id</p>
							<input type="text" name="r_id" placeholder="" required=""/>
						</div>	
					</div>
					<div class="clearfix"></div>
						<input type="submit" value="Fetch details">
				</form>
			</div>
		</div>
	</div>
<!-- icons -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-6 agileits_w3layouts_copy_right">
				<p>&copy; 2018 Health Plus. All rights reserved.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 <!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/JiSlider.js"></script>
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script src="js/ziehharmonika.js"></script>
<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: ''
		});
	});
</script>
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<script type="text/javascript">
$(function(){
  $("#bars li .bar").each(function(key, bar){
    var percentage = $(this).data('percentage');

    $(this).animate({
      'height':percentage+'%'
    }, 1000);
  })
})
</script>

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Health Plus
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/g9.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
			<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>