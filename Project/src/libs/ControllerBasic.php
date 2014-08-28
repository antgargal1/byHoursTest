<?php
require_once ("libs/MasterClass.php");
require_once ("libs/View.php");
class ControllerBasic{

	protected $view;
	public function __construct()   {
		$this->view = new View();
	}
}
?>