<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<header>
		<h2>Header</h2>
	</header>
	<div>
		<h4>Saidbar</h4>
		<?php foreach ($this->menu as $item): ?>
			<p><a href="<?= $item['link'] ?>"><?= $item['name'] ?></a></p>
		<?php endforeach; ?>
	</div>
	<hr />
	<div>
		<h4>Category Sofas</h4>
		<?php foreach ($this->sofas as $item): ?>
			<p><a href="/products/<?= $item['link'] ?>"><?= $item['name'] ?></a></p>
		<?php endforeach; ?>
	</div>
	<div>
		<h4>Category Corpus</h4>
		<?php foreach ($this->corpus as $item): ?>
			<p><a href="/products/<?= $item['link'] ?>"><?= $item['name'] ?></a></p>
		<?php endforeach; ?>
	</div>

	<div>
		<h4>Category Hrom</h4>
		<?php foreach ($this->hrom as $item): ?>
			<p><a href="/products/<?= $item['link'] ?>"><?= $item['name'] ?></a></p>
		<?php endforeach; ?>
	</div>

	<?php include __DIR__ . $this->content ?>
	<footer>
		<h3>Foter</h3>
		<p>VK</p>
		<p>YouTube</p>
	</footer>
</body>

</html>