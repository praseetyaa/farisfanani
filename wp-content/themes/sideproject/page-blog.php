<?php
/*
Template Name: Halaman Blog
*/
get_header(); ?>
<section class="container position-relative mt-4">
    <div class="section-g bg-header rounded">
        <div class="overlay-content position-relative text-white text-center py-5 rounded overlay-dark"> 
            <h1 class="mb-4"><?php the_title();?></h1>
            <h5 class="mb-4">Artikel, tips, dan checklist menarik yang disiapkan bagi bisnis Anda</h5>
            <form method="get" action="<?php echo home_url(); ?>" role="search">
                <div class="input-group px-3 px-md-5">
                  <input type="text" class="form-control" aria-label="Pencarian" aria-describedby="search_input" placeholder="<?php echo esc_attr_x( 'Pencarian Artikel', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
                  <button class="input-group-text" id="search_input" style="background-color: var(--primary-s);"><i class="fas fa-search" style="color: var(--primary)"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="section-content py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <?php 

                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $wpb_all_query_a = new WP_Query(
                        array(
                            'post_type'=>'post',
                            'post_status'=>'publish',
                            'posts_per_page'=> 8,
                            'paged' => $paged,
                        )
                    );
                ?>
                 


                <?php if ( $wpb_all_query_a->have_posts() ) : ?>
                <div class="row"> 

                    <?php while ( $wpb_all_query_a->have_posts() ) : $wpb_all_query_a->the_post(); ?>
                        <div class="col-md-6">
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
                                            <i class="far fa-calendar"></i> <?php the_date();?> &bull;
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

                            <?php 
                                echo paginate_links( array(
                                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                    'total'        => $wpb_all_query_a->max_num_pages,
                                    'current'      => max( 1, get_query_var( 'paged' ) ),
                                    'format'       => '?paged=%#%',
                                    'show_all'     => false,
                                    'type'         => 'plain',
                                    'end_size'     => 2,
                                    'mid_size'     => 1,
                                    'prev_next'    => true,
                                    'prev_text'    => sprintf( '<i></i> %1$s', __( '&laquo;', 'text-domain' ) ),
                                    'next_text'    => sprintf( '%1$s <i></i>', __( '&raquo;', 'text-domain' ) ),
                                    'add_args'     => false,
                                    'add_fragment' => '',
                                ) );
                            ?>

                            </ul>
                        </nav>
                    </div>

                </div>
                 
                    <?php wp_reset_postdata(); ?>
                 
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
               
            </div>
            <div class="col-lg-4">
                <?php include get_theme_file_path( '/partials/sidebar.php' ); ?>
            </div>
        </div>
    </div>    
</section>
<?php get_footer(); ?>