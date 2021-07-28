<?php
/*
Template Name: Halaman Kontak
*/
get_header(); ?>
<section class="section-header section-blog py-5">
    <div class="container text-center py-0 py-lg-5"> 
        <h1 class="mb-4"><?php the_title();?></h1>
    </div>
</section>
<section class="section-benefit pt-5 pt-md-0">
    <div class="container">
        <div class="card p-3 rounded-3 shadow-sm">
            <div class="card-body d-block d-md-flex">
                <div class="text-center txet-md-start">
                <img width="80" class="me-3 mb-3 mb-md-0" src="https://image.flaticon.com/icons/svg/3203/3203477.svg" alt="customer-service"></div>
                <div>
                    <h5>Diskusikan kebutuhan bisnis Anda dengan kami</h5>
                    <p class="mb-0">Kami ingin menunjukkan bagaimana Akuntansi Online dapat memecahkan masalah yang Anda hadapi dalam bisnis Anda. Jelaskan permasalahan bisnis Anda dengan kami, agar kami dapat memberikan solusi yang paling tepat untuk bisnis Anda</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-content">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card py-4">
                    <div class="card-img-top text-center">
                        <img width="100" class="me-3 mb-3 mb-md-0" src="https://image.flaticon.com/icons/svg/3203/3203435.svg" alt="customer-service">
                        <h3>Telepon</h3>
                    </div>
                    <div class="card-body text-center">
                        <p>Bicara langsung dengan<br>konsultan kami melalui Telepon</p>
                        <a class="btn btn-primary" href="tel:(024) 3583732">Hubungi Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card py-4">
                    <div class="card-img-top text-center">
                        <img width="100" class="me-3 mb-3 mb-md-0" src="https://image.flaticon.com/icons/svg/3203/3203434.svg" alt="customer-service">
                        <h3>WhatsApp</h3>
                    </div>
                    <div class="card-body text-center">
                        <p>Bicara langsung dengan<br>konsultan kami melalui WhatsApp</p>
                        <a class="btn btn-primary" href="https://wa.me/62816282136">Hubungi Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-map">
    <div class="container py-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.4918766714279!2d110.461507866504!3d-7.024560277602589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x17aecb7337057027!2sPT%20Campus%20Data%20Media!5e0!3m2!1sen!2sid!4v1623658310229!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="rounded" id="map-canvas"></iframe>
    </div>
</section>
<div>
    <div class="custom-shape-divider-bottom-1623205536">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
      </svg>
    </div>
    <section class="section-cta pb-5" style="background-color: var(--primary-s);">
        <div class="container text-center">
            <h1 style="color: var(--primary);">Jalankan Bisnis Anda lebih Mudah dan Cepat<br>dengan Akuntansi Online</h1>
            <div class="btn-container">
                <a class="btn btn-lg btn-primary button at" href="https://member.akuntansionline.net/index.php?r=user/registration/step0" ><i class="fas fa-gem"  style="animation: opacito 1s infinite ease;" rel="noreferrer"></i> Coba Gratis Sekarang</a>
            </div>
        </div>
    </section>
</div>
<style type="text/css">
.custom-shape-divider-top-1623133865{background-color: var(--primary-s); display: block;}
@media (max-width: 768px) {.section-benefit{top: -3rem;} }
@media (max-width: 425px) {.section-benefit{top: 0rem;} }
</style>
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
<?php get_footer();?>