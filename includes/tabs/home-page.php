<?php

	// ***** Home Page tab *****
	$tab_0 = $homepanel->createTab(array('name' => 'Top Image Slider') );

	$tab_0->createOption(array(
			'name' => 'Header Text',
			'id'   => 'header_slider_text',
			'type' => 'text',
			'desc' => 'Header Slideshow Message Text'
		));

	$tab_0->createOption(array(
			'name' => 'Header Text Line 2',
			'id'   => 'header_slider_text2',
			'type' => 'editor',
			'wpauto' => false,
			'css' => 'body {background-color: #EBEBEB;}',
			'desc' => 'Header Slideshow Message Text 2nd Line, any styling you apply here will ovveride the default sytles'
		));

	//Header Slideshow
	$tab_0->createOption( array('name' => 'Header Slideshow Image 1', 'id' => 'header_slider_image_1', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_0->createOption( array('name' => 'Header Slideshow Image 2', 'id' => 'header_slider_image_2', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_0->createOption( array('name' => 'Header Slideshow Image 3', 'id' => 'header_slider_image_3', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_0->createOption( array('name' => 'Header Slideshow Image 4', 'id' => 'header_slider_image_4', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_0->createOption( array('name' => 'Header Slideshow Image 5', 'id' => 'header_slider_image_5', 'type' => 'upload', 'desc' => 'Upload your image') );

	$tab_0->createOption(array('type' => 'save'));

	//Commitment Section
	$tab_1 = $homepanel->createTab(array('name' => 'Commitment Section'));

	$tab_1->createOption(array(
		'name' => 'Commitment I Am text',
		'id' => 'commitment_iam_text',
		'type' => 'text',
		'desc' => 'The I Am Commited text section'
		));

	$tab_1->createOption(array(
		'name' => 'Coaching List',
		'id' => 'commitment_coaching_list',
		'type' => 'editor',
		'wpauto' => false,
		'desc' => 'The Coaching list, this must be a list for the styles to work correctly'
		));

	$tab_1->createOption(array(
		'name' => 'Consulting List',
		'id' => 'commitment_consulting_list',
		'type' => 'editor',
		'wpauto' => false,
		'desc' => 'The Consulting list, this must be a list for the styles to work correctly'
		));


	$tab_1->createOption(array('type' => 'save'));

	//Speaker Section
	$tab_2 = $homepanel->createTab(array('name' => 'Speaker Section'));

	$tab_2->createOption( array('name' => 'Background', 'id' => 'speaker-background', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );

	$tab_2->createOption( array('name' => 'Speaker With Heart Image', 'id' => 'speaker_with_heart_background', 'type' => 'upload', 'desc' => 'Upload your image'));

	$tab_2->createOption(array(
			'name' => 'Speaker With Heart Text',
			'id'   => 'speaker_text',
			'type' => 'editor',
			'wpauto' => false,
			'desc' => 'Speaker With Heart Message Text'
		));

	$tab_2->createOption( array(
		'name' => 'Speaker With Heart Link',
		'id' => 'speaker_text_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the Speaker With Heart text should link to'
	));


	$tab_2->createOption(array('type' => 'save'));


	$tab_3 = $homepanel->createTab(array('name' => 'Values Section'));

	$tab_3->createOption(array(
			'name' => 'Values Header',
			'id'   => 'home_values_header',
			'type' => 'text',
			'desc' => 'Values Section Header'
		));
	$tab_3->createOption(array(
			'name' => 'Value 1 - Top Left',
			'id'   => 'home_value_1',
			'type' => 'text',
			'desc' => 'Value in Top Left'
		));
	$tab_3->createOption(array(
			'name' => 'Value 1 - Top Left Elipsis',
			'id'   => 'home_value_1_elipsis_text',
			'type' => 'text',
			'desc' => 'Value in Top Left Elipsis Text'
		));
	$tab_3->createOption(array(
			'name' => 'Value 1 hover text - Top Left',
			'id'   => 'home_value_1_hover_text',
			'type' => 'textarea',
			'desc' => 'Value in Top Left Hover Text'
		));
	$tab_3->createOption(array(
			'name' => 'Value 2 - Top Right',
			'id'   => 'home_value_2',
			'type' => 'text',
			'desc' => 'Value in Top Right'
		));
	$tab_3->createOption(array(
			'name' => 'Value 2 - Top Right Elipsis',
			'id'   => 'home_value_2_elipsis_text',
			'type' => 'text',
			'desc' => 'Value in Top Right Elipsis Text'
		));
	$tab_3->createOption(array(
			'name' => 'Value 2 hover text - Top Right',
			'id'   => 'home_value_2_hover_text',
			'type' => 'textarea',
			'desc' => 'Value in Top Right Hover Text'
		));
	$tab_3->createOption(array(
			'name' => 'Value 3 - Bottom Left',
			'id'   => 'home_value_3',
			'type' => 'text',
			'desc' => 'Value in Bottom Left'
		));
	$tab_3->createOption(array(
			'name' => 'Value 3 - Bottom Left Elipsis',
			'id'   => 'home_value_3_elipsis_text',
			'type' => 'text',
			'desc' => 'Value in Bottom Left Elipsis Text'
		));
	$tab_3->createOption(array(
			'name' => 'Value 3 hover text - Bottom Left',
			'id'   => 'home_value_3_hover_text',
			'type' => 'textarea',
			'desc' => 'Value in Bottom Left Hover Text'
		));
	$tab_3->createOption(array(
			'name' => 'Value 4 - Bottom Right',
			'id'   => 'home_value_4',
			'type' => 'text',
			'desc' => 'Value in Bottom Right'
		));
	$tab_3->createOption(array(
			'name' => 'Value 4 - Bottom Right Elipsis',
			'id'   => 'home_value_4_elipsis_text',
			'type' => 'text',
			'desc' => 'Value in Bottom Right Elipsis Text'
		));
	$tab_3->createOption(array(
			'name' => 'Value 4 hover text - Bottom Right',
			'id'   => 'home_value_4_hover_text',
			'type' => 'textarea',
			'desc' => 'Value in Bottom Right Hover Text'
		));
	$tab_3->createOption( array(
		'name' => 'About Me Link',
		'id' => 'about_me_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the About me link'
	));

	$tab_3->createOption(array('type' => 'save'));

	$tab_4 = $homepanel->createTab(array('name' => 'Awards and Mentions Section'));

	$tab_4->createOption( array(
		'name' => 'Testimonials Link',
		'id' => 'testimonials_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the Testimonials button to link to'
	));

	/*$tab_4->createOption(array(
			'name' => 'Awards Paragraph Left side',
			'id'   => 'awards_text_left',
			'type' => 'editor',
			'wpauto' => false,
			'desc' => 'Awards Paragraph Text, any styles applied here will ovveried the defaults'
		));
	$tab_4->createOption(array(
			'name' => 'Awards Paragraph Right Side',
			'id'   => 'awards_text_right',
			'type' => 'editor',
			'wpauto' => false,
			'desc' => 'Awards Paragraph Text, any styles applied here will ovveried the defaults'
		));*/
	$tab_4->createOption(array(
				'name' => 'Awards Paragraph Center',
				'id'   => 'awards_text_center',
				'type' => 'editor',
				'wpauto' => false,
				'desc' => 'Awards Paragraph Text, any styles applied here will ovveried the defaults'
			));

	$tab_4->createOption( array('name' => 'Awards Background', 'id' => 'awards-background', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );
	$tab_4->createOption( array('name' => 'Awards and Mentions Backround Image', 'id' => 'awards_background_image', 'type' => 'upload', 'desc' => 'Upload your image') );

	$tab_4->createOption( array(
		'name' => 'Awards and Mentions Read More Link',
		'id' => 'awards_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the Awards and Mentions button to link to'
	));

	$tab_4->createOption(array('type' => 'save'));

	$tab_5 = $homepanel->createTab(array('name' => 'Icon Navigation Section'));

	$tab_5->createOption(array(
		'name' => 'Icon Navigation Header Text',
		'id' => 'icon_nav_header_text',
		'type' => 'text',
		'default' => '',
		'desc' => 'The text that headlines the icon navigation section'
	));

	$tab_5->createOption( array(
		'name' => 'Icon Navigation Link 1',
		'id' => 'icon_nav_link_1',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the 1st Icon navigation link'
	));

	$tab_5->createOption(array(
			'name' => 'Icon Navigation Link 1',
			'id'   => 'icon_nav_text_1',
			'type' => 'text',
			'desc' => 'Icon Navigation Link 1st text '
		));

	$tab_5->createOption( array(
		'name' => 'Icon Navigation Link 2',
		'id' => 'icon_nav_link_2',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the 2nd Icon navigation link'
	));

	$tab_5->createOption(array(
			'name' => 'Icon Navigation Link 2',
			'id'   => 'icon_nav_text_2',
			'type' => 'text',
			'desc' => 'Icon Navigation Link 2nd text'
		));

	$tab_5->createOption( array(
		'name' => 'Icon Navigation Link text 3',
		'id' => 'icon_nav_link_3',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the 3rd Icon navigation link'
	));

	$tab_5->createOption(array(
			'name' => 'Icon Navigation Link 3',
			'id'   => 'icon_nav_text_3',
			'type' => 'text',
			'desc' => 'Icon Navigation Link 3rd text '
		));

	$tab_5->createOption( array(
		'name' => 'Icon Navigation Link 4',
		'id' => 'icon_nav_link_4',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the 4th Icon navigation link'
	));

	$tab_5->createOption(array(
			'name' => 'Icon Navigation Link 4',
			'id'   => 'icon_nav_text_4',
			'type' => 'text',
			'desc' => 'Icon Navigation Link 4th text '
		));

	$tab_5->createOption( array(
		'name' => 'Icon Navigation Link 5',
		'id' => 'icon_nav_link_5',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the 5th Icon navigation link'
	));

	$tab_5->createOption(array(
			'name' => 'Icon Navigation Link 5',
			'id'   => 'icon_nav_text_5',
			'type' => 'text',
			'desc' => 'Icon Navigation Link 5th text '
		));

	$tab_5->createOption( array(
		'name' => 'Icon Navigation Link 6',
		'id' => 'icon_nav_link_6',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the 6th Icon navigation link'
	));

	$tab_5->createOption(array(
			'name' => 'Icon Navigation Link 6',
			'id'   => 'icon_nav_text_6',
			'type' => 'text',
			'desc' => 'Icon Navigation Link 6th text '
		));
	

	$tab_5->createOption(array('type' => 'save'));

	$tab_6 = $homepanel->createTab(array('name' => 'Tweet Chat Section'));

	$tab_6->createOption( array(
		'name' => 'Tweet Chat Page Link',
		'id' => 'teweetchat_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the Tweetchat link'
	));

	$tab_6->createOption( array('name' => 'Tweetchat Logo', 'id' => 'tweetchat_logo', 'type' => 'upload', 'desc' => 'Upload your image') );

	$tab_6->createOption(array(
			'name' => 'Tweetchat Paragraph',
			'id'   => 'tweetchat_text',
			'type' => 'editor',
			'wpauto' => false,
			'desc' => 'Tweetchat Paragraph Text'
		));

	$tab_6->createOption(array('type' => 'save'));
?>