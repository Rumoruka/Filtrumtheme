<?php

/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
require( 'wptuts-editor-buttons/wptuts.php' );
// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>

<?php
}
// Добавляем кнопки в текстовый html-редактор
function add_sheensay_quicktags() {
        //Проверка, определен ли в wordpress скрипт quicktags
    if (wp_script_is('quicktags')) :
?>
    <script type="text/javascript">
        QTags.addButton( 'sheens_p', 'p', '<p>', '</p>', 'p', 'Параграф', 1 );
         
        QTags.addButton( 'sheens_h2', 'h2', '<h2>', '</h2>', 'h2', 'Заголовок 2 уровня', 2 );
        QTags.addButton( 'sheens_h3', 'h3', '<h3>', '</h3>', 'h3', 'Заголовок 3 уровня', 2 );
        QTags.addButton( 'sheens_h4', 'h4', '<h4>', '</h4>', 'h4', 'Заголовок 4 уровня', 2 );
    </script>
<?php endif;
}
add_action( 'admin_print_footer_scripts', 'add_sheensay_quicktags' );

function true_include_myuploadscript() {

	wp_enqueue_script('jquery');
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
	
 	wp_enqueue_script( 'myuploadscript', get_stylesheet_directory_uri() . '/js/admin.js', array('jquery'), null, false );
}
 
add_action( 'admin_enqueue_scripts', 'true_include_myuploadscript' );

function true_image_uploader_field( $name, $value = '', $w = 210, $h = 210) {
	$default = get_stylesheet_directory_uri() . '/img/no-image.png';
	if( $value ) {
		$image_attributes = wp_get_attachment_image_src( $value, array($w, $h) );
		$src = $image_attributes[0];
	} else {
		$src = $default;
	}
	echo '
	<div>
		<img data-src="' . $default . '" src="' . $src . '" width="' . $w . 'px" height="' . $h . 'px" />
		<div>
			<input type="hidden" name="' . $name . '" id="' . $name . '" value="' . $value . '" />
			<button type="submit" class="upload_image_button button">Загрузить</button>
			<button type="submit" class="remove_image_button button">&times;</button>
		</div>
	</div>
	';
}

//Create post type for intoxications

function add_intoxication_posttype() {
	
	$labels = array(
		'name'                => _x( 'Интоксикации', 'Post Type General Name', 'intoxication' ),
            'singular_name'       => _x( 'Вид интоксикации', 'Post Type Singular Name', 'intoxication' ),
            'menu_name'           => __( 'Интоксикация', 'intoxication' ),
            'parent_item_colon'   => __( 'Родительский:', 'intoxication' ),
            'all_items'           => __( 'Все записи', 'intoxication' ),
            'view_item'           => __( 'Просмотреть', 'intoxication' ),
            'add_new_item'        => __( 'Добавить новую запись в Интоксикации', 'intoxication' ),
            'add_new'             => __( 'Добавить новую', 'intoxication' ),
            'edit_item'           => __( 'Редактировать запись', 'intoxication' ),
            'update_item'         => __( 'Обновить запись', 'intoxication' ),
            'search_items'        => __( 'Найти запись', 'intoxication' ),
            'not_found'           => __( 'Не найдено', 'intoxication' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'intoxication' ),
	
	);
	
	$args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', ),
            'taxonomies'          => array( 'intoxication_type' ),
            'public'              => true,
            'menu_position'       => 5,
           // 'menu_icon'           => 'dashicons-book',
        );
        register_post_type( 'intoxication', $args );
 
    }
    add_action( 'init', 'add_intoxication_posttype');
	
