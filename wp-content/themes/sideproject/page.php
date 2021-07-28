<?php 
/*
Template Name: Fitur
*/
?>
<?php get_header(); ?>

<section class="section-header section-blog py-5">
    <div class="container text-center py-0 py-lg-5"> 
        <h1 class="mb-4"><?php the_title();?></h1>
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
