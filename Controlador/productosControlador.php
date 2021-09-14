<?php
require_once("Modelo/productosModelo.php");
$objetoProductos=new productos_modelo();
$productosTabla=$objetoProductos->get_productos();

require_once("Vista/productos_view.php");
?>
