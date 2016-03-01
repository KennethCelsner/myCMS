<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My CMS</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/css/app.css">
</head>
<body class="index">
    <div class="main-section">
		<div class="row">
		<div class="columns small-12 sign-btns">
				<a class="button success" href="#">Sign up</a>
				<a class="button sign-in" href="#">Sign in</a>
			</div>
			<div class="columns small-12 text-center">
			<h1>My CMS</h1>

				<?php if (empty($pages)): ?>
					<p>Sorry, no pages at the moment.</p>
				<?php else: ?>
					<ul>
						<?php foreach ($pages as $page): ?>
							<li class="choose-page"><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug']; ?>"><?php echo $page['label']; ?></a></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<script src="<?php echo BASE_URL?>/bower_components/jquery/dist/jquery.js"></script>
    <script src="<?php echo BASE_URL?>/bower_components/what-input/what-input.js"></script>
    <script src="<?php echo BASE_URL?>/bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="<?php echo BASE_URL?>/js/app.js"></script>
</body>
</html>