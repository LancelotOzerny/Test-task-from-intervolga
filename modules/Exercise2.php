В<?php 
	
	function SaveCsv($path_to)
	{
		$ending = end(explode(".", basename($_FILES['csv-file']['name'])));

		if (strcmp($ending, "csv") != 0)
		{
			return false;
		}

		if (move_uploaded_file($_FILES['csv-file']['tmp_name'], $path_to))
		{
			return true;
		}

		echo $_FILES['csv-file']['error'];
		return false;
	}

	function CreateFilesFromCsv($path_from, $directory_to)
	{
		$file = fopen($path_from, "r") or Die("Не удалось открыть файл для считывания!");
		while(!feof($file))
		{
			$arr = explode(",", fgets($file));

			$ending = end(explode(".", $arr[0]));
			if ($ending == 'php' || $ending == 'js')
			{
				echo "Файл " . $arr[0] . " не создан, так как имеет расширение " . $ending . "<br/>";  
				continue;
			}
			
			if(gettype(stripos($arr[0], "../")) == "boolean" && gettype(stripos($arr[0], "..\\")) == "boolean")
			{
				$createdFile = fopen($directory_to . $arr[0], "w");
				fwrite($createdFile, $arr[1]);
				fclose($createdFile);
			}
			else 
			{
				echo "Файл " . $arr[0] . " на создан так как имеет вредоносное имя. Измените его!";  
			}
		}
		fclose($file);
	}
 ?>