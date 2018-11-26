<?php
/**
 * 
 */
class viewsModel{

	//function para enrutar las views
	protected function get_views_mod($views){
		$listWhite = ["home"];
		if (in_array($views, $listWhite)) {
			if (is_file("./app/views/contents/".$views."-view.php")) {
				$content = "./app/views/contents/".$views."-view.php";
			}else{
				$content = "login";
			}
		}elseif ($views == "login"){
			$content = "login";
		}elseif($views == "index"){
			$content = "login";
		}else{
			$content = "404";
		}
		return $content;
	}//end get_views_mod

}//end viewsModel