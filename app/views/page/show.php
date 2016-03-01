<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="contain-to-grid">
  <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
  <div class="row">
  <div class="columns small-12 text-center">
  	<ul>
  		<li><a href="#">Anchor</a></li>
  		<li><a href="#">Tags</a></li>
  		<li><a href="#">Goes</a></li>
  		<li><a href="#">Here</a></li>
  	</ul>
  </div>
  </div>
  </nav>
</div>
    <div class="main-section">
		<div class="row">
			<div class="columns small-12">


	<?php if (!$page): ?>
		
		<p>No page found, sorry.</p>
	
	<?php else: ?>

		<div class="row">
			<div class="columns small-12 text-center">
				<h2><?php echo e($page['title']); ?></h2>
			</div>

			<div class="columns small-12 panel">
				<p><?php echo htmlspecialchars(e($page['body']), ENT_HTML5, "UTF-8"); ?></p>
			</div>

			<div class="columns small-12 panel">
				<p><?php echo htmlentities(e($page['body'])); ?></p>
			</div>

			<div class="columns small-12 panel">
				<p><?php echo e($page['body']); ?></p>
			</div>

			<div class="columns small-12 panel">
				<p><?php echo e($page['body']); ?></p>
			</div>
		</div>

		<footer>
		<div class="row">
			<div class="columns small-12">
				<p class="faded">
				

					<?php if ($page['updated']): ?>
						This page was created on <?php echo $page['created']->format('jS M Y'); ?>
						<span class="italics">Last updated <?php echo $page['updated']->format('jS M Y h:i'); ?></span>
					<?php endif ?>

				</p>
			</div>
		</div>
		</footer>

	<?php endif; ?>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>