<?php 
/**
 * Template Name: Page
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */

get_header(); ?>

<section class="container position-relative mt-4">
    <div class="section-g bg-header rounded">
        <div class="overlay-content position-relative text-white text-center py-0 py-lg-5 rounded overlay-dark"> 
            <h1 class="mb-4"><?php the_title();?></h1>
        </div>
    </div>
</section>

<section class="section-content">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div>
                <?php the_content(); ?>
                    
                </div>
        <?php endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
