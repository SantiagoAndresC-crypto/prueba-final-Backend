<?php
  require('./libreria.php');//buscar el archivo php llamado libreria
  $filtroCiudad = $_GET['filtro']['Ciudad'];//filtro especial para ciudades
  $filtroTipo = $_GET['filtro']['Tipo'];//filtro para tipos de casas
  $filtroPrecio =  $_GET['filtro']['Precio'];//filtro de precio establecido en cada una
  $getData = leerDatos(); //Leer los datos

  filtrarDatos($filtroCiudad, $filtroTipo, $filtroPrecio,$getData);//guarda los filtros
 ?>