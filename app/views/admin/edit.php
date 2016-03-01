<?php require VIEW_ROOT . '/templates/header.php'; ?>
    <div class="main-section">
		<div class="row">
			<div class="columns small-12">


	<h2>Edit page</h2>

	<form action="<?php echo BASE_URL; ?>/admin/edit.php" method="post" autocomplete="off">
		<label for="title">
			Title
			<input type="text" name="title" id="title" value="<?php echo e($page['title']); ?>">
		</label>
		<label for="label">
			Label
			<input type="text" name="label" id="label" value="<?php echo e($page['label']); ?>">
		</label>
		<label for="slug">
			Title
			<input type="text" name="slug" id="slug" value="<?php echo e($page['slug']); ?>">
		</label>
		<label for="body">
			Body
			<textarea name="body" id="body" cols="30" rows="10"><?php echo e($page['body']); ?></textarea>
		</label>
		<label for="css">
			CSS (SASS)
			<textarea name="css" id="css" cols="30" rows="10">/* Write your own CSS (using SASS) here */</textarea>
		</label>

		<input type="hidden" name="id" value="<?php echo e($page['id']); ?>">

		<input class="button" type="submit" value="Edit">
	</form>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>