function intoxication_tax() {
 
        $labels = array(
            'name'                       => _x( 'Категории', 'Taxonomy General Name', 'intoxication' ),
            'singular_name'              => _x( 'Категория', 'Taxonomy Singular Name', 'intoxication' ),
            'menu_name'                  => __( 'Категории', 'intoxication' ),
            'all_items'                  => __( 'Категории', 'intoxication' ),
            'parent_item'                => __( 'Родительская категория', 'intoxication' ),
            'parent_item_colon'          => __( 'Родительская категория', 'intoxication' ),
            'new_item_name'              => __( 'Новая категория', 'intoxication' ),
            'add_new_item'               => __( 'Добавить новую категорию', 'intoxication' ),
            'edit_item'                  => __( 'Редактировать категорию', 'intoxication' ),
            'update_item'                => __( 'Обновить категорию', 'intoxication' ),
            'search_items'               => __( 'Найти', 'intoxication' ),
            'add_or_remove_items'        => __( 'Добавить или удалить категорию', 'intoxication' ),
            'choose_from_most_used'      => __( 'Поиск среди популярных', 'intoxication' ),
            'not_found'                  => __( 'Не найдено', 'intoxication' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
        );
        register_taxonomy( 'intoxication_tax', array( 'intoxication' ), $args );
 
    }
 
    add_action( 'init', 'intoxication_tax', 0 ); // инициализируем


//Add meta box for intoxication posts

function intoxication_metabox() {
	
	add_meta_box(
		'intox_img',
		'Картинка к записи',
		'true_print_box_u',
		'intoxication',
		'normal',
		'high'
	);
	
	add_meta_box(
		'intox_metabox', //id
		' ', //title
		'show_intox_metabox', //callback
		'intoxication',
		'normal',
		'high'
	);
}

add_action('add_meta_boxes', 'intoxication_metabox');

function true_print_box_u($post) {
	if( function_exists( 'true_image_uploader_field' ) ) {
		true_image_uploader_field( 'uploader_custom', get_post_meta($post->ID, 'uploader_custom',true) );
	}
}

function true_save_box_data_u( $post_id ) {
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return $post_id;
	update_post_meta( $post_id, 'uploader_custom', $_POST['uploader_custom']);
	return $post_id;
}
 
add_action('save_post', 'true_save_box_data_u');

//Add special fields for intoxication posts

$meta_fields = array(
	array(
		'label' => 'Название в карусели',
		'desc' => 'Как будет отображатся имя записи в слайдере',
		'id' => 'carousel_name',
		'type' => 'text'
	),
	array(
		'label' => 'Заголовок после описания',
		'desc' => 'Особенности отравления чем?',
		'id' => 'spec_intox_label',
		'type' => 'text'
	),
);

//Function for wp_editor fileds

//Function for meta box displaing
function show_intox_metabox(){
	global $meta_fields; 
	global $post;
	
	echo '<input type="hidden" 
	name="custom_meta_box_nonce" 
	value="'.wp_create_nonce(basename(__FILE__)).'"/>';
	
	//Display table with fields through cycle
	echo '<table class="form-table">';
	foreach ($meta_fields as $field) {
		//Get the field content if it exists
		$meta = get_post_meta($post->ID, $field['id'], true);
		
		echo '<tr> 
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th> 
                <td>';  
			switch($field['type']) {
				// Text field
				case 'text':  
					echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" /> 
						<br /><span class="description">'.$field['desc'].'</span>';  
				break;
			}
		echo '</td></tr>';	
	}
}

//Function for saving the meta fileds entries


function save_my_meta_fields($post_id) {  
    global $meta_fields;  
    
	// Check our code 
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))   
        return $post_id;  
    // Check auto save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
    // Chek access rights 
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
 
    // If all ok:
    foreach ($meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true); // Get old etries (if they exist), for checking
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) { 
            update_post_meta($post_id, $field['id'], $new); // Update entries if they are new
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old); // if no entries, delete meta.
        }  
    } // end foreach  
}  
add_action('save_post', 'save_my_meta_fields'); // Run saving function

