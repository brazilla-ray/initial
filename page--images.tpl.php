<?php
?>

<header role="banner">
	<?php if($page['header']): ?>
    	<div class="header-region">
      	<?php print render($page['header']); ?>
    	</div><!--header-region -->
  	<?php endif; ?>
</header>

<div id="page">
	<?php if($page['nav_tabs']): ?>  	
	<div id="nav-tabs">
      	<?php print render($page['nav_tabs']); ?>
    	</div><!--nav-tabs-->
  	<?php endif; ?>	
	<div id="main-content">
		<div id="2013">
		<?php
		$block = module_invoke('block', 'block_view', '2');
		print render($block['content']);
		$block = module_invoke('views', 'block_view', 'clone_of_plates-block_3');
		print render($block['content']);
		?>
		</div><!--2013-->
		
		<div id="2012">
		<?php
		$block = module_invoke('block', 'block_view', '2');
		print render($block['content']);
		$block = module_invoke('views', 'block_view', 'clone_of_plates-block_1');
		print render($block['content']);
		?>
		</div><!--2012-->
		
		<div id="2011">
		<?php
		$block = module_invoke('block', 'block_view', '2');
		print render($block['content']);
		$block = module_invoke('views', 'block_view', 'clone_of_plates-block_2');
		print render($block['content']);
		?>
		</div><!--2011-->
		
		<div id="frontpiece">
		<?php
		$block = module_invoke('block', 'block_view', '5');
		print render($block['content']);
		?>
		</div><!--frontpiece-->

	</div><!--main/main content-->
</div><!--page-->
