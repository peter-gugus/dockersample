<!DOCTYPE html>
<html>
<head>
	<title>My Shop</title>
</head>
<body>
	<h1>insign docker training</h1>
	<ul>
		<?php
			$json = file_get_contents('http://product-service');
			$obj = json_decode($json);

			$pro = $obj->products;
			foreach ($pro as $product) {
				echo "<li>$product</li>";
			}
		?>
	</ul>
</body>
</html>