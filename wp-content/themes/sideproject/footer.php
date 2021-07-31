	<section class="section-e">
		<div class="bg-primary py-4">
			<div class="container">
				<div class="row align-items-center mb-4">
					<div class="col-lg-9 mb-3 mb-lg-0 text-white">
						<h3>Permintaan Jadwal & Pertemuan</h3>
						<p class="mb-0">Silahkan menghubungi kami untuk jadwal temu dan konsultasi, klik tombol WhatsApp untuk chat langsung dengan kami.</p>
					</div>
					<div class="col-lg-3 mb-3 mb-lg-0">
						<a class="btn btn-light d-flex flex-column align-items-center"><i class="fab fa-whatsapp h1" style="color: var(--success);"></i><span class="fw-bold">Chat WhatsApp</span></a>
					</div>
				</div>
				<hr style="background-color: white">
				<div class="row">
					<div class="col-lg-6 mb-3 mb-lg-0">
						<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1979.9203122495326!2d110.423284!3d-7.028012!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b87b4078187%3A0x80a0acb63f0fdc74!2sJatingaleh%2C%20Candisari%2C%20Semarang%20City%2C%20Central%20Java%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1627628891761!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
					<div class="col-lg-6 mb-3 mb-lg-0 text-white py-lg-5">
						<h3 class="text-center">Get In Touch</h3>
						<hr>
						<div class="row">
							<div class="col-lg-6 mb-3 mb-lg-0">
								<h5>Contact Us</h5>
								<p class="mb-0">+6285540000900</p>
								<p class="mb-0">farisfanani.id@gmail.com</p>
							</div>
							<div class="col-lg-6 mb-3 mb-lg-0">
								<h5>Our Hours</h5>
								<p class="mb-0">MON-FRI 09:00 – 19:00</p>
								<p>SAT-SUN 10:00 – 14:00</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="section-footer" style="background-color: var(--primary)">
		<div class="copyright text-center py-2 text-white" style="background-color: rgba(0, 0, 0, .3);">
			<span>Copyright © <?php echo date("Y"); ?> Faris Fanani</span>
		</div>
	</footer>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  		AOS.init({
		   once: true
		})
	</script>
    <script type="text/javascript">
		$(document).ready(function() {
			$(window).scroll(function() {    
			    var scroll = $(window).scrollTop();
			    if (scroll >= 100) {
			        $(".navbar").addClass("shrink");
			    } else {
			      $(".navbar").removeClass("shrink");
			    }
			});
		});
    </script>
    <script type="text/javascript">
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
		var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		  return new bootstrap.Tooltip(tooltipTriggerEl)
		})
    </script>
	<script type="text/javascript">

	function initialize() {

	  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	  // Resize stuff...
	  google.maps.event.addDomListener(window, "resize", function() {
	    var center = map.getCenter();
	    google.maps.event.trigger(map, "resize");
	    map.setCenter(center); 
	  });

	}

	</script>
    <?php wp_footer(); ?>
    </body>
</html>