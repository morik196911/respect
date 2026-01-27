<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $this->title ?></title>
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<div class="grid-container">
		<header class="header">
			<div class="header__logo">Морозов-мебель</div>
			<nav class="header__nav">
				<ul class="nav__list">
					<li class="nav__item"><a href="#" class="nav__link">Главная</a></li>
					<li class="nav__item"><a href="#" class="nav__link">О нас</a></li>
					<li class="nav__item"><a href="#" class="nav__link">Услуги</a></li>
					<li class="nav__item"><a href="#" class="nav__link">Контакты</a></li>
				</ul>
			</nav>
		</header>
		<aside class="sidebar">
			<nav class="sidebar__nav">
				<h3 class="sidebar__title">Корпусная мебель</h3>
				<ul class="sidebar__list">
					<li class="sidebar__item">
						<a href="#" class="sidebar__link">Шкафы-купе</a>
					</li>
					<li class="sidebar__item">
						<a href="#" class="sidebar__link">Кухонные гарнитуры</a>
					</li>
					<li class="sidebar__item">
						<a href="#" class="sidebar__link">Прихожие</a>
					</li>
					<li class="sidebar__item">
						<a href="#" class="sidebar__link">Офисная мебель</a>
					</li>
				</ul>

				<h3 class="sidebar__title">Мягкая мебель</h3>
				<ul class="sidebar__list">
					<li class="sidebar__item">
						<a href="#" class="sidebar__link">Диваны</a>
					</li>
					<li class="sidebar__item">
						<a href="#" class="sidebar__link">Кресла</a>
					</li>
					<li class="sidebar__item">
						<a href="#" class="sidebar__link">Кушетки</a>
					</li>
				</ul>
			</nav>
		</aside>
		<main class="content">Основной контент</main>
		<footer class="footer">Подвал сайта</footer>
	</div>
</body>

</html>