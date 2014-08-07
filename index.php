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
		<nav class="navbar top-navigation" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		    </div>
		    <div class="collapse navbar-collapse navbar-ex1-collapse top-navigation-menu">
				<?php
					$top_menu = $titan->getOption('top-menu');
					echo get_top_menu($top_menu);
				?>
			</div>
		</nav>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="wow fadeInDown featured-fade-slideshow">
				Featured Area
			</div>
		</div>
	</div>
	<div class="row">
		
	</div>
</div> <!-- closing container-fluid div -->

<!-- body tag closed in footer -->
<?php
include("footer.php");
?>
