<?php 
	$blog_url=get_bloginfo('url');
	$blog_name=get_bloginfo('name');
	$blog_style_url=get_bloginfo('stylesheet_directory');
?>
			<div class="clear"></div>
            <div class="footer">
                <div class="adress">
					<p><?php echo of_get_option( 'footer_text' ); ?></p>
                </div>
                <div class="warning">
					<p><?php echo of_get_option( 'warning_text' ); ?></p>
					<img src="<?php echo $blog_style_url; ?>/img/glaz.png" 
						onmouseover="this.src='<?php echo $blog_style_url; ?>/img/glaz_hov.png'"
						onmouseout="this.src='<?php echo $blog_style_url; ?>/img/glaz.png'" />
                </div>
            </div> <!-- END FOOTER -->
        </div> <!-- END CONTAINER -->
	</div>  <!-- END WRAPPER -->
    <script type="text/javascript" src="<?php echo $blog_style_url; ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $blog_style_url; ?>/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo $blog_style_url; ?>/js/site.js"></script>
</body>
</html>