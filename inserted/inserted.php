<!DOCTYPE html>
<html>
<head>
	<title>Personu datubāze</title>
	<link rel="stylesheet" type="text/css" href="inserted_styles.css">
	<link rel="icon" type="image/png" href="../img/people_database_icon.png">
	<meta charset="utf-8">
</head>
<body>
	<div id="GeneralBlock">
		<div id="GeneralBlockHeader">
			<h1>Personu datubāze</h1>
		</div>
		<div id="GeneralBlockLeft">
			<div id="GeneralBlockLeftInsideBlock">
				<?php require_once('../php/class/classPeopleDatabase.php');
				$objDate = new PeopleDatabase;
				$objDate->Date();
				?>
			</div>
		</div>
		<div id="GeneralBlockCentral">
			<div id="GeneralBlockCentralHeader">
				<ul>
					<li id="GeneralBlockCentralHeaderFirstLi">Ievadīt</li>
					<li id="GeneralBlockCentralHeaderSecondLi" class="GeneralBlockCentralHeaderLi"><a href="../delete/delete.php">Dzēst</a></li>
					<li id="GeneralBlockCentralHeaderThirdLi" class="GeneralBlockCentralHeaderLi"><a href="../update/update.php">Rediģēt</a></li>
					<li id="GeneralBlockCentralHeaderFourLi" class="GeneralBlockCentralHeaderLi"><a href="../select/select.php">Izvēlēties</a></li>
				</ul>
			</div>
			<img src="../img/bloknot.png">
			<div id="GeneralBlockCentralContentBlock">
				<h2>Ievadi datus</h2>
				<h3>Dati ir ievietoti datu bāzē</h3>
				<form method="post" action="../php/from_insert.php">
					<h4>Vārds</h4>
					<input type="text" placeholder="Vārds" class="GeneralBlockCentralContentBlockInputText" name="Name">
					<br>
					<h4>Uzvārds</h4>
					<input type="text" placeholder="Uzvārds" class="GeneralBlockCentralContentBlockInputText" name="Surname">
					<br>
					<h4>Personas kods</h4>
					<input type="text" placeholder="Personas" id="GeneralBlockCentralContentBlockInputPersonalCode1" name="PersonalCode1">-<input type="text" placeholder="kods" id="GeneralBlockCentralContentBlockInputPersonalCode2" name="PersonalCode2">
					<br>
					<h4>Telefona numurs</h4>
					<input type="text" placeholder="Telefona numurs" class="GeneralBlockCentralContentBlockInputText" name="PhoneNumber">
					<br>
					<input type="submit" value="Sūtit" id="GeneralBlockCentralContentBlockButtonSubmit" class="GeneralBlockCentralContentBlockButtons"><input type="reset" value="Dzēst" class="GeneralBlockCentralContentBlockButtons">
				</form>
			</div>
		</div>
		<div id="GeneralBlockRight">
			<div id="GeneralBlockRightInsideBlock">
				<h2>Jūs esat pietiecies ka</h2>
				<h3 id="GeneralBlockRightInsideBlockNameSurname">Vārds Uzvārds</h3>
				<h3 id="GeneralBlockRightInsideBlockLogout">Iziet ></h3>
			</div>
		</div>
	</div>
</body>
</html>