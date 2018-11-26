<?php
//se incluye el modelo de las views
require_once "./app/models/viewsModel.php";
/**
 * 
 */
class viewsController extends viewsModel{

	//function cargar la plantilla principal
	public function get_layout_con(){
		return require_once "./app/views/layout.php";
	}//end get_layout_con

	//function cargar las views del software
	public function get_views_con(){
		if (isset($_GET['views'])) {
			$route=explode("/", $_GET['views']);
			$answer=viewsModel::get_views_mod($route[0]);
		}else{
			$answer="login";
		}
		return $answer;
	}//end get_views_con

}//end class viewsController