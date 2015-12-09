<?php 
/*
Template Name: Шаблон страницы с ответами
*/
	$blog_url=get_bloginfo('url');
	$blog_name=get_bloginfo('name');
	$blog_style_url=get_bloginfo('stylesheet_directory');
?>
<?php get_header(); ?>

				<div class="faq_header">
					<div class="faq_label">
						<h1>Ответы на важные вопросы</h1>
					</div>
					<div class="ask_href">
						<img src="<?php echo $blog_style_url; ?>/img/ask.png" /><a href="#askq">Задать свой вопрос</a>
					</div>
				</div> <!-- END FAQ_HEADER -->
<!-- --------------------- START QUESTIONS ---------------------------- -->
				<?php 
					$args = array(
						'post_type' => 'post',
						'publish' => true,
					);
					
					query_posts($args);
					while ( have_posts() ) : the_post();
				?>
				<div class="fa_question">
					<div id="question_mark2"><p>?</p></div>
					<div class="question"><p><?php the_title(); ?></p></div>
				</div>
				<div class="answer">
					<?php the_content(); ?>
				</div>
				<?php endwhile; ?>
<!-- --------------------- END QUESTIONS ---------------------------- -->
				<div class="ask_question" id="askq">
					<p>Задайте свой вопрос</p>
				</div>
				<div class="ask_form">
					<form>
					<input type="text" id="name" placeholder="Имя*"/>
					<input type="text" id="email" placeholder="E-mail*"/>
					<textarea id="asking" placeholder="Сообщение*"></textarea>
					<input type="submit" value="Отправить" id="submit"/>
					<div id="submit_romb"></div>
				</div> <!-- END ASK -->
			</div>	<!-- END PAGE_WRAP -->
			
<?php get_footer(); ?>