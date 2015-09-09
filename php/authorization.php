<?php
	require_once('class/classPeopleDatabase.php');

	$Login = trim($_POST['Login']);
	$Password = sha1(md5(trim($_POST['Password'])));
	
	$select = "SELECT login, password FROM authorization WHERE login = '$Login'";

	$objAuthorization = new PeopleDatabase;
	$array = mysql_fetch_array($objAuthorization->MySQLquery($select));
	
	if ($Login == $array[0] && $Password == $array[1]) {
		header('Location: http://mysite/PeopleDatabase/insert/insert.php');
	}

	else {

		header('Location: http://mysite/PeopleDatabase/wrong_authorization/wrong_authorization.php');
	}
?>