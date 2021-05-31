	<!DOCTYPE html>
	<html>
	<head>
		<title>Bai9</title>
	</head>
	<style type="text/css">
		.bg-green{
			background-color: green;
			height: 30px;
			width: 30px;
		}
		.bg-color{
			background-color: yellow;
			height: 30px;
			width: 30px;
		}
	</style>
	<body>
		<table>
			<tbody>
			<?php
				for($i = 1;$i <= 10;$i++)
				{
			?>
			<tr class="bg-color">
				<?php
					for($j = 1;$j <= 10;$j++)
					{
				?>
					<?php
						$number = 10*($i-1)+$j;
						if(isPrime($number) == true)
						{
							echo "<td class='bg-green'>$number</td>";
						}
						else
						{
						echo "<td class='bg-color'>$number</td>";
						}
					?>
				<?php
					}
				?>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
	<?php
		function isPrime($number)
		{
			if($number < 2)
			{
				return false;
			}

			for($i = 2;$i <= sqrt($number); $i++)
			{
				if($number%$i ==0)
				{
					return false;
				}
			}

			return true;
		}
	?>
</body>
</html>