<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Kirjaudu sisään</title>
</head>

<body>

	<form>
  Käyttäjätunnus:<br>
  <input type="text" name="username" method="GET"><br>
  Salasana:<br>
  <input type="text" name="password" method="GET"><br>
  <?php salaus() ?><input type="submit" value="Kirjaudu" ></a>
</form>

<?php
	function salaus() {
	if($_GET["username"] == "kungen" || $_GET["password"] == "anssi") {
		$linkki = '<a href="randomizer.php">';
		echo $linkki;
		}	else {
			$linkki = '<a href="#">';
			echo $linkki;
			}
	}

?>

</body>
</html>