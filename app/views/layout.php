<!DOCTYPE html>
<html>
<head>
	<title><?php echo COMPANY ?></title>
<?php
//se incluyen los modules del head y scripts de la página HTML
include "./app/views/modules/head.php";
include "./app/views/modules/script.php";
//condición para evitar el regreso de la página con la flecha atrás del navegador
if ($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == $_SERVER['HTTP_HOST']."/viajes_de_bodas/" || $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == $_SERVER['HTTP_HOST']."/viajes_de_bodas/login/" || $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == $_SERVER['HTTP_HOST']."/viajes_de_bodas/login") {
	$onload = NULL;
}else{
	$onload = "VIAJES()";
}
?>
</head>
<body onload="<?php echo $onload; ?>">
<!-- script para evitar el regreso de la página con la flecha atrás del navegador -->
<script type="text/javascript">
function VIAJES(){
	window.location.hash="VIAJES";   
	window.location.hash="Again-No-back-button" //chrome
	window.onhashchange=function(){window.location.hash="VIAJES";}
}
</script>
	<?php
	$peticionAjax = false;
	require_once "./app/controllers/viewsController.php";
	$vw = new viewsController();
	$vtr=$vw->get_views_con();
	if($vtr == "login" || $vtr == "404"):
		if ($vtr=="login") {
			require_once "./app/views/contents/login-view.php";
			//echo '<script src="'.SERVERURL.'system/core/js/registrarse.js"></script>';
		}else{
			require_once "./app/views/contents/404-view.php";
		}
	else:
	?>
    <div class="container">
    <?php include "./app/views/modules/navlateral.php"; ?>
        <?php require_once $vtr; ?>
    </div>
    <script>
        new gnMenu( document.getElementById( 'gn-menu' ) );
    </script>
    <?php
    //include "./app/views/modules/logoutScript.php";
    //include "./app/views/modules/searchScript.php";
    endif;
    ?>
</body>
</html>