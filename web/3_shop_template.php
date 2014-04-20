<!DOCTYPE html>
<html>
	<head>
		<title>Нестенькин магазин коробочек</title>

		<style type="text/css">
			#main{
				margin: auto;
				width: 780px;
				height: 200px;
				margin: auto;
			}
			#logo{
				display: inline-block;
				width: 50px;
				height: 50px;
				float: left;
	
			}
			*{
				/*border: solid 1px black;*/
			}
			header{
				text-align: center;
			}
			a{
				text-decoration: none;
				color: black;
			}

		</style>

	</head>
	<body>
		<div id='main'>
			<header>
				<a href="http://180.lo/web/3_shop_template.php"><h1>Магазин коробочек</h1></a>
			</header>

			<?php
			// error_reporting(E_ERROR | E_WARNING | E_PARSE);
			if (isset($_POST['go_to_gheckout'])) { ?>
				Ура! Вы купили коробочку!
	
			<?php } else { ?>
			<div calss='item'>

				<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRLHOO3hcC987uasBS2u0gqdU5uihxFaHGP_dB7qfoqWNjc39Zc1E-q3m8" class='pict'>
				<form action='' method="post">
					<input type="hidden" name="go_to_gheckout" value="1"/>
					<input type="submit" value="Купить"/>
				</form>
			</div>
			<?php } ?>
		</div>
	</body>
</html>