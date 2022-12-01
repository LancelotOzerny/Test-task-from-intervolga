<?php 

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Тестовое задание для компании ИНТЕРВОЛГА</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<!-- Заголовок страницы -->
		<div class="row">
			<div class="col-md-12">
				<h1 class="title title--center">Тестовое задание для компании ИНТЕРВОЛГА</h1>
			</div>
		</div>

		<!-- Задания -->
		<div class="row">
			<div class="col-md-12">
				<div class="exercise">
					<h2 class="exercise-title title--font24 title--center">Задание номер 1. Алгоритм.</h2>
					<p class="exercise-input">Вставить $a в индексный (простой) массив целых чисел после всех элементов, в которых есть цифра 2. Новый массив создавать нельзя. Использовать функцию array_splice нельзя.</p>
				
					<div class="exercise-output">
						
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="exercise">
					<h2 class="exercise-title title--font24 title--center">Задание номер 2. Веб.</h2>
					<p class="exercise-input">
						Создать PHP-страницу upload.php с формой загрузки CSV-файла В CSV-файле должны быть 2 столбца: название файла, содержимое. Рядом с файлом upload.php требуется создать папку /upload/ и создать в ней файлы, прочитав CSV-файл.
						Какие дыры это может создать? Как бороться? Ограничений на функции и возможности PHP нет.
					</p>

					<p class="exercise-input"></p>
					<p class="exercise-input">
						Пример файла CSV:
						<ul class="exercise-list">
							<li class="exercise-list-item">aaa.txt,Привет</li>
							<li class="exercise-list-item">bbb.log,Тест</li>
							<li class="exercise-list-item">ccc.html,&lt;h1&gt;Заголовок&lt;/h1&gt;</li>
						</ul>
					</p>
					<p class="exercise-input">При загрузке такого файла должны быть созданы /upload/1.txt, /upload/2.log, /upload/3.html (с соответствующим содержимым)</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="exercise">
					<h2 class="exercise-title title--font24 title--center">Задание номер 3. БД.</h2>
					<p class="exercise-input">Нарисовать ER-диаграмму БД для записи результатов соревнований бегунов марафона. В БД должны храниться Спортсмены, Соревнования, Результаты (спортсмена по соревнованию) и Список призеров (до 3-х на соревновании).</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="exercise">
					<h2 class="exercise-title title--font24 title--center">Задание номер 4. SQL.</h2>
					<p class="exercise-input">
						Продолжение предыдущего задания. Напишите SQL-запрос для создания таблицы спортсменов (подберите типы подходящие данных):

						<ul class="exercise-list">
							<li class="exercise-list-item">ФИО</li>
							<li class="exercise-list-item">e-mail</li>
							<li class="exercise-list-item">телефон (только российские номера мобильных)</li>
							<li class="exercise-list-item">дата рождения</li>
							<li class="exercise-list-item">возраст</li>
							<li class="exercise-list-item">дата и время создания записи</li>
							<li class="exercise-list-item">номер паспорта</li>
							<li class="exercise-list-item">среднее место на соревнованиях</li>
							<li class="exercise-list-item">биография</li>
							<li class="exercise-list-item">видеопрезентация</li>	
						</ul>

						И выберите из БД топ 5 ФИО спортсменов, больше остальных посетивших соревнований (одним SQL-запросом и без вложенных SELECT’ов)
					</p>
				</div>
			</div>
		</div>
	</div>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>