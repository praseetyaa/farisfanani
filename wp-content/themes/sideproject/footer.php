	<div class="custom-shape-divider-top-1623133865">
	    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
	        <path d="M602.45,3.86h0S572.9,116.24,281.94,120H923C632,116.24,602.45,3.86,602.45,3.86Z" class="shape-fill"></path>
	    </svg>
	</div>
	<footer class="section-footer pt-5" style="background-color: var(--primary)">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-3 text-start text-md-center text-lg-start">
					<a href="<?php echo home_url() ?>">
						<div class="p-3 rounded-1 bg-white mx-0 mx-md-auto mx-lg-0" style="width: fit-content;">
							<img src="<?php echo home_url() ?>/wp-content/uploads/2019/09/cropped-Logo-Putih-berlubang-1.svg" height="35">
						</div>
					</a>
					<div class="mt-3 text-white">
						<a target="_blank" href="https://www.facebook.com/akuntansionlineterlengkap" class="footer-link me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook" rel="noreferrer"><i class="fab fa-facebook h3"></i></a>
						<a target="_blank" href="https://www.instagram.com/akuntansionline.official/" class="footer-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram" rel="noreferrer"><i class="fab fa-instagram h3"></i></a>
					</div>
				</div>
				<div class="col-12 col-md-3 col-lg-2">
					<ul class="list-group list-group-flush">
						<li class="list-group-item bg-transparent border-0 px-0 fw-bold text-white">
							Menu
						</li>
						<li class="list-group-item bg-transparent border-0 px-0">
							<a class="footer-link text-decoration-none" href="<?php bloginfo('url'); ?>/fitur/">Fitur</a>
						</li>
						<li class="list-group-item bg-transparent border-0 px-0">
							<a class="footer-link text-decoration-none" href="<?php bloginfo('url'); ?>/harga/">Harga</a>
						</li>
						<li class="list-group-item bg-transparent border-0 px-0">
							<a class="footer-link text-decoration-none" href="<?php bloginfo('url'); ?>/kontak/">Kontak</a>
						</li>
					</ul>
				</div>
				<div class="col-12 col-md-3 col-lg-2">
					<ul class="list-group list-group-flush">
						<li class="list-group-item bg-transparent border-0 px-0 fw-bold text-white">
							Resources
						</li>
						<li class="list-group-item bg-transparent border-0 px-0">
							<a class="footer-link text-decoration-none" href="<?php bloginfo('url'); ?>/blog/">Blog</a>
						</li>
						<li class="list-group-item bg-transparent border-0 px-0">
							<a class="footer-link text-decoration-none" href="<?php bloginfo('url'); ?>/category/kegiatan/">Kegiatan</a>
						</li>
					</ul>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<ul class="list-group list-group-flush text-white">
						<li class="list-group-item bg-transparent border-0 px-0 fw-bold">
							Hubungi Kami
						</li>
						<li class="list-group-item bg-transparent border-0 px-0">
							<i class="fal fa-map-marker-alt position-absolute" style="font-size: 22px"></i>
							<p class="mb-0" style="margin-left: 2em"> Jl. Kedungmundu No.27 b, Sambiroto, Kec. Tembalang, Kota Semarang, Jawa Tengah 50273</p>
						</li>
						<li class="list-group-item bg-transparent border-0 px-0">
							<i class="fal fa-phone position-absolute" style="font-size: 22px"></i>
							<p class="mb-0" style="margin-left: 2em"> (024) 3583732</p>
						</li>
						<li class="list-group-item bg-transparent border-0 px-0">
							<i class="fab fa-whatsapp position-absolute" style="font-size: 22px"></i>
							<p class="mb-0" style="margin-left: 2em"> +62816282136</p>
						</li>
					</ul>					
				</div>
			</div>
		</div>
		<div class="copyright text-center mt-5 py-2 text-white" style="background-color: rgba(0,0,0,.2);">
			<span>©2021 Akuntansi Online. All rights reserved</span>
		</div>
	</footer>
    <!-- Bootstrap -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQ -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <!-- aos -->
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

			     //>=, not <=
			    if (scroll >= 100) {
			        //clearHeader, not clearheader - caps H
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
    <?php wp_footer(); ?>
    </body>
</html>