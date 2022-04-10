<!-- contact -->
<div id="contact" class="contact">
		<div class="container"> 
			<div class="w3-heading-all">
				<h3>Contact Us</h3>
			</div> 
			<div class="contact-info">
				<div class="col-md-4 contact-grids">
					<div class="cnt-address">
						<h3>Address</h3>
						<h4>Headquarters</h4>
						<p>123 T. Globel Place.
							<span class="w3ls-text">CG 09-123</span>
							NewYork, Ba. 4567
						</p>
						<h4>Get In Touch</h4>
						<p>Telephone: +1 234 567 2222
							<span>Fax: +122 234 567 1111</span>
							E-mail: <a href="mailto:info@example.com">mail@example.com</a>
						</p>
					</div>
				</div>
				<div class="col-md-8 contact-grids">
					<h4 class="cnt-text">Gnissimos voluptatum deleniti atque corrupti quos dolores et quas</h4>
					<p>Landitiis atque corrupti quos dolores et quas molestias excepturi sint occaecat atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum </p>		
					<div class="contact-form">
						<h3>Drop Us a Line</h3>
						<form action="#" method="post">
							<textarea placeholder="Message" required=""></textarea>
							<input type="text" placeholder="Name" required="">
							<input type="email" placeholder="Email" required="">
							<input type="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48393.30799446157!2d-74.01837574721542!3d40.70520823566694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1453557757637" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- //contact -->

<!-- footer -->
<div class="footer_agile_w3ls">
	<div class="container">
		<div class="agileits_w3layouts_footer_grids">
	        <div class="col-md-3 footer-w3-agileits">
					<h3>Our Conditions</h3>
					<ul>
						<li>Etiam quis placerat</li>
						<li>the printing</li>
						<li>unknown printer</li>
						<li>Lorem Ipsum</li>
					</ul>
			</div>
			<div class="col-md-3 footer-agileits">
					<h3>Specialized</h3>
					<ul>
						<li>the printing</li>
						<li>Etiam quis placerat</li>
						<li>Lorem Ipsum</li>
						<li>unknown printer</li>
					</ul>
				</div>
				<div class="col-md-3 footer-wthree">
					<h3>Partners</h3>
					<ul>
						<li>unknown printer</li>
						<li>Lorem Ipsum</li>
						<li>the printing</li>
						<li>Etiam quis placerat</li>
					</ul>
				</div>
	
				<div class="col-md-3 footer-agileits-w3layouts">
					<h3>Our Links</h3>
					<ul>
						<li><a href="#home" class="scroll">Home</a></li>
						<li><a href="#about"  class="scroll">About</a></li>
						<li><a href="#services"  class="scroll">Services</a></li>
					    <li><a href="#contact"  class="scroll">Contact Us</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>

		</div>
	</div>
</div>
<div class="wthree_copy_right">
	<div class="container">
		<p>© 2018 Bank lock. All rights reserved | Design by <a href="http://w3layouts.com/">Nguyễn Đăng Thiên</a></p>
	</div>
</div>
<!-- //footer -->
<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	

<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
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
<!-- start-smoth-scrolling -->

<!-- Baneer-js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager:false,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
<!-- //Baneer-js -->
<!-- js for Counter -->
		<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- /js for Counter -->
<!-- carousal -->
	<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->

<!-- //js-scripts -->
</body>
</html>