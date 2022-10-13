//Grade_Sheet
<html>
<body>

			echo "<br><br>";
			$name = "sage";
			$grade = 59;
			if ($grade >= 70) 
			{
				echo "Name: ".$name . "<br>Grade: ". $grade . ", you passed. <br>";
			} 
			elseif (($grade >=60) && ($grade <=69))
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", get remedial exam. <br>";
			}
			else
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", you failed. <br>";
			}
			</html>
			</body>
