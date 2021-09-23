<?php
/**
 * Template Name: Category
 * 
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */

get_header(); ?> 

<section class="container position-relative mt-4">
    <div class="section-g bg-header rounded">
        <div class="overlay-content position-relative text-white text-center py-5 rounded overlay-dark"> 
	        <h1 class="mb-4">Kategori</h1>
	        <h5><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h5>
        </div>
    </div>
</section>
<section class="bg-light">
	<div class="container py-5" id="primary">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
		                <?php 

		                	$cat = get_the_category();
		                	$cats = $cat[0]->cat_name;
		                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		                    $wpb_all_query_a = new WP_Query(
		                        array(
		                            'post_type'=>'post',
		                            'post_status'=>'publish',
		                            'category_name' => $cats,
		                            'posts_per_page'=> 8,
		                            'paged' => $paged,
		                        )
		                    );
		                ?>

					<?php if ( $wpb_all_query_a->have_posts() ) : ?>
					<?php while ( $wpb_all_query_a->have_posts() ) : $wpb_all_query_a->the_post(); ?>
					<div class="col-lg-6">
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
		                    <figure>
		                        <div class="card">
		                            <a class="text-decoration-none text-body" href="<?php the_permalink();?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php the_title(); ?>">
		                                <!-- no blank thumbnail -->
		                                <?php if ( has_post_thumbnail() ) { ?>
		                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Generic" placeholder="image"
		                                style="background: url('<?php echo $url ?>'); width: 100%; height: 200px; background-position: center; background-repeat: no-repeat; background-size: cover;">
		                                <?php } else { ?>
		                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Generic" placeholder="image"
		                                style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/placeholder_600x400.svg'); width: 100%; height: 200px; background-position: center; background-repeat: no-repeat; background-size: cover;">
		                                <?php } ?>
		                            </a>
		                            <div class="card-body">
                                        <a href="<?php the_permalink(); ?>" class="text-decoration-none text-body fw-bold">
                                            <p class="card-title text-truncate mb-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php the_title(); ?>"><?php the_title(); ?></p>
                                        </a>
                                        <?php $category = get_the_category(); $cat = $category[0]->cat_name; ?>
                                        <a href="<?php echo home_url(); ?>/category/<?php echo $cat ?>"><p><span class="badge" style="background-color: var(--primary);"><?php echo $cat ?></span></p></a>
		                                <small class="text-muted">
											<i class="far fa-calendar"></i> <?php echo date('d M Y',strtotime($post->post_date));?> &bull;
		                                    <i class="far fa-user"></i> By <?php the_author_posts_link(); ?>
		                                </small>
		                            </div>
		                        </div>
		                    </figure>
					</div>
					 
					<?php endwhile; ?>

		            <div class="col-12 mt-4">
		                <nav aria-label="Page navigation example">
		                    <ul class="pagination justify-content-center">   
		                    	<?php echo paginate_links(); ?>
		                    </ul>
		                </nav>
		            </div>

					<?php else: ?>
					<div class="container">
						<img src="https://i.imgur.com/QLyVDoK.gif">
					</div>
					 
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-4">
				<?php include get_theme_file_path( '/partials/sidebar.php' ); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>