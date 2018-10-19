<!doctype html>
<html lang="en">
<head>
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>LAMAN UTAMA </title>
	
	<!-- Styles -->
	<link rel='stylesheet' href='frontpage/css/bootstrap.min.css'>
	<link rel='stylesheet' href='frontpage/css/animate.min.css'>
	<link rel='stylesheet' href="frontpage/css/font-awesome.min.css"/>
	<link rel='stylesheet' href="frontpage/css/style.css"/>
	 <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png"> 


	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
			
	<!-- Favicon -->
	<link rel="shortcut icon" href="#">
</head>
<body>
<!-- Begin Hero Bg -->
<div id="parallax">
</div>
<!-- End Hero Bg
	================================================== -->
<!-- Start Header
	================================================== -->
@yield('header')

<!-- Intro
	================================================== -->
@yield('intro')


<!-- Gallery
	================================================== -->
@yield('galeri')


<!-- <!- admin login
	================================================== -->

@yield('login')


<!-- Contact
	================================================== -->
@yield('contact')
<!-- Credits 

=============================================== -->
@yield('footer')
<!-- Bootstrap core JavaScript
	================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="frontpage/js/jquery.min.js"></script>
<script src="frontpage/js/bootstrap.min.js"></script>
<script src="frontpage/js/waypoints.min.js"></script>
<script src="frontpage/js/jquery.scrollTo.min.js"></script>
<script src="frontpage/js/jquery.localScroll.min.js"></script>
<script src="frontpage/js/jquery.magnific-popup.min.js"></script>
<script src="frontpage/js/validate.js"></script>
<script src="frontpage/js/common.js"></script>


<script>
$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
</script>

<!-- 
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script> -->

</body>
</html>





<!-- FAQ
	================================================== -->
 <!-- <section id="student" class="section">
<div class="wrapsection">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sol-sm-12">
				<div class="maintitle">
					<h3 class="section-title">LOG MASUK<span class="wow bounceInRight"> SEBAGAI PELATIH</span></h3>
					
					<center><div class="sufee-login d-flex align-content-center flex-wrap">
				        <div class="container">
				            <div class="login-content">
				                <div class="login-logo">
				                    <a href="index.html">
				                        <img class="align-content" src="" alt="">
				                    </a>
				                </div>
				                <div class="login-form">
				                    <form>
				                        <div class="form-group">
				                            <label>KATANAMA</label>
				                            <input type="email" class="form-control" placeholder="">
				                        </div>
				                        <div class="form-group">
				                            <label>KATALALUAN</label>
				                            <input type="password" class="form-control" placeholder="">
				                        </div>

				                         <a href='{{asset("student.home")}}' target="_blank"> Log masuk </a>
				                        <div class="checkbox">
				                            <label>
				                                <input type="checkbox"> Remember Me
				                            </label>
				                         </div>
				                    </form>
				                </div>
				            </div>
				        </div>
				    </div>
   			 	</center>
				</div>
			</div>
		</div>
	</div>
</div>
</section> -->
<!-- Random
	================================================== -->
<!-- <section class="whitecolor parallax section" style="background-image: url(http://themepush.com/demo/runcharity/frontpage/img/5.jpg);"> 
<div class="wrapsection">
	<div class="container">
	<div class="row">
		<div class="col-md-12 sol-sm-12">
			<div class="maintitle">
				<h3 class="section-title justtitle">Charity <span class="wow flipInX">&amp; love</span> are the same</h3>
				<p class="lead bottom0">
					 Fusce fermentum lectus id turpis suscipit, ut egestas magna volutpat. Donec a purus tellus. Nunc ut dolor eu est gravida auctor quis vitae.
				</p>
			</div>
		</div>
	</div>
	</div>
</div>
</section> -->