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
	<div class="hr">
		<hr>
	</div><!--hr-->	
	<div id="main-content">
		<div id="frontpiece">
		<?php
		$block = module_invoke('block', 'block_view', '7');
		print render($block['content']);
		?>
		</div><!--frontpiece-->
		
		<div id="twentythirteen">
		<?php
		$block = module_invoke('block', 'block_view', '2');
		print render($block['content']);
		$block = module_invoke('views', 'block_view', 'clone_of_plates-block_3');
		print render($block['content']);
		?>
		</div><!--ss2013-->
		
		<div id="twentytwelve">
		<?php
		$block = module_invoke('block', 'block_view', '2');
		print render($block['content']);
		$block = module_invoke('views', 'block_view', 'clone_of_plates-block_1');
		print render($block['content']);
		?>
		</div><!--ss2012-->
		
		<div id="older">
		<?php
		$block = module_invoke('block', 'block_view', '2');
		print render($block['content']);
		$block = module_invoke('views', 'block_view', 'clone_of_plates-block_2');
		print render($block['content']);
		?>
		</div><!--older-->
		
		<div id="statement">
		<?php
		$block = module_invoke('block', 'block_view', '6');
		print render($block['content']);
		?>
		</div><!--statement-->
		
		<div id="contact">
		<?php
		$block = module_invoke('formblock', 'block_view', 'contact_site');
		print render($block['content']);
		?>
		</div><!--contact-->
		
	</div><!--main/main content-->
</div><!--page-->
