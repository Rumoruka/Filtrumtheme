<?php 
	$blog_url=get_bloginfo('url');
	$blog_name=get_bloginfo('name');
	$blog_style_url=get_bloginfo('stylesheet_directory');
?>
<?php get_header(); ?>

				<div class="lightup1"></div>
				<div class="lightup2"></div>
				<div class="filtrum_intro">
					<div class="box"><img src="<?php echo of_get_option( 'box_uploader' ); ?>" /></div>
					<div class="filtrum_info">
						<div class="filtrum_text">
							<p><span>Фильтрум</span> – <?php echo of_get_option( 'index_text1', 'no entry' ); ?></p><p><?php echo of_get_option( 'index_text2', 'no entry' ); ?></p>
						</div>
						<div class="filtrum_instruction"><img src="<?php echo $blog_style_url; ?>/img/pdf.png" /><a href="<?php echo of_get_option( 'instruction_href' ); ?>"><?php echo of_get_option( 'instruction_text' ); ?></a></div>
					</div>
				</div> <!-- END FILTRUM INTRO -->
			</div> <!-- END HEADER_WRAP -->
			<div class="clear"></div>
			<div class="devide">
                <a href="">Узнайте как фильтрум может помочь</a>
            </div>
			<div class="how_help">
				<div class="sick_type">
					<a href=""><img src="<?php echo $blog_style_url; ?>/img/toshnota.png" /><p>От тошноты и рвоты</p></a>
				</div>
				<div class="sick_type">
					<a href=""><img src="<?php echo $blog_style_url; ?>/img/diarea.png" /><p>От диареи и поноса</p></a>
				</div>
			</div> <!-- END HOW_HELP -->
			<div class="devide">
                <div class="chem"><p><?php echo of_get_option( 'carousel_label' ); ?></p></div>
                <div id="question_mark"><p>?</p></div>
            </div>
			<div class="carousel_wrap">
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
            </div> 
			<div class="devide" id="devide3">
                <p><?php echo of_get_option( 'video_' ); ?></p>
            </div>
			<div class="filtrum_video">
				<div class="video_wrap">
					<div class="video">
						<iframe src="<?php echo of_get_option( 'video_href', 'no entry' ); ?>" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="video_about">
						<div class="video_name">
							<h2><?php echo of_get_option( 'video_label', 'no entry' ); ?><h2>
						</div>
						<div class="video_text">
							<p><?php echo of_get_option( 'video_text', 'no entry' ); ?></p>
						</div>
					</div>
				</div>
            </div> <!-- END FILTRUM VIDEO -->
			
<?php get_footer(); ?>