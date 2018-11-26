<?php
//se incluye el config.php dónde está las variables raíz del software
require_once "./system/core/config.php";

//se incluye el controlador principal de las views
require_once "./app/controllers/viewsController.php";

//se llaman los métodos de la class viewsController y se crea el objeto de la clase
$layout = new viewsController();
$layout->get_layout_con();