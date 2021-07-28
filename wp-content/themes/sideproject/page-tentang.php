<?php
/*
Template Name: Halaman Tentang
*/
get_header(); ?>
<section class="section-header">
    <div class="container-header">
        <div class="bg-image">
            <img class="img-overlay" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
            <div class="mask" style="background-color: rgba(0,0,0,.6);">
                <div class="d-flex justify-content-end align-items-end text-white h-100">
                    <div class="container">
                        <h1 class="text-capitalize"><?php the_title();?></h1>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    body{background-color: #f8f9fa}
    .img-overlay{
    background: url(<?php echo get_template_directory_uri() .'/assets/images/photo-1517048676732-d65bc937f952.jpg';?>);
    height: 200px;
    width: 100%;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;}
    .breadcrumb-item a{color: rgba(255,255,255,1); text-decoration: none;}
    .breadcrumb-item.active{color: rgba(255,255,255,.55);}
</style>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

        <!-- Main Content 1 -->
        <div class="bg-theme-1">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="d-flex justify-content-end align-items-center text-white h-100">
                            <div class="container mb-3 mb-lg-0 text-center text-lg-start">
                                <img class="img-fluid logo-tentang shadow rounded-3" src="<?php bloginfo('template_url'); ?>/assets/images/logo/logo-rounded-dark.svg">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <?php
                        // limit post 
                        $args = array( 
                            'post_type' => 'post', 
                            'posts_per_page' => 6,
                            'cat' => '12', 
                            'order'   => 'ASC',
                        );
                        $query = new WP_Query( $args ); //query the categories

                        if ($query->have_posts()) {
                        while ($query->have_posts()) {
                        $query->the_post(); ?>

                        <div class="">
                            <h3 class="text-center text-lg-start"><?php echo the_title(); ?></h3>
                            <p><?php echo the_content(); ?></p>
                        </div>

                        <?php } ?>
                        <?php }  else {
                            // not found article ?>
                            <div class="post-preview">
                                <h2 class="post-title">Article Not Found!!!</h2>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content 1 -->
        <div class="container my-5"> 
            <div class="heading text-center">
                <h1 class="mb-4">Skema Pelatihan dan Sertifikasi</h1>
            </div>
             <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 my-4">
                    <div class="card border-0 shadow-sm rounded-2">
                        <div class="text-center bg-theme-1 rounded-2 py-5 shadow">
                            <i class="fa fa-chalkboard-teacher card-img-top" style="font-size: 4em"></i>
                        </div>
                        <div class="card-body">
                            <div>
                            <div class="caption-ahli">
                                <p class="m-0 fw-bold">Bidang Teknologi Digital</p>
                                <span>Digital Marketing & Office,  Software Development, Data Science, Multimedia, Project Quality & Management, Network Administrator, Graphic Design</span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 my-4">
                    <div class="card border-0 shadow-sm rounded-2">
                        <div class="text-center bg-theme-1 rounded-2 py-5 shadow">
                            <i class="fa fa-users card-img-top" style="font-size: 4em"></i>
                        </div>
                        <div class="card-body">
                            <div>
                            <div class="caption-ahli">
                                <p class="m-0 fw-bold">Bidang Manajemen Pengembangan Sumber Daya Manusia</p>
                                <span>Staf Rekrutment, Supervisor Pelatihan, Manajer HRD, Direktur SDM</span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 my-4">
                    <div class="card border-0 shadow-sm rounded-2">
                        <div class="text-center bg-theme-1 rounded-2 py-5 shadow">
                            <i class="fa fa-chart-line card-img-top" style="font-size: 4em"></i>
                        </div>
                        <div class="card-body">
                            <div>
                            <div class="caption-ahli">
                                <p class="m-0 fw-bold">Bidang Kepelatihan</p>
                                <span>Pelatih Junior, Pelatih Senior, Master Trainer</span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 my-4">
                    <div class="card border-0 shadow-sm rounded-2">
                        <div class="text-center bg-theme-1 rounded-2 py-5 shadow">
                            <i class="fa fa-bus-alt card-img-top" style="font-size: 4em"></i>
                        </div>
                        <div class="card-body">
                            <div>
                            <div class="caption-ahli">
                                <p class="m-0 fw-bold">Bidang Pariwisata</p>
                                <span>Expreriencial Learning, Tour Guide</span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 my-4">
                    <div class="card border-0 shadow-sm rounded-2">
                        <div class="text-center bg-theme-1 rounded-2 py-5 shadow">
                            <i class="fa fa-balance-scale card-img-top" style="font-size: 4em"></i>
                        </div>
                        <div class="card-body">
                            <div>
                            <div class="caption-ahli">
                                <p class="m-0 fw-bold">Bidang UMKM</p>
                                <span>Pengelola UMKM, Pendamping UMKM, Fasilitator Diklat UMKM</span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <div class="container d-none">
            <?php
            // limit post 
            $args = array( 
                'post_type' => 'post', 
                'posts_per_page' => 6,
                'cat' => '13', 
                'order'   => 'ASC',
            );
            $query = new WP_Query( $args ); //query the categories

            if ($query->have_posts()) {
            while ($query->have_posts()) {
            $query->the_post(); ?>

            <div class="">
                <h3><?php echo the_title(); ?></h3>
                <p><?php echo the_content(); ?></p>
            </div>

            <?php } ?>
            <?php }  else {
                // not found article ?>
                <div class="post-preview">
                    <h2 class="post-title">Article Not Found!!!</h2>
                </div>
            <?php } ?>
        </div>
<?php
  } // end while
} // end if

get_footer();?>
<script type="text/javascript">
    function resizeJurusan(){
        var captionJurusan = $(".caption-ahli");
        var maxHeight = 0;
        captionJurusan.each(function(key,elem){
            var elemHeight = $(elem).outerHeight(true);
            maxHeight = elemHeight > maxHeight ? elemHeight : maxHeight;
        });
        
        captionJurusan.each(function(key,elem){
            $(elem).parent().css("height", maxHeight);
        });
    }

    // Resize when loading
    $(window).on("load", function(){
        resizeJurusan();
    });
        
    // Resize when resizing
    $(window).on("resize", function(){
        resizeJurusan();
    });
</script>