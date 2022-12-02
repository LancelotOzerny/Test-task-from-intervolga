<?php
	require("modules/exercise1.php");

	// Задание 1
	$numbers = Array(0, 1, 2, 3, 42, 5, 6, 727, 8, 9, 10, 12, 14, 22);
	$insertValue = "<mark><- (Тут была 2)</mark>";

	// Вызываем функцию вставки из exercise1.php
	ValueInserting($numbers, $insertValue);

	// Вывод на сайт в виде строки
	$textArray = "";
	foreach ($numbers as $value) 
	{
		$textArray .= strval($value) . " ";
	}
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

<div class="page-block">
	<div class="container">
		<!-- Заголовок страницы -->
		<div class="row">
			<div class="col-md-12">
				<h1 class="title title--center">Тестовое задание для компании ИНТЕРВОЛГА</h1>
			</div>
		</div>
	</div>
</div>
		<!-- Задания -->
<div class="page-block page-block--gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="exercise">
					<h2 class="exercise-title title--bold title--center">Задание номер 1. Алгоритм.</h2>
					<p class="exercise-input">Вставить $a в индексный (простой) массив целых чисел после всех элементов, в которых есть цифра 2. Новый массив создавать нельзя. Использовать функцию array_splice нельзя.</p>
					
					<h2 class="exercise-title title--font24 title--center">Решение:</h2>
					
					<div class="exercise-solution">
						<?php 
							echo $textArray;
						?>
					</div>

					<h2 class="exercise-title title--font24 title--center">Примечание:</h2>
					
					<div class="exercise-output">						
						<p>
							Вставил элемент после каждого числа, имеющего двойку в одном из разрядов следующим образом:
						</p>

						<p>	
							function ValueInserting(&$numbers, $value)
						</p>

						<p>
							В этой функции я перебираю все элементы массива и проверяю методом 
						</p>
						<p>
							CheckDigitalTwo(int $number)
						</p>
							 имеется  ли в элементе массива цифра 2. Если да, то я вставляю новый элемент в конец (push) и сбрасываю его (тем же перебором до i-го элемента).
							Таким образом элемент оказывается сразу после числа, в котором содержится 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<div class="page-block">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="exercise">
					<h2 class="exercise-title title--bold title--font24 title--center">Задание номер 2. Веб.</h2>
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
					
					<h2 class="exercise-title title--font24 title--center">Решение:</h2>
					<a href="Upload.php" class="exercise-btn">
						Перейти к upload.php
					</a>

					<div class="exercise-output">						
						<p>
							<i>"Какие дыры это может создать?"</i>
						</p>
						<p>
							Первая дыра, которая пришла мне в голову - загрузка php скриптов. С этим можно бороться простой проверкой расширения файла (<i>end(explode('.', ...))</i>).
						</p>
						<p>
							Следующим небезопасным моментом может быть создание файлов - в одном из названий может быть указано "../", что позволит подняться на уровень выше. К примеру "../index.php" перезапишет файл index.php заново, с информацией, которая указана в csv файле. Решить это можно с помощью <i>stripos("..\\", ...)</i> которая вернет false если такого не содержится в названии файла и число, если содержится.
						</p>
					</div>

					<h2 class="exercise-title title--font24 title--center">Примечание:</h2>
					
					<div class="exercise-output">						
						<p>
							Каким образом я реализовал считывание и загрузку файла?
						</p>
						<p>
							Для начала написал POST форму с загрузкой файла и настроил самый простой вид страницы.
						</p>

						<p>После этого начинаю обрабатывать сам файл. Для начала убираю из него теги и передаю его в функцию <i>SaveCsv</i>.</p>
						<p>В этой функции идет проверка на окончание - если файл csv то работа продолжается. Иначе я возвращаю false. Также я возвращаю false если загрузка файла не удалась. Иначе возвращается true.</p>

						<p>Возвращаемся в основной файл. Здесь идет проверка - если <i>SaveCsv</i> вернул true, то дальше вызывается <i>CreateFilesFromCsv</i>.</p>

						<p>В <i>CreateFilesFromCsv</i> я открываю загруженный файл на считывание и построчно его читаю. Каждую строку разбиваю по знаку запятой. Если в качестве расширения (снова <i>ending</i>) один из скриптовых файлов веба (php, js) то я не создаю его. Не создаю также если в строке имеется последовательность "../" или "..\". Если файл прошел все проверки то он будет создан, а в его содержимое через fwrite будет записано второе значение массива (разделенной по запятым строки).</p>

						<p>И в конце я просто удаляю первоначально загруженный файл</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="page-block page-block--gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="exercise">
					<h2 class="exercise-title title--bold title--font24 title--center">Задание номер 3. БД.</h2>
					<p class="exercise-input">Нарисовать ER-диаграмму БД для записи результатов соревнований бегунов марафона. В БД должны храниться Спортсмены, Соревнования, Результаты (спортсмена по соревнованию) и Список призеров (до 3-х на соревновании).</p>
				
					<h2 class="exercise-title title--font24 title--center">Решение:</h2>
					
					<div class="exercise-output">						
						<img class="exercise-image" src="Images/DataBase.png" alt="">
					</div>
						<h2 class="exercise-title title--font24 title--center">Примечание:</h2>
					<div class="exercise-output">
						<p>Так как в БД требуется номер паспорта (без серии), то первичный ключ из него делать не стал. Можно было бы сделать первичный ключ на email (не может же быть у двух участников один и тот же email), но он может занимать большое кол-во символов - в некоторых случаях будет не очень удобно работать с ним. Поэтому я и решил добавить ID.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="page-block">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="exercise">
					<h2 class="exercise-title title--bold title--font24 title--center">Задание номер 4. SQL.</h2>
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

					<div class="exercise-output">						
						<p>Ни разу не создавал базы данных через PHP. Делал это только через phpMyAdmin, но если вспомнить книгу Бена Форта, то запрос получится следующим (может отличаться в зависимости от типа БД):</p>
						<p>
							<pre>
	CREATE TABLE Maraphone.Sportsmens
	(
		"ID" INT(12) NOT NULL AUTO_INCREMENT,
		"Email" VARCHAR(255) NOT NULL,
		"Name" VARCHAR(255) NOT NULL,
		"Phone" INT(10) NOT NULL,
		"Birthday" DATE(8),
		"Age" INT(3),
		"PassportNumber" INT(6),
		"MiddlePlace" INT(12),
		"Biogaphy" TEXT(255),
		"PresentationPath" VARCHAR(255),
		 PRIMARY KEY('ID'),
	);
							</pre>
						</p>	

						<p>Для выборки 5-ти спортсменов можно сгруппировать результаты по ID спортсменов, отсортировать результаты и выбрать первые 5 записей.
							<pre>
	SELECT Sportsmen.Id, COUNT(*) AS competitionsCount 
	FROM 'Results' GROUP BY Sportsmen.Id
	ORDER BY competitionsCount
	LIMIT 5;
							</pre>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>