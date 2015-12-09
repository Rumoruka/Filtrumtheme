<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/img/';

	$options = array();
		
	$options[] = array(
		'name' => __( 'Главная страница', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Логотип сайта', 'theme-textdomain' ),
		'desc' => __( 'Загрузите сюда логотип.', 'theme-textdomain' ),
		'id' => 'logo_uploader',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( 'Описание', 'theme-textdomain' ),
		'desc' => __( 'Описание препарата на главной - первый абзац.', 'theme-textdomain' ),
		'id' => 'index_text1',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
		$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Второй абзац описания.', 'theme-textdomain' ),
		'id' => 'index_text2',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( 'Коробка препарата', 'theme-textdomain' ),
		'desc' => __( 'Загрузите картинку коробки.', 'theme-textdomain' ),
		'id' => 'box_uploader',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( 'Инструкция', 'theme-textdomain' ),
		'desc' => __( 'Название инструкции.', 'theme-textdomain' ),
		'id' => 'instruction_text',
		'std' => 'Инструкция',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Ссылка на инструкцию.', 'theme-textdomain' ),
		'id' => 'instruction_href',
		'std' => 'no enty',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Заголовок для карусели', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'carousel_label',
		'std' => 'Чем вы отравились',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Заголовок после карусели', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'video_',
		'std' => 'Новое поколение средств от отравления',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Видео', 'theme-textdomain' ),
		'desc' => __( 'Ссылка на видео.', 'theme-textdomain' ),
		'id' => 'video_href',
		'std' => 'https://www.youtube.com/embed/ASbO2Xs1kB0',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Заголовок к видео', 'theme-textdomain' ),
		'desc' => __( 'Заголовок к видео.', 'theme-textdomain' ),
		'id' => 'video_label',
		'std' => 'Что такое Фильтрум&reg; ?',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Описание к видео', 'theme-textdomain' ),
		'desc' => __( 'Описание к видео.', 'theme-textdomain' ),
		'id' => 'video_text',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( 'Футер', 'theme-textdomain' ),
		'desc' => __( 'Текст в футере.', 'theme-textdomain' ),
		'id' => 'footer_text',
		'std' => '© 2015 ПАО "Отисифарм", 123317, г. Москва, ул. Тестовская, д. 1',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Текст предупреждения в футере.', 'theme-textdomain' ),
		'id' => 'warning_text',
		'std' => 'ИМЕЮТСЯ ПРОТИВОПОКАЗАНИЯ. НЕОБХОДИМО ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ СПЕЦИАЛИСТА',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'О Фильтрум', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Заголовок страницы', 'theme-textdomain' ),
		'desc' => __( 'Заголовок вверху страницы "О Фильтрум".', 'theme-textdomain' ),
		'id' => 'about_label',
		'std' => 'Описание лекарства от кишечных инфекций Фильтрум&reg;',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Описание', 'theme-textdomain' ),
		'desc' => __( 'Название препарата".', 'theme-textdomain' ),
		'id' => 'about_n',
		'std' => 'Фильтрум&reg;',
		'type' => 'text'
	);
		
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Первый абзац описания.', 'theme-textdomain' ),
		'id' => 'about_text1',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Второй абззац.', 'theme-textdomain' ),
		'id' => 'about_text2',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
		
	$options[] = array(
		'name' => __( 'Заголовок 1', 'theme-textdomain' ),
		'desc' => __( 'Заголовок после описания.', 'theme-textdomain' ),
		'id' => 'about_label1',
		'std' => 'Почему Фильтрум&reg; лучше чем уголь',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Показания к применению', 'theme-textdomain' ),
		'desc' => __( 'Заголовок', 'theme-textdomain' ),
		'id' => 'description_label1',
		'std' => 'Показания к применению',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Текст первого абззаца.', 'theme-textdomain' ),
		'id' => 'poc_text1',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
		
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Текст второго абззаца.', 'theme-textdomain' ),
		'id' => 'poc_text2',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( 'Действующее вещество', 'theme-textdomain' ),
		'desc' => __( 'Заголовок.', 'theme-textdomain' ),
		'id' => 'description_label2',
		'std' => 'Действующее вещество',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Текст первого абззаца.', 'theme-textdomain' ),
		'id' => 'prep_text1',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Текст второго абззаца.', 'theme-textdomain' ),
		'id' => 'prep_text2',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Текст третьего абззаца.', 'theme-textdomain' ),
		'id' => 'prep_text3',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( 'Особенность препарата', 'theme-textdomain' ),
		'desc' => __( 'Заголовок.', 'theme-textdomain' ),
		'id' => 'description_label3',
		'std' => 'Что отличает Фильтрум&reg;?',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Текст первого абззаца.', 'theme-textdomain' ),
		'id' => 'spec_text1',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Текст второго абззаца.', 'theme-textdomain' ),
		'id' => 'spec_text2',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( 'Текст перед таблицей', 'theme-textdomain' ),
		'desc' => __( 'Текст перед таблицей.', 'theme-textdomain' ),
		'id' => 'table_text',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Заголовок 2', 'theme-textdomain' ),
		'desc' => __( 'Заголовок перед сравнением.', 'theme-textdomain' ),
		'id' => 'about_label2',
		'std' => 'Резльтаты исследований*',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Текст перед сравнением', 'theme-textdomain' ),
		'desc' => __( 'Текст перед сравнением.', 'theme-textdomain' ),
		'id' => 'compare_text1',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Текст звездочки.', 'theme-textdomain' ),
		'id' => 'compare_text2',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Автор.', 'theme-textdomain' ),
		'id' => 'compare_text3',
		'std' => 'Чикунова Б. З., Трубицына И. Е., Новиков П. Б. // Лечащий врач. 2008; 7: 86–7',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Название второго препарата.', 'theme-textdomain' ),
		'id' => 'prep_name1',
		'std' => 'Активированый уголь',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Название исследования.', 'theme-textdomain' ),
		'id' => 'res_name1',
		'std' => 'Гастрит',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Описание исследования.', 'theme-textdomain' ),
		'id' => 'res_text1',
		'std' => 'Воспаление слизистой желудка, увеличение х250',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Картинка исследования.', 'theme-textdomain' ),
		'id' => 'res_uploader1',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Название исследования.', 'theme-textdomain' ),
		'id' => 'res_name2',
		'std' => 'Еюнит',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Описание исследования.', 'theme-textdomain' ),
		'id' => 'res_text2',
		'std' => 'Воспаление слизистой тонкого кишечника, увеличение х120',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Картинка исследования.', 'theme-textdomain' ),
		'id' => 'res_uploader2',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Выводы.', 'theme-textdomain' ),
		'id' => 'result_text1',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Название второго препарата.', 'theme-textdomain' ),
		'id' => 'prep_name2',
		'std' => 'Фильтрум',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Название исследования.', 'theme-textdomain' ),
		'id' => 'res_name3',
		'std' => 'Желудок',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Описание исследования.', 'theme-textdomain' ),
		'id' => 'res_text3',
		'std' => 'Норма, увеличение х120',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Картинка исследования.', 'theme-textdomain' ),
		'id' => 'res_uploader3',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Название исследования.', 'theme-textdomain' ),
		'id' => 'res_name4',
		'std' => 'Тонкий кишечник',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Описание исследования.', 'theme-textdomain' ),
		'id' => 'res_text4',
		'std' => 'Норма, увеличение х250',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Картинка исследования.', 'theme-textdomain' ),
		'id' => 'res_uploader4',
		'type' => 'upload'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Выводы.', 'theme-textdomain' ),
		'id' => 'result_text2',
		'std' => 'Default Index Value',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( 'Заголовок 3', 'theme-textdomain' ),
		'desc' => __( 'Заголовок после исследований.', 'theme-textdomain' ),
		'id' => 'about_label3',
		'std' => 'Вреден ли Фильтрум&reg;',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Первый абзац.', 'theme-textdomain' ),
		'id' => 'vred_text1',
		'std' => 'No enttry',
		'type' => 'textarea'
	);
	
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'desc' => __( 'Второй абзац.', 'theme-textdomain' ),
		'id' => 'vred_text2',
		'std' => 'No enttry',
		'type' => 'textarea'
	);
	
	
	/*
	$options[] = array(
		'name' => __( 'Input Text Mini', 'theme-textdomain' ),
		'desc' => __( 'A mini text input field.', 'theme-textdomain' ),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Input Text', 'theme-textdomain' ),
		'desc' => __( 'A text input field.', 'theme-textdomain' ),
		'id' => 'example_text',
		'std' => 'Default Value',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Input with Placeholder', 'theme-textdomain' ),
		'desc' => __( 'A text input field with an HTML5 placeholder.', 'theme-textdomain' ),
		'id' => 'example_placeholder',
		'placeholder' => 'Placeholder',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Textarea', 'theme-textdomain' ),
		'desc' => __( 'Textarea description.', 'theme-textdomain' ),
		'id' => 'example_textarea',
		'std' => 'Default Text',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Input Select Small', 'theme-textdomain' ),
		'desc' => __( 'Small Select Box.', 'theme-textdomain' ),
		'id' => 'example_select',
		'std' => 'three',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $test_array
	);

	$options[] = array(
		'name' => __( 'Input Select Wide', 'theme-textdomain' ),
		'desc' => __( 'A wider select box.', 'theme-textdomain' ),
		'id' => 'example_select_wide',
		'std' => 'two',
		'type' => 'select',
		'options' => $test_array
	);

	if ( $options_categories ) {
		$options[] = array(
			'name' => __( 'Select a Category', 'theme-textdomain' ),
			'desc' => __( 'Passed an array of categories with cat_ID and cat_name', 'theme-textdomain' ),
			'id' => 'example_select_categories',
			'type' => 'select',
			'options' => $options_categories
		);
	}

	if ( $options_tags ) {
		$options[] = array(
			'name' => __( 'Select a Tag', 'options_check' ),
			'desc' => __( 'Passed an array of tags with term_id and term_name', 'options_check' ),
			'id' => 'example_select_tags',
			'type' => 'select',
			'options' => $options_tags
		);
	}

	$options[] = array(
		'name' => __( 'Select a Page', 'theme-textdomain' ),
		'desc' => __( 'Passed an pages with ID and post_title', 'theme-textdomain' ),
		'id' => 'example_select_pages',
		'type' => 'select',
		'options' => $options_pages
	);

	$options[] = array(
		'name' => __( 'Input Radio (one)', 'theme-textdomain' ),
		'desc' => __( 'Radio select with default options "one".', 'theme-textdomain' ),
		'id' => 'example_radio',
		'std' => 'one',
		'type' => 'radio',
		'options' => $test_array
	);

	$options[] = array(
		'name' => __( 'Example Info', 'theme-textdomain' ),
		'desc' => __( 'This is just some example information you can put in the panel.', 'theme-textdomain' ),
		'type' => 'info'
	);

	$options[] = array(
		'name' => __( 'Input Checkbox', 'theme-textdomain' ),
		'desc' => __( 'Example checkbox, defaults to true.', 'theme-textdomain' ),
		'id' => 'example_checkbox',
		'std' => '1',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Advanced Settings', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Check to Show a Hidden Text Input', 'theme-textdomain' ),
		'desc' => __( 'Click here and see what happens.', 'theme-textdomain' ),
		'id' => 'example_showhidden',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Hidden Text Input', 'theme-textdomain' ),
		'desc' => __( 'This option is hidden unless activated by a checkbox click.', 'theme-textdomain' ),
		'id' => 'example_text_hidden',
		'std' => 'Hello',
		'class' => 'hidden',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Uploader Test', 'theme-textdomain' ),
		'desc' => __( 'This creates a full size uploader that previews the image.', 'theme-textdomain' ),
		'id' => 'example_uploader',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => "Example Image Selector",
		'desc' => "Images for layout.",
		'id' => "example_images",
		'std' => "2c-l-fixed",
		'type' => "images",
		'options' => array(
			'1col-fixed' => $imagepath . '1col.png',
			'2c-l-fixed' => $imagepath . '2cl.png',
			'2c-r-fixed' => $imagepath . '2cr.png'
		)
	);

	$options[] = array(
		'name' =>  __( 'Example Background', 'theme-textdomain' ),
		'desc' => __( 'Change the background CSS.', 'theme-textdomain' ),
		'id' => 'example_background',
		'std' => $background_defaults,
		'type' => 'background'
	);

	$options[] = array(
		'name' => __( 'Multicheck', 'theme-textdomain' ),
		'desc' => __( 'Multicheck description.', 'theme-textdomain' ),
		'id' => 'example_multicheck',
		'std' => $multicheck_defaults, // These items get checked by default
		'type' => 'multicheck',
		'options' => $multicheck_array
	);

	$options[] = array(
		'name' => __( 'Colorpicker', 'theme-textdomain' ),
		'desc' => __( 'No color selected by default.', 'theme-textdomain' ),
		'id' => 'example_colorpicker',
		'std' => '',
		'type' => 'color'
	);

	$options[] = array( 'name' => __( 'Typography', 'theme-textdomain' ),
		'desc' => __( 'Example typography.', 'theme-textdomain' ),
		'id' => "example_typography",
		'std' => $typography_defaults,
		'type' => 'typography'
	);

	$options[] = array(
		'name' => __( 'Custom Typography', 'theme-textdomain' ),
		'desc' => __( 'Custom typography options.', 'theme-textdomain' ),
		'id' => "custom_typography",
		'std' => $typography_defaults,
		'type' => 'typography',
		'options' => $typography_options
	);

	$options[] = array(
		'name' => __( 'Text Editor', 'theme-textdomain' ),
		'type' => 'heading'
	);
*/
	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

/*	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Default Text Editor', 'theme-textdomain' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'theme-textdomain' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);
*/
	return $options;
}