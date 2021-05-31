<!DOCTYPE html>
<html>
<head>
	<title>Bai7</title>
	<link rel="stylesheet" type="text/css" href="bai7day12.css">
</head>
<body>
	<table>
		<?php
			for($i = 1;$i <= 8;$i++)
			{
				echo "<tr>";
				for($j = 1;$j <= 8;$j++)
				{
					$sum = $i + $j;
					if($sum%2 == 0)
					{
						echo "<td class='m'></td>";
					}
					else
					{
						echo "<td class='n'></td>";
					}
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>