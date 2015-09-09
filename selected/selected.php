<!DOCTYPE html>
<html>
<head>
	<title>Personu datubāze</title>
	<link rel="stylesheet" type="text/css" href="selected_styles.css">
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
					<li id="GeneralBlockCentralHeaderFirstLi"><a href="../insert/insert.php">Ievadīt</a></li>
					<li id="GeneralBlockCentralHeaderSecondLi" class="GeneralBlockCentralHeaderLi"><a href="../delete/delete.php">Dzēst</a></li>
					<li id="GeneralBlockCentralHeaderThirdLi" class="GeneralBlockCentralHeaderLi"><a href="../update/update.php">Rediģēt</a></li>
					<li id="GeneralBlockCentralHeaderFourLi" class="GeneralBlockCentralHeaderLi"><a href="../select/select.php">Izvēlēties</a></li>
				</ul>
			</div>
			<img src="../img/bloknot.png">
			<div id="GeneralBlockCentralContentBlock">
				<h2>Jūsu izvēlētā persona</h2>
					<form>
					<?php include '../php/select.php'; ?>
					<!--<h4>Vārds</h4>
					<input type="text" readonly class="GeneralBlockCentralContentBlockInputText">
					<br>
					<h4>Uzvārds</h4>
					<input type="text" readonly class="GeneralBlockCentralContentBlockInputText">
					<br>
					<h4>Personas kods</h4>
					<input type="text" readonly id="GeneralBlockCentralContentBlockInputPersonalCode1">-<input type="text" readonly id="GeneralBlockCentralContentBlockInputPersonalCode2">
					<br>
					<h4>Telefona numurs</h4>
					<input type="text" readonly class="GeneralBlockCentralContentBlockInputText">-->
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