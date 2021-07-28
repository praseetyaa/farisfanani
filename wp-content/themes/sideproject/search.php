<?php
/*
 Template Name: Search Page
 */
get_header(); ?>


<section class="section-header section-blog py-5">
    <div class="container text-center py-0 py-lg-5"> 
        <h1 class="mb-4">Pencarian</h1>
        <h5 class="mb-3">Menapilkan Pencarian : <?php echo get_search_query() ?></h5>
        <form method="get" action="<?php echo home_url(); ?>" role="search">
            <div class="input-group">
              <input type="text" class="form-control" aria-label="Pencarian" aria-describedby="search_input" placeholder="<?php echo esc_attr_x( 'Pencarian Artikel', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
              <button class="input-group-text" id="search_input" style="background-color: var(--primary-s);"><i class="far fa-search" style="color: var(--primary)"></i></button>
            </div>
        </form>
    </div>
</section>
<section class="section-content bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <?php
                    global $query_string;
                    $query_args = explode("&", $query_string);
                    $search_query = array();
                    $search_query_2 = array(
                            'post_type'=>'post',
                            'post_status'=>'publish',
                            'posts_per_page'=> 8,
                            'paged' => $paged,
                        );

                    foreach($query_args as $key => $string) {
                      $query_split = explode("=", $string);
                      $search_query[$query_split[0]] = urldecode($query_split[1]);
                    } // foreach
                    
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $the_query = new WP_Query($search_query + $search_query_2);
                    if ( $the_query->have_posts() ) : 

                    ?>
                    <!-- the loop -->

                    <div class="row">    
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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

                                <?php echo paginate_links(); ?>

                                </ul>
                            </nav>
                        </div>                    
                    </div>
                    <!-- end of the loop -->

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