<?php
  require('./libreria.php');//buscar el archivo php llamado libreria
  $getData = leerDatos(); //Leer la informacion del archivo json.
  obtnTipo($getData);//se usa para obtener que tipo de casa se filtra
 ?>