<?php
	error_reporting(0);
	require("modules/Exercise2.php");

	$message = "";

	if (isset($_FILES['csv-file']))
	{
		$uploadFileName = "Upload/" . basename($_FILES['csv-file']['name']);
		strip_tags($uploadFileName);


		if(SaveCsv($uploadFileName))
		{
			CreateFilesFromCsv($uploadFileName, "Upload/");
		}
	}

	unlink($uploadFileName);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload CSV</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="page-block">
	<div class="container">
			<!-- Заголовок страницы -->
		<div class="row">
			<div class="col-md-12">
				<h1 class="title title--center">Загрузка и обработка CSV файла</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<form enctype="multipart/form-data" class="page-form" action="Upload.php" method="POST">
					<input class="page-form-input" type="file" name="csv-file">
					<input class="page-form-input" type="submit" name="post-btn">
				</form>
				<p class="result-text title title--center ">
					<?php echo $message; ?>
				</p>
			</div>
		</div>
	</div>
</div>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>