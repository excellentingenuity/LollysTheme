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
			'type' => 'text',
			'desc' => 'Header Slideshow Message Text 2nd Line'
		));

	//Header Slideshow
	$tab_0->createOption( array('name' => 'Header Slideshow Image 1', 'id' => 'header_slider_image_1', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_0->createOption( array('name' => 'Header Slideshow Image 2', 'id' => 'header_slider_image_2', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_0->createOption( array('name' => 'Header Slideshow Image 3', 'id' => 'header_slider_image_3', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_0->createOption( array('name' => 'Header Slideshow Image 4', 'id' => 'header_slider_image_4', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_0->createOption( array('name' => 'Header Slideshow Image 5', 'id' => 'header_slider_image_5', 'type' => 'upload', 'desc' => 'Upload your image') );

	$tab_0->createOption(array('type' => 'save'));

	//Speaker Section
	$tab_1 = $homepanel->createTab(array('name' => 'Speaker Section'));

	$tab_1->createOption( array('name' => 'Background', 'id' => 'speaker-background', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );
	$tab_1->createOption( array('name' => 'Speaker With Heart Image', 'id' => 'speaker_with_heart_background', 'type' => 'upload', 'desc' => 'Upload your image'));
	$tab_1->createOption(array(
			'name' => 'Speaker With Heart Text',
			'id'   => 'speaker_text',
			'type' => 'text',
			'desc' => 'Speaker With Heart Message Text'
		));
	$tab_1->createOption(array(
			'name' => 'Speaker With Heart Text 2',
			'id'   => 'speaker_text2',
			'type' => 'text',
			'desc' => 'Speaker With Heart Message Text Line 2'
		));

	$tab_1->createOption( array(
		'name' => 'Speaker With Heart Link',
		'id' => 'speaker_text_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the Speaker With Heart text should link to'
	));


	$tab_1->createOption(array('type' => 'save'));


	$tab_2 = $homepanel->createTab(array('name' => 'Values Section'));

	$tab_2->createOption(array(
			'name' => 'Values Header',
			'id'   => 'home_values_header',
			'type' => 'text',
			'desc' => 'Values Section Header'
		));
	$tab_2->createOption(array(
			'name' => 'Value 1 - Top Left',
			'id'   => 'home_value_1',
			'type' => 'text',
			'desc' => 'Value in Top Left'
		));
	$tab_2->createOption(array(
			'name' => 'Value 1 - Top Left Elipsis',
			'id'   => 'home_value_1_elipsis_text',
			'type' => 'text',
			'desc' => 'Value in Top Left Elipsis Text'
		));
	$tab_2->createOption(array(
			'name' => 'Value 1 hover text - Top Left',
			'id'   => 'home_value_1_hover_text',
			'type' => 'textarea',
			'desc' => 'Value in Top Left Hover Text'
		));
	$tab_2->createOption(array(
			'name' => 'Value 2 - Top Right',
			'id'   => 'home_value_2',
			'type' => 'text',
			'desc' => 'Value in Top Right'
		));
	$tab_2->createOption(array(
			'name' => 'Value 2 - Top Right Elipsis',
			'id'   => 'home_value_2_elipsis_text',
			'type' => 'text',
			'desc' => 'Value in Top Right Elipsis Text'
		));
	$tab_2->createOption(array(
			'name' => 'Value 2 hover text - Top Right',
			'id'   => 'home_value_2_hover_text',
			'type' => 'textarea',
			'desc' => 'Value in Top Right Hover Text'
		));
	$tab_2->createOption(array(
			'name' => 'Value 3 - Bottom Left',
			'id'   => 'home_value_3',
			'type' => 'text',
			'desc' => 'Value in Bottom Left'
		));
	$tab_2->createOption(array(
			'name' => 'Value 3 - Bottom Left Elipsis',
			'id'   => 'home_value_3_elipsis_text',
			'type' => 'text',
			'desc' => 'Value in Bottom Left Elipsis Text'
		));
	$tab_2->createOption(array(
			'name' => 'Value 3 hover text - Bottom Left',
			'id'   => 'home_value_3_hover_text',
			'type' => 'textarea',
			'desc' => 'Value in Bottom Left Hover Text'
		));
	$tab_2->createOption(array(
			'name' => 'Value 4 - Bottom Right',
			'id'   => 'home_value_4',
			'type' => 'text',
			'desc' => 'Value in Bottom Right'
		));
	$tab_2->createOption(array(
			'name' => 'Value 4 - Bottom Right Elipsis',
			'id'   => 'home_value_4_elipsis_text',
			'type' => 'text',
			'desc' => 'Value in Bottom Right Elipsis Text'
		));
	$tab_2->createOption(array(
			'name' => 'Value 4 hover text - Bottom Right',
			'id'   => 'home_value_4_hover_text',
			'type' => 'textarea',
			'desc' => 'Value in Bottom Right Hover Text'
		));
	$tab_2->createOption( array(
		'name' => 'About Me Link',
		'id' => 'about_me_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the About me link'
	));

	$tab_2->createOption(array('type' => 'save'));

	$tab_3 = $homepanel->createTab(array('name' => 'Awards and Mentions Section'));

	$tab_3->createOption( array(
		'name' => 'Testimonials Link',
		'id' => 'testimonials_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the Testimonials button to link to'
	));

	$tab_3->createOption(array(
			'name' => 'Awards Paragraph',
			'id'   => 'awards_text',
			'type' => 'textarea',
			'desc' => 'Awards Paragraph Text'
		));
	$tab_3->createOption( array('name' => 'Awards Background', 'id' => 'awards-background', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );
	$tab_3->createOption( array('name' => 'Awards and Mentions Backround Image', 'id' => 'awards_background_image', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_3->createOption( array('name' => 'Awards and Mentions Logos Image', 'id' => 'awards_logos_image', 'type' => 'upload', 'desc' => 'Upload your image') );

	$tab_3->createOption( array(
		'name' => 'Awards and Mentions Read More Link',
		'id' => 'awards_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the Awards and Mentions button to link to'
	));

	$tab_3->createOption(array('type' => 'save'));

?>