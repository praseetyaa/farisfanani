<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>

<div class="bg-theme-1">
	<div class="d-flex justify-content-end align-items-center text-white h-100">
		<div class="container text-center">
			<div class="d-flex justify-content-center">
				<h1 data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">4</h1>
				<h1 data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="top-bottom" style="color: rgba(0,0,0,.5);">0</h1>
				<h1 data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="top-bottom">4</h1>
			</div>
			<h5 class="text-capitalize mb-4" data-aos="fade-up" data-aos-duration="2500">Halaman yang kamu tuju <span style="color: rgba(0,0,0,.5);" class="fw-bold">tidak ditemukan</span></h5> 
			<button data-aos="fade-up" data-aos-duration="3000" onclick="kembali()" class="btn btn-theme btn-theme-1 me-2"><i class="far fa-arrow-left"></i> Kembali</button>
			<button data-aos="fade-up" data-aos-duration="3000" onclick="beranda()" class="btn btn-theme btn-theme-1 me-2"><i class="far fa-home-lg-alt"></i> Beranda</button>
		</div>
		<p class="position-absolute start-50 translate-middle" style="top: 93%">Made with <i class="fa fa-heart" style="font-size: .8rem; color: rgba(230, 57, 70, 1);"></i></p>
		<p class="position-absolute start-50 translate-middle" style="top: 96%"><i class="fab fa-github"></i> Github <a href="https://github.com/praseetyaa" class="text-white" target="_blank">Praseetyaa</a></p>

	</div>
</div>
<style type="text/css">
	nav {display: none!important;}
	footer{display: none;}
	h1{font-size: 12rem}
	h1, h5, p {color: rgba(255,255,255,1);}
	.bg-theme-1{background-color: var(--primary); height: 100vh}
	.btn-theme-1{background-color: rgba(0,0,0,.5); color: #fff;}
	.btn-theme-1:hover{background-color: rgba(0,0,0,.8); color: #fff;}
	.fab-wa{display: none!important}
</style>
<script>
function kembali() {
	window.history.back();
}
function beranda() {
	location.href = "<?php echo home_url() ?>";
}
</script>
<?php get_footer(); ?>
