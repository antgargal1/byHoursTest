<?php
require_once ( "/ModelBasic.php");

class HotelModel extends ModelBasic{
	
	function hotels(){

		$sql = "SELECT  * FROM  hotel";

		return $this->executeQueryAssoc($sql);
	}
	
	function GetHotel($params){

		$sql = "SELECT  * 
			FROM  hotel
			WHERE id = ".$params['id'];

		return $this->executeQueryAssoc($sql);
	}

	function AddHotel($params){

		$sql = "INSERT INTO hotel
			(name,city,address,distance_city_center,description)
			VALUES (
				'".$params['name']."',
				".$params['city'].",
				'".$params['address']."',
				".$params['distance_city_center'].",
				'".$params['description']."';

		return $this->executeQuery($sql);
	}

	function SaveHotel($params){

		$sql = "UPDATE hotel SET 
				name			='".$params['name']."',
				city			=".$params['city'].",
				address			='".$params['address']."',
				distance_city_center	=".$params['distance_city_center'].",
				description		='".$params['description']."';
		
		return $this->executeQuery($sql);
	}
	
	function RemoveHotel($params){
	
		$sql = "DELETE FROM hotel
			WHERE id = ".$params['id'];

		return $this->executeQuery($sql);
	}
}


?>