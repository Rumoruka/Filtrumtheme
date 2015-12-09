<?php get_header(); ?>
    <?php       /* $args = array(
                   'post_type' => 'intoxication',
                   'publish' => true,
                   'paged' => get_query_var('paged'),
               );
            
            query_posts($args); */
			?>
<?php 
	$blog_url=get_bloginfo('url');
	$blog_name=get_bloginfo('name');
	$blog_style_url=get_bloginfo('stylesheet_directory');
?>

<?php get_header(); ?>	
<?php 
	if ( have_posts() ) : 
	while ( have_posts() ) : the_post();
?>	
				<div class="intoxic_info">
					<div class="intoxic_name">
						<h1><?php the_title() ?></h1>
					</div>
					<div class="clear"></div>
					<div class="intoxic_wrap">
						<div class="intoxic_img">
								<?php
									$attachment_id = get_post_meta($post->ID, 'uploader_custom', true);
									$attributes = wp_get_attachment_image_src( $attachment_id, array(210, 210) );
									 
									if (!empty($attachment_id)) {
										 echo '<img src="' . $attributes[0] . '" />';
									} else {
										 echo 'Нету прикрепленного файла.';
									}
								?>
						</div>
						<div class="intoxic_text">
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div> <!-- END INTOXIC_INFO -->
				<div class="clear"></div>
				<div class="devide" id="toxdev1">
					<p><?php echo get_post_meta($post->ID, 'spec_intox_label', true); ?></p>
				</div>
				<div class="intoxic_about">
					<?php echo get_post_meta($post->ID, SPEC_META_KEY, true); ?>
				</div> <!-- END INTOXIC_ABOUT -->
				<div class="devide" id="toxdev2">
					<p>Лечение</p>
				</div>
				<div class="cure">
					<?php echo get_post_meta($post->ID, CURE_META_KEY, true); ?>
				</div> <!-- END CURE -->
				<?php 
					endwhile; 
					endif;
				?>
				<div class="devide" id="toxdev3">
					<p>Другие случаи отравления</p>
				</div>	
				<div class="carousel">
					<div class="carousel_content">
						<?php 
							$args = array(
							   'post_type' => 'intoxication',
							   'publish' => true,
							   'paged' => get_query_var('paged'),
							);
						
							query_posts($args);
							while ( have_posts() ) : the_post();
						?>
						<div class="carousel-element">
							<a href="<?php the_permalink(); ?>">
								<?php
									$attachment_id = get_post_meta($post->ID, 'uploader_custom', true);
									$attributes = wp_get_attachment_image_src( $attachment_id, array(210, 210) );
									 
									if (!empty($attachment_id)) {
										 echo '<img src="' . $attributes[0] . '" />';
									} else {
										 echo 'Нету прикрепленного файла.';
									}
								?>
								<p><?php echo get_post_meta($post->ID, 'carousel_name', true); ?></p>
							</a>
						</div>
						<?php 
							endwhile; 
						?>
					</div>
					<div class="carousel_nav">
						<!--<div class="carousel-arrow-left"></div>
						<div class="carousel-arrow-right"></div>-->
					</div>
				</div> <!-- END CAROUSEL -->
			</div>	<!-- END PAGE_WRAP -->
			
<?php get_footer(); ?>