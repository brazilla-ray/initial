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
  	<?php print render ($page['content']); ?>
	</div><!--main/main content-->
</div><!--page-->
