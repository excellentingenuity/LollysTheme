<?php
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");
?>
<!-- body tag opened at the end of header -->
<div class="container-fluid">
	<div class="row">
			<div class="header-bar">
				<div class="header-bar-content">
					<a class="header-bar-link" href="<?php echo $titan->getOption('header_text_link');?>"><?php echo $titan->getOption('header_text');?></a>
				</div>
			</div>
	</div>
	<div class="row">
		<nav class="top-navigation">
			
		</nav>
	</div>

</div>

<!-- body tag closed in footer -->
<?php
include("footer.php");
?>
