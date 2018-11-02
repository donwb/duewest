<?php 
if(isset($_POST['submit'])){
    $to = "example@example.com"; // this is your Email address!
    $from = $_POST['ContactEmail']; // this is the sender's Email address
    $contact_name = $_POST['ContactName'];
	$contact_phone = $_POST['ContactPhone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $contact_name . " " . " wrote the following:" . "\n\n" . $_POST['ContactComment'] . "\n\n";
    $message2 = "Here is a copy of your message " . $contact_name . "\n\n" . $_POST['ContactComment'] . "\n\n";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>  <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Solus Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic%7cOswald:300,400' rel='stylesheet' type='text/css'>
	<script src="js/libs/jquery-1.11.2.js"></script>	
	<script src="js/libs/jquery-migrate.min.js"></script>
	<script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>
<body class="page">
	<header>
		<div id="header-gradient-pro">
			<div class="width-container">
				<h1 id="logo">
					<a href="index.html" rel="home" title="Solus WordPress Theme">
						<img alt="Solus WordPress Theme" src="images/logo.png"	width="134">
					</a>
				</h1>

				<nav>
					<div class="menu-main-navigation-container">
						<ul class="sf-menu" id="menu-main-navigation">
							<li class="menu-item">
								<a href="index.html">Home</a>
							</li>

							<li class="menu-item">
								<a href="gallery.html">Gallery</a>
								<ul class="sub-menu">
									<li class="menu-item">
										<a href="page-faq.html">Frequently Asked Questions</a>
									</li>

									<li class="menu-item">
										<a href="page-shortcodes.html">Shortcodes</a>
									</li>

									<li class="menu-item">
										<a href="blog.html">Latest News</a>
									</li>

									<li class="menu-item">
										<a href="page-maps-videos.html">Maps and Videos</a>
									</li>

									<li class="menu-item">
										<a href="page-columns.html">Full Width Example</a>
									</li>
								</ul>
							</li>

							<li class="menu-item">
								<a href="page-video-tour.html">Video tour</a>
							</li>

							<li class="menu-item current-menu-item">
								<a href="contact.html">Contact Agent</a>
							</li>
						</ul>
					</div>
				</nav>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="page-title-fix-pro">
			<div class="width-container">
				<div id="page-title">
					<h1>Contact Agent</h1>

					<div class="clearfix"></div>

					<ul id="bread-crumb">
						<li>
							<a class="fa fa-home" href="index.html"></a>
						</li>
						<li class="home"><span><a class="home" href="index.html" rel="v:url" title="Go to Solus WordPress Theme.">Solus WordPress Theme</a></span></li>
						<li class="current_item"><span><span>Contact Agent</span></span></li>
					</ul>
				</div>
			</div>
		</div>			
		<div class="clearfix"></div>
	</header>

	<div id="map-progression">
		<div class="google-maps-expand">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3119.812016800472!2d-122.7977306!3d38.56114469999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80843e1d40177659%3A0xb89cded1ddf7a779!2s1351+Arata+Ln%2C+Windsor%2C+CA+95492%2C+USA!5e0!3m2!1sen!2sil!4v1429789479657"></iframe>
		</div>	
	</div>
	
	<div id="main">
		<div class="width-container">
			<div id="content-container">
				<div class="content-container-pro">
					<h4>Fill out the form and we will get back to you within 24 hours</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley.<br></p>

					<div class="wpcf7">
						<form class="progression-contact" id="CommentForm" method="post" action="">
							<fieldset>
								<div>
									<p><input id="ContactName" name="ContactName" class="textInput required" placeholder="YOUR NAME" /></p>
								</div>
								<div>
									<p><input id="ContactEmail" name="ContactEmail" class="textInput required email" placeholder="EMAIL ADDRESS" /></p>
								</div>
								<div>
									<p><input id="ContactPhone" name="ContactPhone" class="textInput digits" value="" placeholder="PHONE NUMBER" /></p>
								</div>
								<div>
									<p><textarea id="ContactComment" name="ContactComment" class="textInput required" rows="10" cols="4" placeholder="SPECIAL INSTRUCTIONS/COMMENTS"></textarea></p>
								</div>
								<div>
									<p><input type="submit" name="submit" value="REQUEST A SHOWING" class="wpcf7-form-control wpcf7-submit"></p>
									<p></p>
								</div>
							</fieldset>
						</form>	
					</div>
		
				</div>
			</div>	
				
			<div id="sidebar">
				<div id="pyre_homepage_media-widget-agent-feat-2" class="sidebar-item widget pyre_homepage_media-agent-feat">
					<h4 class="widget-title">Listing Agent</h4>
					<div id="listing-agent-pro">
						<div id="agent-thumbnail-pro">
							<img src="images/demo/agent-small.jpg" alt="Listing Agent">
						</div>
						<h5>Jane Doe</h5>
						<h6>Real Estate Group</h6>
						<div class="clearfix"></div>
						<div class="user-info-pro">
							<a href="mailto:jane.doe@website.com"><i class="fa fa-envelope-o"></i>jane.doe@website.com</a>
						</div>
						<div class="user-info-pro">
							<i class="fa fa-phone"></i>(800) 232-4444
						</div>
						<div class="user-info-pro">
							<i class="fa fa-mobile"></i>(800) 456-5433
						</div>
						<div class="user-info-pro">
							<a href="http://real-estate.com" target="_blank"><i class="fa fa-globe"></i>http://real-estate.com</a>
						</div>
						<ul class="social-ico">
							<li>
								<a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a>
							</li>
							<li>
								<a href="e-mail@email.com" target="_blank"><i class="fa fa-envelope"></i></a>
							</li>
						</ul>
					</div>
				</div>
			<div class="sidebar-divider"></div>
			</div><!-- close #sidebar -->
		</div>
	</div>
	<div class="clearfix"></div>
	
	<div class="homepage-widgets-pro">
		<div class="widget home-widget">
			<div class="footer-highlight-home  light-fonts-pro">
				<div class="footer-highlight-text">
					<div class="width-container align-center-pro">
						<h1 class="footer-highlight-widget">Interested in a
						Showing?</h1>

						<div class="summary-text-pro">
							Lorem ipsum dolor sit amet, consectetur adipisicing
							elit, sed do eiusmod tempor incididunt.
						</div><a class="progression-button" href=
						"contact.html"><i class=
						"ls-sc-button-icon-left fa fa-calendar"></i>Schedule a
						showing!</a>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div id="copyright">
			<div class="width-container">
				<div class="social-ico">
					<a href="http://maps.google.com" target="_blank"><i class="fa fa-map-marker"></i></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=http://solus.progressionstudios.com/" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/home?status=http://solus.progressionstudios.com/" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="https://plus.google.com/share?url=http://solus.progressionstudios.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
					<a href="mailto:e-mailaddress?body=http://solus.progressionstudios.com/" target="_blank"><i class="fa fa-envelope"></i></a>
				</div>

				<div id="copyright-text">
					2015 All Rights Reserved. Developed by ProgressionStudios
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</footer>
	
	
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="js/libs/jquery-ui.min.js"></script>
</body>
</html>