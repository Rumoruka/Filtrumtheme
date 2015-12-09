<?php 
/*
Template Name: intoxication Page
*/
	$blog_url=get_bloginfo('url');
	$blog_name=get_bloginfo('name');
	$blog_style_url=get_bloginfo('stylesheet_directory');
?>
<?php get_header(); ?>

				<div class="intoxic_info">
					<div class="intoxic_name">
						<h1><?php single_post_title() ?></h1>
					</div>
					<div class="clear"></div>
					<div class="intoxic_wrap">
						<div class="intoxic_img">
							<img src="<?php echo get_post_meta($post->ID, 'uploader_custom', true); ?>" />
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
					<div class="tox_text">
						<p>Отравление рыбой происходит из-за того, что в организм человека попадают вещества, 
						нарушающие функции и жизнедеятельность его органов.</p>
					</div>
					<div class="toxlist_label">
						<span>Сама рыба может «обзавестись» токсинами в следующих случаях:</span>
					</div>
					<div class="intoxic_list">
						<ul>
							<li>при хранении в ненадлежащих условиях. В этом случае в тканях рыбы начинается гниение, 
							в процессе которого образуются отравляющие вещества. При покупке свежей или замороженной 
							рыбы обязательно обратите внимание на ее внешний вид (смутить должно вздутое брюшко, 
							помутневшие глаза, вздернутый или высохший хвост, липкая тушка);</li>
							<li>в процессе консервирования, соления, копчения, когда могут не соблюдаться 
							санитарно-гигиенические требования и использоваться просроченные ингредиенты: 
							растительные или животные жиры, овощные соки или овощи;</li>
							<li>при обитании рыбы в загрязненных водоемах.<br />
							Препарат можно использовать в комплексе с другими лекарствами при условии 
							раздельного приема.</li>
						</ul>
					</div>
				</div> <!-- END INTOXIC_ABOUT -->
				<div class="devide" id="toxdev2">
					<p>Лечение</p>
				</div>
				<div class="cure">
					<p><?php echo get_post_meta($post->ID, 'intox_cure', true); ?></p>
				</div> <!-- END CURE -->
				<div class="devide" id="toxdev3">
					<p>Другие случаи отравления</p>
				</div>	
				<div class="carousel">
					<div class="carousel_content">
						<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/egg.png" /><p>Яйца</p></a></div>
							<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/grill.png" /><p>Мясные продукты</p></a></div>
							<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/milk.png" /><p>Молочные продукты</p></a></div>
							<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/burger.png" /><p>Фаст-фуд</p></a></div>
							<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/desert.png" /><p>Десерты</p></a></div>
							<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/fish.png" /><p>Морепродукты 2</p></a></div>
							<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/egg.png" /><p>Яйца 2</p></a></div>
							<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/grill.png" /><p>Мясные продукты 2</p></a></div>
							<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/milk.png" /><p>Молочные продукты 2</p></a></div>
							<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/burger.png" /><p>Фаст-фуд 2</p></a></div>
							<div class="carousel-element"><a href=""><img src="<?php echo $blog_style_url; ?>/img/desert.png" /><p>Десерты 2</p></a></div>
					</div>
					<div class="carousel_nav">
						<!--<div class="carousel-arrow-left"></div>
						<div class="carousel-arrow-right"></div>-->
					</div>
				</div> <!-- END CAROUSEL -->
			</div>	<!-- END PAGE_WRAP -->
			
<?php get_footer(); ?>