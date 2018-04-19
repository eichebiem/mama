<!DOCTYPE html>
<html lang="en" class="no-js">

	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>8 NorthEast &mdash; Business Consultancy Services</title>
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="/fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="/css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="/css/responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/custom.css" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	    <script src="js/vendor/html5shim.js"></script>
	    <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

	</head>


	<body>
	  <div id="st-container" class="st-container">
	    <div class="st-pusher">
	      <div class="st-content">
	        <div class="st-content-inner">
			    <header>
					
                         @include('partials.navbar')

			     </header>


                    @yield('content')


				@include('partials.footer')


				<footer class="footer-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="copyright wow fadeInDown">
									<p>Copyright &copy; 2018 <a href="/">8NorthEast</a> . All Rights Reserved.</p>
								</div><!-- /.copyright -->
							</div><!-- /.col-md-12 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</footer>
	        </div> <!-- .st-content-inner -->
	       </div> <!-- .st-content -->
	    </div> <!-- .st-pusher -->


		<!-- ======== OFFCANVAS MENU ========= -->
	    <div class="offcanvas-menu offcanvas-effect visible-xs">
	      <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	      <h3>Sidebar Menu</h3>
	      	<div>
		      <div>
				<ul>
					<li><a href="#">Home</a>
						<ul>
							<li class="active"><a href="index.html"><i class="fa fa-home"></i> Home Style One</a></li>
						</ul>
					</li>

					<li><a href="#">About</a>
						<ul>
							<li><a href="about-us.html"><i class="fa fa-life-ring"></i> About Us</a></li>
							<li><a href="about-me.html"><i class="fa fa-user"></i> About me</a></li>
						</ul>
					</li>

					<li><a href="#">Pages</a>
						<ul>
							<li><a href="job-page.html"><i class="fa fa-briefcase"></i> Job Page</a></li>
							<li><a href="clients-page.html"><i class="fa fa-coffee"></i> Clients Page</a></li>
							<li><a href="faq.html"><i class="fa fa-question-circle"></i> FAQ Page</a></li>
						</ul>
					</li>

					<li><a href="#">Contact</a>
						<ul>
							<li><a href="contact.html"><i class="fa fa-envelope-o"></i> Contact</a></li>
						</ul>
					</li>
				</ul>
			  </div>
			</div>
	    </div><!-- .offcanvas-menu -->
	  </div><!-- /st-container -->


		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>



		<!-- jQuery -->
		<script src="/js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="/js/bootstrap.min.js"></script>
		<!-- wow.min.js -->
		<script src="/js/wow.min.js"></script>
		<!-- owl-carousel -->
		<script src="/owl-carousel/owl.carousel.min.js"></script>
		<!-- smoothscroll -->
		<script src="/js/smoothscroll.js"></script>
		<!-- Offcanvas Menu -->
		<script src="/js/hippo-offcanvas.js"></script>
		<!-- easypiechart -->
		<script src="/js/jquery.easypiechart.min.js"></script>
		<!-- Scrolling Nav JavaScript -->
		<script src="/js/jquery.easing.min.js"></script>
		<!-- Magnific-popup -->
		<script src="/js/jquery.magnific-popup.min.js"></script>
		<!-- Shuffle.min js -->
		<script src="/js/jquery.shuffle.min.js"></script>

		<!-- Validate.min js -->
		<script src="/js/jquery.validate.min.js"></script>

		<!-- Jquery.mask.min js -->
		<script src="/js/jquery.mask.min.js"></script>

		<!-- Custom Script -->
		<script src="/js/scripts.js"></script>
		<script src="/js/custom.js"></script>

		<script>
			$(document).ready(function(){
				$('#alert_message').delay(10000).fadeOut();
			});
		</script>

		@yield('script')
	</body>
</html>