define('SPEC_META_BOX_ID', 'spec-editor');
define('SPEC_EDITOR_ID', 'speceditor'); //Important for CSS that this is different
define('SPEC_META_KEY', 'extra-content-2');
add_action('admin_init', 'spec_register_meta_box');
function spec_register_meta_box(){
        add_meta_box(SPEC_META_BOX_ID, __('Особенности отравления', 'spec'), 'spec_render_meta_box', 'intoxication','normal','high');
}
function spec_render_meta_box(){
	
        global $post;
        
        $meta_box_id = SPEC_META_BOX_ID;
        $editor_id = SPEC_EDITOR_ID;
        
        //Add CSS & jQuery goodness to make this work like the original SPEC
        echo "
                <style type='text/css'>
                        #$meta_box_id #edButtonHTML, #$meta_box_id #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
                        #$editor_id{width:100%;}
                        #$meta_box_id #editorcontainer{background:#fff !important;}
                        #$meta_box_id #$editor_id_fullscreen{display:none;}
                </style>
            
                <script type='text/javascript'>
                        jQuery(function($){
                                $('#$meta_box_id #editor-toolbar > a').click(function(){
                                        $('#$meta_box_id #editor-toolbar > a').removeClass('active');
                                        $(this).addClass('active');
                                });
                                
                                if($('#$meta_box_id #edButtonPreview').hasClass('active')){
                                        $('#$meta_box_id #ed_toolbar').hide();
                                }
                                
                                $('#$meta_box_id #edButtonPreview').click(function(){
                                        $('#$meta_box_id #ed_toolbar').hide();
                                });
                                
                                $('#$meta_box_id #edButtonHTML').click(function(){
                                        $('#$meta_box_id #ed_toolbar').show();
                                });
				//Tell the uploader to insert content into the correct SPEC editor
				$('#media-buttons a').bind('click', function(){
					var customEditor = $(this).parents('#$meta_box_id');
					if(customEditor.length > 0){
						edCanvas = document.getElementById('$editor_id');
					}
					else{
						edCanvas = document.getElementById('content');
					}
				});
                        });
                </script>
        ";
        
        //Create The Editor
        $content = get_post_meta($post->ID, SPEC_META_KEY, true);
        the_editor($content, $editor_id);
        
        //Clear The Room!
        echo "<div style='clear:both; display:block;'></div>";
}
add_action('save_post', 'spec_save_meta');
function spec_save_meta(){
	
        $editor_id = SPEC_EDITOR_ID;
        $meta_key = SPEC_META_KEY;
	
        if(isset($_REQUEST[$editor_id]))
                update_post_meta($_REQUEST['post_ID'], SPEC_META_KEY, $_REQUEST[$editor_id]);
                
}

define('CURE_META_BOX_ID', 'cure-editor');
define('CURE_EDITOR_ID', 'cureeditor'); //Important for CSS that this is different
define('CURE_META_KEY', 'extra-content-1');
add_action('admin_init', 'cure_register_meta_box');
function cure_register_meta_box(){
        add_meta_box(CURE_META_BOX_ID, __('Лечение', 'cure'), 'cure_render_meta_box', 'intoxication','normal','high');
}
function cure_render_meta_box(){
	
        global $post;
        
        $meta_box_id = CURE_META_BOX_ID;
        $editor_id = CURE_EDITOR_ID;
        
        //Add CSS & jQuery goodness to make this work like the original
        echo "
                <style type='text/css'>
                        #$meta_box_id #edButtonHTML, #$meta_box_id #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
                        #$editor_id{width:100%;}
                        #$meta_box_id #editorcontainer{background:#fff !important;}
                        #$meta_box_id #$editor_id_fullscreen{display:none;}
                </style>
            
                <script type='text/javascript'>
                        jQuery(function($){
                                $('#$meta_box_id #editor-toolbar > a').click(function(){
                                        $('#$meta_box_id #editor-toolbar > a').removeClass('active');
                                        $(this).addClass('active');
                                });
                                
                                if($('#$meta_box_id #edButtonPreview').hasClass('active')){
                                        $('#$meta_box_id #ed_toolbar').hide();
                                }
                                
                                $('#$meta_box_id #edButtonPreview').click(function(){
                                        $('#$meta_box_id #ed_toolbar').hide();
                                });
                                
                                $('#$meta_box_id #edButtonHTML').click(function(){
                                        $('#$meta_box_id #ed_toolbar').show();
                                });
				//Tell the uploader to insert content into the correct CURE editor
				$('#media-buttons a').bind('click', function(){
					var customEditor = $(this).parents('#$meta_box_id');
					if(customEditor.length > 0){
						edCanvas = document.getElementById('$editor_id');
					}
					else{
						edCanvas = document.getElementById('content');
					}
				});
                        });
                </script>
        ";
        
        //Create The Editor
        $content = get_post_meta($post->ID, CURE_META_KEY, true);
        the_editor($content, $editor_id);
        
        //Clear The Room!
        echo "<div style='clear:both; display:block;'></div>";
}
add_action('save_post', 'cure_save_meta');

function cure_save_meta(){
	
        $editor_id = CURE_EDITOR_ID;
        $meta_key = CURE_META_KEY;
	
        if(isset($_REQUEST[$editor_id]))
                update_post_meta($_REQUEST['post_ID'], CURE_META_KEY, $_REQUEST[$editor_id]);
                
}


