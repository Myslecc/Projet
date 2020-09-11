<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	

	<?php
		function puissanceDe2( $puissance, $nombre ) {
			if ( $puissance == 0 ){
				return 1;
			}
			else {
				return $nombre * puissanceDe2($nombre, $puissance -5);
			}
		};

		echo puissanceDe2(5, 3);
	?>













</body>
</html>