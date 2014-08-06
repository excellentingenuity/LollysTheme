<?php

/**
* 
*/
class LollysThemeOptions
{
	
	protected $titan;
	protected $panel;

	function __construct($titan)
	{
		$this->titan = $titan;
		$this->create_panel();
	}

	public function create_panel()
	{
		$this->panel = $this->titan->createAdminPanel(array("name" => "Lollys Theme Options", ));

		require_once('includes/tabs/home-page.php');
	}
}
?>