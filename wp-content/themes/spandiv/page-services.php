<?php
/**
 * Template Name: Services
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */

get_header(); ?>

<section class="container position-relative mt-4">
    <div class="section-f bg-header rounded">
        <div class="overlay-content position-relative text-white text-center py-0 py-lg-5 rounded overlay-dark"> 
            <h1 class="pt-4"><?php the_title();?></h1>
            <h5 class="pb-4">Our Services</h5>
        </div>
    </div>
</section>

<section class="section-content py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="card py-2 bg-transparent shadow-none border text-center">
                    <div class="card-body">
                        <img width="50" src="<?= get_template_directory_uri() ?>/assets/images/icons/tribune.png" class="header-icon mb-2" alt="icon">
                        <p class="fw-bold">Pembicara Publik</p>
                        <p class="mb-0">Pembicara Publik dengan konsentrasi dibidang komunikasi, psikologi, spiritual, bisnis, pengembangan sdm</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="card py-2 bg-transparent shadow-none border text-center">
                    <div class="card-body">
                        <img width="50" src="<?= get_template_directory_uri() ?>/assets/images/icons/instructor.png" class="header-icon mb-2" alt="icon">
                        <p class="fw-bold">Coaching Bisnis</p>
                        <p class="mb-0">Coaching bisnis bagi bisnis owner untuk memaksimalkan potensi-potensi yang ada dalam sumber daya yang mereka miliki</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="card py-2 bg-transparent shadow-none border text-center">
                    <div class="card-body">
                        <img width="50" src="<?= get_template_directory_uri() ?>/assets/images/icons/human-resources.png" class="header-icon mb-2" alt="icon">
                        <p class="fw-bold">Konsultan Bisnis & HRD</p>
                        <p class="mb-0">Sebagai konsultan HRD, Kami siap membantu perusahaan dalam mengoptimalkan kinerja Sumber Daya Manusia yang dimiliki</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="card py-2 bg-transparent shadow-none border text-center">
                    <div class="card-body">
                        <img width="50" src="<?= get_template_directory_uri() ?>/assets/images/icons/mindset.png" class="header-icon mb-2" alt="icon">
                        <p class="fw-bold">Psikolog & Psikoterapis</p>
                        <p class="mb-0">Membantu Anda dalam memahami potensi, bakat dan pengembangan karakter. Memberikan terapi terhadap persoalan mental atau kejiwaan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.custom-shape-divider-top-1623133865{background-color: var(--primary-s); display: block;}
</style>
<?php get_footer(); ?>