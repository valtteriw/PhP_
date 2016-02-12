<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php
		$nimeni = "  anssi lavonen ";
		echo "Alussa: " . $nimeni . ".<br>";
		
		function muokattu($nimeni) {
			$nimet2 = explode(" ", $nimeni);
			foreach ($nimet2 as $nimi) {
				
				$nimet .= ucfirst($nimi) . " ";
				
				}	$nimet = trim($nimet);
					
					return $nimet;	
			}
			
			echo "Lopussa: " . muokattu($nimeni) . ".";
		
?>

</body>
</html>