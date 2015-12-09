<?php 
/*
Template Name: Шаблон страницы "О фильтрум"
*/
	$blog_url=get_bloginfo('url');
	$blog_name=get_bloginfo('name');
	$blog_style_url=get_bloginfo('stylesheet_directory');
?>
<?php get_header(); ?>

				<div class="about_header">
					<h1><?php echo of_get_option( 'video_' ); ?><h1>
				</div>
				<div class="lightup3"></div>
				<div class="lightup4"></div>
				<div class="about_wrap">
					<div class="filtrum_intro">
					<div class="box"><img src="<?php echo of_get_option( 'box_uploader' ); ?>" /></div>
					<div class="about_text">
						<h2><?php echo of_get_option( 'about_n' ); ?>&nbsp;&mdash;</h2>
						<p><?php echo of_get_option( 'about_text1', 'no entry' ); ?></p>
						<p><?php echo of_get_option( 'about_text2', 'no entry' ); ?></p>
					</div>
				</div>
			</div> <!-- END ABOUT_WRAP -->
			<div class="devide">
                <div class="chem"><p><?php echo of_get_option( 'about_label1' ); ?></p></div>
				<div id="question_mark"><p>?</p></div>
            </div>
			<div class="filtrum_ugol">
				<div class="filtrum_ugol_about">
					<div class="filtrum_about_item">
						<h3><?php echo of_get_option( 'description_label1' ); ?></h3>
						<p><?php echo of_get_option( 'poc_text1' ); ?></p>
						<p><?php echo of_get_option( 'poc_text2' ); ?></p>
					</div>
					<div class="filtrum_about_item">
						<h3><?php echo of_get_option( 'description_label2' ); ?></h3>
						<p><?php echo of_get_option( 'prep_text1' ); ?></p>
						<p><?php echo of_get_option( 'prep_text2' ); ?></p>
						<p><?php echo of_get_option( 'prep_text3' ); ?></p>
					</div>
					<div class="filtrum_about_item">
						<h3><?php echo of_get_option( 'description_label3' ); ?></h3>
						<p><?php echo of_get_option( 'spec_text1' ); ?></p>
						<p><?php echo of_get_option( 'spec_text2' ); ?></p>
					</div>
				</div>
				<div class="clear"></div>
				<div class="filtrum_ugol_text">
					<p><?php echo of_get_option( 'table_text' ); ?></p>
				</div>
			</div> <!-- END FILTRUM_UGOL -->
			<div class="table">
				<table 	cellspacing="0">
					<tr>
						<th>Причины/Лечение</th>
						<th>Антибиотики</th>
						<th>Лоперамид</th>
						<th>Фильтрум&reg;</th>
					</tr>
					<tr>
						<td>Кишечная инфекция, вызванная бактериями</td>
						<td>+</td>
						<td rowspan="4" id="rowsan">Может привести 
							к развитию 
							осложнений. 
							Возможно применение 
							только в качестве 
							вспомогательного 
							средства под 
							контролем врача.
						</td>
						<td>+</td>
					</tr>
					<tr>
						<td>Ротавирусная инфекция</td>
						<td>не эффективны</td>
						<td>+</td>
					</tr>
					<tr>
						<td>Пищевая токсикоинфекция</td>
						<td>не эффективны</td>
						<td>+</td>
					</tr>
				</table>
			</div> <!-- END TABLE -->
			<div class="devide">
                <div class="chem"><p><?php echo of_get_option( 'about_label2' ); ?></p></div>
            </div>
			<div class="research">
				<div class="results_text">
					<p><?php echo of_get_option( 'compare_text1' ); ?></p>
					<div class="results_text2">
						<p><?php echo of_get_option( 'compare_text2' ); ?></p>
						<p><?php echo of_get_option( 'compare_text3' ); ?></p>
					</div>
				</div> <!-- END RESULTS_TEXT -->
				<div class="results">
					<div class="results_left">
						<h2><?php echo of_get_option( 'prep_name1' ); ?></h2>
						<div class="result_item">
							<h2><?php echo of_get_option( 'res_name1' ); ?></h2>
							<p><?php echo of_get_option( 'res_text1' ); ?></p>
							<div class="result_img">
								<img src="<?php echo of_get_option( 'res_uploader1' ); ?>">
							</div>
						</div>
						<div class="result_item">
							<h2><?php echo of_get_option( 'res_name2' ); ?></h2>
							<p><?php echo of_get_option( 'res_text2' ); ?></p>
							<div class="result_img">
								<img src="<?php echo of_get_option( 'res_uploader2' ); ?>">
							</div>
						</div>
						<div class="result_item" id="vivody_u">
							<h3>Выводы</h3>
							<p><?php echo of_get_option( 'result_text1' ); ?></p>
						</div>
					</div> <!-- END RESULTS_LEFT -->
					<div class="results_right">
					<h2><?php echo of_get_option( 'prep_name2' ); ?>Фильтрум</h2>
						<div class="result_item">
							<h2><?php echo of_get_option( 'res_name3' ); ?></h2>
							<p><?php echo of_get_option( 'res_text3' ); ?></p>
							<div class="result_img">
								<img src="<?php echo of_get_option( 'res_uploader3' ); ?>">
							</div>
						</div>
						<div class="result_item">
							<h2><?php echo of_get_option( 'res_name4' ); ?></h2>
							<p><?php echo of_get_option( 'res_text4' ); ?></p>
							<div class="result_img">
								<img src="<?php echo of_get_option( 'res_uploader4' ); ?>">
							</div>
						</div>
						<div class="result_item" id="vivody_f">
							<h3>Выводы</h3>
							<p><?php echo of_get_option( 'result_text2' ); ?></p>
						</div>
					</div> <!-- END RESULTS_RIGHT -->
				</div> <!-- END RESULTS -->
			</div> <!-- END RESEARCH -->
			<div class="devide">
                <div class="chem"><p><?php echo of_get_option( 'about_label3' ); ?></p></div>
				<div id="question_mark"><p>?</p></div>
            </div>	
			<div class="filtrum_vred">
				<div class="vred_text">
					<p><?php echo of_get_option( 'vred_text1' ); ?></p>
					<p><?php echo of_get_option( 'vred_text2' ); ?></p>
				</div>
				<div class="filtrum_instruction" id="about_inst"><img src="<?php echo $blog_style_url; ?>/img/pdf.png" /><a href="<?php echo of_get_option( 'instruction_href' ); ?>"><?php echo of_get_option( 'instruction_text' ); ?></a></div>
			</div>
			
<?php get_footer(); ?>