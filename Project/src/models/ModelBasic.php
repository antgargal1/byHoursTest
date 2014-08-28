<?php

require_once ("libs/MasterClass.php");

class ModelBasic {

	function executeQuery($sql){
		$serv = mysql_connect(_CONF_DB_HOST,_CONF_DB_USER,_CONF_DB_PASS) or die("Error in conection: " . mysql_error());
		mysql_select_db(_CONF_DB_NAME,$serv);
		$result = mysql_query($sql,$serv);
		mysql_close($serv);
		return $result;
	}

	function executeQueryAssoc($sql){
		$query = $this->executeQuery($sql);
		if(!empty($query)){
			while ($row = mysql_fetch_array($query,MYSQL_ASSOC)) {
				$rows[] = $row;
			}
		}
		return $rows;
	}

	function executeQueryNumber($sql){
		$query = $this->executeQuery($sql);
		if(!empty($query)){
			while ($row = mysql_fetch_array($query,MYSQL_NUM)) {
				$rows[] = $row;
			}
		}
		return $rows;
	}

}
?>