<?php
	
	setcookie("nimi", "samu-esa");
	setcookie("auto", "Honda", time() + 60 * 10);
	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>COOOOKIEEEEEESSS!</title>
</head>

<body>

	<script>
    	alert("Sivusto käyttää evästeitä, Jatkamalla hyväksyt ehdot! HÄHÄÄÄÄÄ");
    </script>
    <img src="cookiemonster.jpeg" /><br>
    <?php
		$nimi = $_COOKIE["nimi"];
		$auto = $_COOKIE["auto"];
		
		echo "{$nimi}n auto on $auto";
		
	?>

</body>
</html>