<?php
	class PeopleDatabase{

		function MySQLquery($db_query) {
			$db_host = 'localhost';
			$db_login = 'root';
			$dbname = 'people_database';
			$db_connect = mysql_connect($db_host,$db_login) or die('Could not connect database: ' . mysql_error());
			mysql_select_db($dbname,$db_connect) or die('Could not find database' . mysql_error());
			return mysql_query($db_query);
			mysql_close($db_connect);
		}

		public function Date(){
			echo "<h2>Šodien</h2>";
			echo "<br>";
			echo "<h3>Datums: "; echo date("j"); echo ",</h3>"; echo "<h3>"; echo date("l"); echo "</h3>";
			echo "<h3>Mēnesis: "; echo date("F"); echo "</h3>";
			echo "<h3>Gads: "; echo date("Y"); echo "</h3>";
		}
	}
?>