<?php
	require_once('class/classPeopleDatabase.php');

	$PersonalCode = $_POST['PersonalCode1'] . "-" . $_POST['PersonalCode2'];
	$select1 = "SELECT id FROM people_personal_code WHERE personal_code = '$PersonalCode'";
	$obj_select = new PeopleDatabase;
	$select1_result = $obj_select->MySQLquery($select1);
	$select1_array = mysql_fetch_array($select1_result);

	$select2 = "SELECT name, surname, phone_number FROM people_list WHERE id = '$select1_array[0]'";

	$select2_result = $obj_select->MySQLquery($select2);
	$select2_array = mysql_fetch_array($select2_result);

	echo "<h4>Vārds</h4>";
	echo "<input type=\"text\" class=\"GeneralBlockCentralContentBlockInputText\" value=\""; echo $select2_array[0] . "\">";
	echo "<br>";
	echo "<h4>Uzvārds</h4>";
	echo "<input type=\"text\" class=\"GeneralBlockCentralContentBlockInputText\" value=\""; echo $select2_array[1] . "\">";
	echo "<br>";
	echo "<h4>Personas kods</h4>";
	echo "<input type=\"text\" id=\"GeneralBlockCentralContentBlockInputPersonalCode1\">-<input type=\"text\" id=\"GeneralBlockCentralContentBlockInputPersonalCode2\">";
	echo "<br>";
	echo "<h4>Telefona numurs</h4>";
	echo "<input type=\"text\" class=\"GeneralBlockCentralContentBlockInputText\" value=\""; echo $select2_array[2] . "\">";
?>