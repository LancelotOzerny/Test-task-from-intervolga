<?php 
	function ValueInserting(&$numbers, $value)
	{
		for ($i = 0; $i < count($numbers); $i++)
		{
			// Если есть двойска в числе
			if(CheckDigitalTwo($numbers[$i]))
			{
				// То вставляем элемент в конец списка
				array_push($numbers, $value);

				// Перекидваем его до ДАННОЙ + 1 позиции
				for ($j = count($numbers) - 1; $j > $i + 1; --$j)
				{
					$temp = $numbers[$j];
					$numbers[$j] = $numbers[$j - 1];
					$numbers[$j - 1] = $temp; 
				}

				// Так как следующий элемент - вставленный (и может содержать 2) то пропускаем сразу две итерации
				$i++;
			}
		}
	}

	// 
	function CheckDigitalTwo(int $value)
	{
		while ($value > 0)
		{
			$digit = $value % 10;

			if ($digit == 2)
			{
				return true;
			}

			$value = ($value - $digit) / 10;
		}

		return false;
	}
?>