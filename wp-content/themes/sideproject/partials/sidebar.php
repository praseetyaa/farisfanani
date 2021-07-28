<div class="sticky-top" style="top: 5rem">
	<div class="login_author text-center mb-3 rounded" style="background-color: var(--primary-s);">
		<a class="text-decoration-none author-login" href="<?php echo home_url() ?>/wp-admin/">
			<div class="p-4">
				<p class="mb-0 h1"><i class="far fa-user-astronaut"></i></p>
				<?php $current_user = wp_get_current_user();
				if ($current_user->display_name != null) { ?>
					<p class="mb-0">Selamat Datang</p>
					<h5><?php echo $current_user->display_name; ?></h5>
				<?php } else { ?>
						<h5>Author?<br>Login Disini</h5>
				<?php } ?> 
			</div>
		</a>
	</div>

	<div class="kategori">
		<div class="card-header bg-transparent mx-3 px-0">
			<h5>Kategori</h5>
		</div>
		<div class="card-body">
			<div class="">
			<?php
			$categories = get_categories();
			foreach($categories as $category) {
					echo '<div class="col pb-2"><a class="text-decoration-none link-dark fs-6" href="' . get_category_link($category->term_id) . '"><i class="fa fa-chevron-right me-2"></i>' . ucfirst($category->name) . '</a></div>';
				}
			?>
			</div>
		</div>
	</div>

	<div class="artikel_terbarus">
		<div class="card-header bg-transparent mx-3 px-0">
		    <h5>Artikel Terbaru</h5>
		</div>
		<div class="card-body">

			<?php
			// limit post 
            $args = array( 
                'post_type' => 'post', 
                'posts_per_page' => 4,
                'post_status'=>'publish',
            );
			$query = new WP_Query( $args ); //query the categories

			if ($query->have_posts()) {
			while ($query->have_posts()) {
			$query->the_post(); ?>

			<div class="d-flex my-2">
				<a class="text-decoration-none text-body" href="<?php the_permalink();?>">
					<!-- no blank thumbnail -->
					<?php if ( has_post_thumbnail() ) { ?>
					<img class="flex-shrink-0 me-2 rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Generic" placeholder="image"
					style="background: url('<?php the_post_thumbnail_url() ?>'); width: 70px; height: 70px; background-position: center; background-repeat: no-repeat; background-size: cover;">
					<?php } else { ?>
					<img class="flex-shrink-0 me-2 rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Generic" placeholder="image"
					style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/placeholder_600x400.svg'); width: 70px; height: 70px;; background-position: center; background-repeat: no-repeat; background-size: cover;">
					<?php } ?>
					<div>
						<p class="mb-0">
						  <?php
						    $thetitle = $post->post_title;
						    $getlength = strlen($thetitle);
						    $thelength = 30;
						    echo substr($thetitle, 0, $thelength);
						    if ($getlength > $thelength) echo "...";
						  ?>
						</p>
						<small class="text-muted mb-3">
							<i class="far fa-user"></i> 
							<a class="text-decoration-none text-muted"><?php the_author_posts_link(); ?></a><br>
							<i class="far fa-calendar"></i> <?php the_date(); ?>
						</small>
					</div>
				</a>
		  	</div>

	        <?php } ?>
            <?php }  else {
	            // not found article ?>
	            <div class="post-preview">
	                <h5 class="post-title">Article Not Found!!!</h5>
	            </div>
	        <?php } ?>
		</div>
	</div>
</div>
<style>
	.author-login{color: var(--primary);}
	.author-login:hover i{animation: rotate45 .5s infinite;}
	@keyframes rotate45 {
		0%{transform: rotate(0deg);}
		50%{transform: rotate(45deg);}
		100%{transform: rotate(0deg);}
	}
</style>