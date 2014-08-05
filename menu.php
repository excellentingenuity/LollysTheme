<!-- Top menu -->
		<nav>
			<a class="scroll-link" href="#top">Top</a>
		<?php
			foreach(lolly_top_menu_items($titan) as $menu_item) {
			?>
				<a class="scroll-link" href="#<?php echo $menu_item['section-container']; ?>"><?php echo $menu_item['menu-item-name']; ?></a>
			<?php
			}
		?>			
			<div class="hide-menu">
				<a href="" rel="tooltip" data-placement="bottom" data-original-title="Hide menu">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</nav>
		<div class="show-menu">
			<a href="" rel="tooltip" data-placement="bottom" data-original-title="Show menu">
				<i class="fa fa-bars"></i>
			</a>
		</div>