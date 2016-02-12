<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Arvauspeli</title>

</head>

<body>
  
<?php
	
    if (!isset($_POST["arvaus"])) {
     
	 $viesti = "Arvaa numero väliltä 1 - 10 !";
   
     $_POST["arvattava"] = rand(1,10);
	 
} else if ($_POST["arvaus"] > $_POST["arvattava"]) {
	echo '<img src="smaller.jpg">';
    

} else if ($_POST["arvaus"] < $_POST["arvattava"]) { 
	echo '<img src="bigger.jpg">';
   

} else { 
	echo '<img src="horse.gif">';    
	     
}
?>
    
    <h1><?php echo $viesti; ?></h1>
        <form action="" method="POST">
        <p>Arvauksesi:
            <input type="number" name="arvaus"></p>
            <input type="hidden" name="arvattava" 
                   value="<?php echo $_POST["arvattava"]; ?>" ></p>
    <p><input type="submit" value="Arvaa"/></p>
        </form>
        
        <style>
			img {
				width: 400px;
				height: auto;
				}
		</style>
    </body>
</html>