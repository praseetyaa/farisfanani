<?php
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        /**
         * menggunakan featured image
         */
        if (has_post_thumbnail()) {
            $thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        } else {
            $thumbnail = get_template_directory_uri() . '/assets/images/businessman-showing-changes-report_1098-3504.jpg';
        }
        ?>


<section class="container position-relative mt-4">
    <div class="section-g bg-header rounded">
        <div class="overlay-content position-relative text-white text-center py-0 py-lg-5 rounded overlay-dark"> 
            <div class="py-lg-5">
                <h1 class="mb-4"><?php the_title();?></h1>
                <span class="meta">
                    <i class="far fa-user" aria-hidden="true"></i> 
                    <?php the_author_posts_link(); ?>
                    <i class="far fa-calendar ms-2" aria-hidden="true"></i>
                    <?php the_date( 'D F Y' ); ?>
                    <i class="far fa-clock ms-2" aria-hidden="true"></i>
                    <?php the_time(); ?>
                    <i class="far fa-tags ms-2" aria-hidden="true"></i>
                    <?php
                    $posttags = get_the_tags();
                    $count=0;
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        $count++;
                        if (1 == $count) {
                          echo $tag->name;
                        }
                      }
                    }
                    ?>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="section-content py-5">
    <div class="container">
        <div class="row berita">
            <!-- Post Content -->
            <div class="col-12 col-lg-8">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo home_url() ?>"><i class="far fa-home-lg-alt"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/blog">Blog</i></a></li>
                    <li class="breadcrumb-item active text-capitalize" aria-current="page"><?php the_title() ?></li>
                  </ol>
                </nav>
                <article>
                    <div class="entry">
                        <!-- no blank thumbnail -->
                        <?php if ( has_post_thumbnail() ) { ?>
                        <img class="me-2 mb-3 rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Generic" placeholder="image"
                        style="background: url('<?php the_post_thumbnail_url() ?>'); width: 100%; height: 400px; background-position: center; background-repeat: no-repeat; background-size: cover;">
                        <?php } else { ?>
                        <img class="me-2 mb-3 rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Generic" placeholder="image"
                        style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/placeholder_600x400.svg'); width: 100%; height: 400px;; background-position: center; background-repeat: no-repeat; background-size: cover;">
                        <?php } ?>
                        <!-- content -->
                        <?php the_content(); ?>
                    </div>
                    <div class="comment mt-5">
                        <?php comments_template();?>
                    </div>
                </article>
            </div>
            <div class="col-lg-4">
                <?php include get_theme_file_path( '/partials/sidebar.php' ); ?>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    .meta a{color: var(--bs-white);}
</style>
        <?php
    }
}
?>
<?php get_footer();?>