<?php
	require_once ('class/classPeopleDatabase.php');

	$Name = $_POST['Name'];
	$Surname = $_POST['Surname'];
	$PhoneNumber = $_POST['PhoneNumber'];
	$PersonalCode = $_POST['PersonalCode1'] . "-" . $_POST['PersonalCode2'];
	$query1 = "INSERT INTO  people_list (name,surname,phone_number) VALUES ('$Name','$Surname','$PhoneNumber')";

	$obj_from_insert = new PeopleDatabase;
	$obj_from_insert->MySQLquery($query1);
	$LastInsertID = mysql_insert_id();
	$query2 = "INSERT INTO  people_personal_code (id,personal_code) VALUES ('$LastInsertID','$PersonalCode')";
	$obj_from_insert->MySQLquery($query2);
	header('Location: http://mysite/PeopleDatabase/inserted/inserted.php');
?>