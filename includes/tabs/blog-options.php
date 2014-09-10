<?php

$tab_0 = $blogpanel->createTab(array('name' => 'Blog Bio Options') );

$tab_0->createOption(array(
			'name' => 'Blog Bio Text',
			'id'   => 'blog_bio_text',
			'type' => 'editor',
			'wpauto' => false,
			'css' => 'body {background-color: #EBEBEB;}',
			'desc' => 'Blog Bio Text, any styling you apply here will ovveride the default sytles'
		));

$tab_0->createOption(array('type' => 'save'));
?>