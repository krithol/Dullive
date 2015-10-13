<!DOCTYPE html>
<html>
	<head>
		<title>DULL-live!</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTF-8">
	</head>
	<body>
		<div class="header">
		<h1>Velkommen til Dulls side!</h1>
		<div class="nav"
			<ul>
				<li><a href='#'>Om Dull</a></li>
				<li><a href="pages/prosjekter.html">Prosjekter</a></li>
				<li><a href ="http://www.iaeste.no/dull">Mer kode!</a></li>
			</ul>
		</div>
		</div>
		<div class="content">
		<p> </p>
		<p>Hei, tekst tekst!</p>
		<?php
			if(isset($_POST["name"])){
			$name = $_POST["name"];
			$bdate = $_POST["bdate"];
			$age = getage($bdate);
			if (strlen($name) > 0){
			echo "Du heter " . $name . " og du er " . $age . " &aringr gammel";
			}	
		}
		else {
			echo "Velkommen!";
			$name ="";
		}


		function getAge($bdate) {
			return floor((time() - strtotime($bdate))/(31536000));
		}

		?>


		<p>Test 2</p>

		<img id="bilde" src="DSC_0022.jpg" style="width: 600px">
		<form action ="" method="post">
			<input type="text" name="name" value="<?php echo $name; ?>"><br>
			<label>Fødselsdato: </label>
			<input type="date" name="bdate">
			<br>
			<input type="submit" value="Go!">
		</form>
		<p>Bildetekst mangler</p>
		</div>
	</body>
</html>
