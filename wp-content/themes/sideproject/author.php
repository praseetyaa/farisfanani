
<?php get_header(); ?>


    <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>

	<section class="container position-relative mt-4">
	    <div class="section-g bg-header rounded">
	        <div class="overlay-content position-relative text-white text-center py-5 rounded overlay-dark"> 
		        <h1 class="mb-4"><?php echo $curauth->nickname; ?></h1>
		        <h5>Daftar Postingan</h5>
	        </div>
	    </div>
	</section>
	<section class="section-content py-5 bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
				    <div class="row">
				    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			            <div class="col-md-6">
			                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
			                <figure>
			                    <div class="card">
			                        <a class="text-decoration-none text-body" href="<?php the_permalink();?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php the_title(); ?>" rel="bookmark">
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
					    <?php endwhile; else: ?>
					        <p><?php _e('Article Not Found!!!'); ?></p>
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