<?php

// ***** Subscribe tab *****
$tab_2 = $panel->createTab( array('name' => 'Subscribe') );

// display this section
$tab_2->createOption( array('name' => 'Display this section', 'id' => 'tab_2_display', 'type' => 'checkbox',
							'desc' => 'Check it if you want to display this section in the coming soon page', 'default' => true) );
// section order
$tab_2->createOption( array('name' => 'Section order', 'id' => 'tab_2_order', 'type' => 'select',
							'desc' => 'Choose the order of this section in the coming soon page',
							'options' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'), 
							'default' => '1') );
// top menu name
$tab_2->createOption( array('name' => 'Top menu name', 'id' => 'tab_2_menu_name', 'type' => 'text',
							'desc' => 'Enter the name to display on the top menu for this section', 'default' => 'Subscribe') );
// background
$tab_2->createOption( array('name' => 'Background', 'id' => 'tab_2_bg', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );
// fullscreen image
$tab_2->createOption( array('name' => 'Background image', 'id' => 'tab_2_bg_image', 'type' => 'upload',
							'desc' => 'Upload your image to use as fullscreen background') );
// title
$tab_2->createOption( array('name' => 'Title', 'id' => 'tab_2_title', 'type' => 'text', 'desc' => 'Enter the title',
							'default' => 'Subscribe to our newsletter') );
// description
$tab_2->createOption( array('name' => 'Description', 'id' => 'tab_2_description', 'type' => 'editor', 'desc' => 'Enter the description',
							'default' => 'Sign up now to our newsletter and you\'ll be one of the first to know when the site is ready:',
							'media_buttons' => false, 'rows' => 6) );
// placeholder
$tab_2->createOption( array('name' => 'Placeholder', 'id' => 'tab_2_placeholder', 'type' => 'text', 
							'desc' => 'Enter the placeholder for the email input field', 'default' => 'Enter your email...') );
// button text
$tab_2->createOption( array('name' => 'Button text', 'id' => 'tab_2_button', 'type' => 'text', 
							'desc' => 'Enter the text for the submit button', 'default' => 'Subscribe') );
// email where to receive the notification
$tab_2->createOption( array('name' => 'Notification email', 'id' => 'tab_2_email', 'type' => 'text', 
							'desc' => 'Enter the email where you want to receive the notification when someone subscribes', 
							'default' => 'contact.azmind@gmail.com') );
// email error message
$tab_2->createOption( array('name' => 'Email error message', 'id' => 'tab_2_error', 'type' => 'text', 
							'desc' => 'Enter the text for the error message', 'default' => 'Insert a valid email address!') );
// email success message
$tab_2->createOption( array('name' => 'Email success message', 'id' => 'tab_2_success', 'type' => 'text', 
							'desc' => 'Enter the text for the success message', 'default' => 'Thanks for your subscription!') );
// save button
$tab_2->createOption( array('type' => 'save') );

?>