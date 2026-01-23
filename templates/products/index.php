<div>
	<h2>Category !!!!!!!</h2>
	<p>Hello <?= $this->category ?></p>
	<hr />
	<?php foreach ($this->products as $item): ?>
		<h4><?= $item['name'] ?></h4>
		<p><img src="<?= $item['images'] ?>" width="300" height="300" alt="Foto111"></p>
		<p><?= $item['description'] ?></p>
		<p> <a href="<?= $this->category ?>/<?= $item['link'] ?>/<?= $item['id'] ?>">Link</a> </p>
	<?php endforeach; ?>
</div>