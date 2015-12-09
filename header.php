<?php 
	$blog_url=get_bloginfo('url');
	$blog_name=get_bloginfo('name');
	$blog_style_url=get_bloginfo('stylesheet_directory');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
	<title><?php wp_title(''); ?> | <?php echo $blog_name;?></title>
	<link type="text/css" rel="stylesheet" href="<?php echo $blog_style_url; ?>/style.css" media="all" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="page_wrap">
				<div class="header">
					<div class="logo"><a href="http://localhost:8080/wordpress/"><img src="<?php echo of_get_option( 'logo_uploader' ); ?>" /></a></div>
					<div class="top_menu">
						<div class="" id="romb_menu1"><a id="about_url" href="http://localhost:8080/wordpress/about/">О фильтрум</a></div>
						<div class="" id="romb_menu2"><a id="faq_url" href="http://localhost:8080/wordpress/faq/">Ответы на вопросы</a></div>
					</div>
					<div class="lang">
						<div id="circle_lang"><a class="active" href="">RU</a></div>
						<div id="circle_lang"><a id="" href="">EN</a></div>
						<div id="circle_lang"><a id="" href="">KZ</a></div>
						<div id="circle_lang"><a id="" href="">UZ</a></div>
					</div>
				</div> <!-- END HEADER -->
				<div class="clear"></div>